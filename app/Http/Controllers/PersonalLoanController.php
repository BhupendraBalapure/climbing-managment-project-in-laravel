<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalLoan;
use App\Exports\personalExport;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;



class PersonalLoanController extends Controller
{ 
    public function show()
    {
        // $personalloans = PersonalLoan::paginate(5);
                $personalloans = PersonalLoan::orderBy('created_at', 'desc')->simplePaginate(4);

  
        return view('personalLoan.show',compact('personalloans'));
    }
  
    public function index()
    {
        return view('personalLoan.create-step-one');
    }

    public function per_export() 
    {
        return Excel::download(new personalExport, 'Personal_Loan.xlsx');
    }
 
    public function createStepOne(Request $request)
    {
        $personalloan = $request->session()->get('personalloan');
  
        return view('personalLoan.create-step-one',compact('personalloan'));
    }
  
 
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required|regex:/[789][0-9]{9}/',
        ]);
  
        if(empty($request->session()->get('personalloan'))){
            $personalloan = new PersonalLoan();
            $personalloan->fill($validatedData);
            $request->session()->put('personalloan', $personalloan);
        }else{
            $personalloan = $request->session()->get('personalloan');
            $personalloan->fill($validatedData);
            $request->session()->put('personalloan', $personalloan);
        }
  
        return redirect()->route('personalLoan.create.step.two');
    }
  
 
    public function createStepTwo(Request $request)
    {
        $personalloan = $request->session()->get('personalloan');
  
        return view('personalLoan.create-step-two',compact('personalloan'));
    }
  
 
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'loan' => 'required',
            // 'pan' => 'required',
            'email' => 'required',
            'pan' => 'required|regex:/[A-Z]{5}[0-9]{4}[A-Z]{1}/',
            'dob' => 'required',
            'income_source' => 'required',
            'company_name' => 'required',
            'salary' => 'required',
            'city' => 'required',
            'pincode' => 'required|regex:/[1-9][0-9]{5}/',
        ]);
  
        $personalloan = $request->session()->get('personalloan');
        $personalloan->fill($validatedData);
        $request->session()->put('personalloan', $personalloan);
  
        return redirect()->route('personalLoan.create.step.three');
    }
  

    public function createStepThree(Request $request)
    {
        $personalloan = $request->session()->get('personalloan');
  
        return view('personalLoan.create-step-three',compact('personalloan'));
    }
 
    public function postCreateStepThree(Request $request)
    {
        $personalloan = $request->session()->get('personalloan');

         //pan
         $pan_file=$request->pan_file_image;
         if ($pan_file !== null) {
         $file_name_pan = time().'.'.$pan_file->getClientOriginalExtension();
         $request->pan_file_image->move('personalLoan_upload/panCard',$file_name_pan);
 
         $personalloan->pan_file_image = $file_name_pan;
         }

         // aadhaar
         $aadhaar_file=$request->aadhaar;
         if ($aadhaar_file !== null) {
         $file_name_aadhaar = time().'.'.$aadhaar_file->getClientOriginalExtension();
         $request->aadhaar->move('personalLoan_upload/aadhaar',$file_name_aadhaar);
 
         $personalloan->aadhaar = $file_name_aadhaar;
         }
                  
          //income_proof
          $income_proof_file=$request->income_proof;
         if ($income_proof_file !== null) {
          $file_name_income_proof = time().'.'.$income_proof_file->getClientOriginalExtension();
          $request->income_proof->move('personalLoan_upload/income_proof',$file_name_income_proof);
  
          $personalloan->income_proof = $file_name_income_proof;
         }
           //photo
         $photo_file=$request->photo;
         if ($photo_file !== null) {
         $file_name_photo = time().'.'.$photo_file->getClientOriginalExtension();
         $request->photo->move('personalLoan_upload/photo',$file_name_photo);
 
         $personalloan->photo = $file_name_photo;
         }
 
          //statment
          $statment_file=$request->statment;
         if ($statment_file !== null) {
          $file_name_statment = time().'.'.$statment_file->getClientOriginalExtension();
          $request->statment->move('personalLoan_upload/statment',$file_name_statment);
          $personalloan->statment = $file_name_statment;
         }
 


        $personalloan->save();
  
        $request->session()->forget('personalloan');
  
        // return redirect()->route('personalLoan.create.step.one');
        // return redirect('/')->with('form_send','<script type="text/javascript">alert("Thank, you Application has been sucessfully submitted our, representative contact you shortly!");</script>');
        return response()->json([
            'status' => 200,
            'message' => "Thank, you Application has been sucessfully submitted our, representative contact you shortly!!"
        ]);
    }

     // pan
     public function download(Request $request ,$file)
     {
         return response()->download(public_path('personalLoan_upload/panCard/'.$file));
     }
     // photo
     public function downloadphoto(Request $request ,$file)
     {
         return response()->download(public_path('personalLoan_upload/photo/'.$file));
     }
    // statement
     public function downloadstatement(Request $request ,$file)
     {
         return response()->download(public_path('personalLoan_upload/statment/'.$file));
     }
         // income
     public function downloadincome(Request $request ,$file)
     {
         return response()->download(public_path('personalLoan_upload/income_proof/'.$file));
     }
         // aaddhar
     public function downloadaadhar(Request $request ,$file)
     {
         return response()->download(public_path('personalLoan_upload/aadhaar/'.$file));
     }

}
 