<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessLoan;
use App\Exports\UsersExport;
// use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class BusinessController extends Controller
{
    
  // shwoing all data

    public function showdata()
    {
        // $businessloans = BusinessLoan::all();
        // return view('businessloan.show',compact('businessloans'));

        // $businessloans = BusinessLoan::paginate(5);
                $businessloans = BusinessLoan::orderBy('created_at', 'desc')->simplePaginate(4);

        
        return view('businessloan.show',['business_loans'=>$businessloans]);
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'business_loan.xlsx');
    }
  
    public function index()
    {
        return view('businessloan.create-step-one');
    }
 
    public function createStepOne(Request $request)
    {
        $businessloan = $request->session()->get('businessloan');
  
        return view('businessloan.create-step-one',compact('businessloan'));
    }
  
 
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required|regex:/[6789][0-9]{9}/',
        ]);
  
        if(empty($request->session()->get('businessloan'))){
            $businessloan = new BusinessLoan();
            $businessloan->fill($validatedData);
            $request->session()->put('businessloan', $businessloan);
        }else{
            $businessloan = $request->session()->get('businessloan');
            $businessloan->fill($validatedData);
            $request->session()->put('businessloan', $businessloan);
        }
  
        return redirect()->route('businessloan.create.step.two');
    }
  
 
    public function createStepTwo(Request $request)
    {
        $businessloan = $request->session()->get('businessloan');
  
        return view('businessloan.create-step-two',compact('businessloan'));
    }
  
 
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'loan' => 'required',
            'pan' => 'required',
            'email' => 'required',
            'pan' => 'required|regex:/[A-Z]{5}[0-9]{4}[A-Z]{1}/',
            'dob' => 'required',
            'income_source' => 'required',
            'company_name' => 'required',
            'salary' => 'required',
            'city' => 'required',
            'pincode' => 'required|regex:/[1-9][0-9]{5}/',
        ]);
  
        $businessloan = $request->session()->get('businessloan');
        $businessloan->fill($validatedData);
        $request->session()->put('businessloan', $businessloan);
  
        return redirect()->route('businessloan.create.step.three');
    }
  

    public function createStepThree(Request $request)
    {
        $businessloan = $request->session()->get('businessloan');
  
        return view('businessloan.create-step-three',compact('businessloan'));
    }
 
    public function postCreateStepThree(Request $request)
    {    
        $businessloan = $request->session()->get('businessloan');

        //pan
        $pan_file=$request->pan_file_image;
        if ($pan_file !== null) {
        $file_name_pan = time().'.'.$pan_file->getClientOriginalExtension();
        $request->pan_file_image->move('businessloan_upload/panCard',$file_name_pan);

        $businessloan->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file=$request->aadhaar;
        if ($aadhaar_file !== null) {
        $file_name_aadhaar = time().'.'.$aadhaar_file->getClientOriginalExtension();
        $request->aadhaar->move('businessloan_upload/aadhaar',$file_name_aadhaar);

        $businessloan->aadhaar = $file_name_aadhaar;
        }
                 
         //income_proof
         $income_proof_file=$request->income_proof;
        if ($income_proof_file !== null) {
         $file_name_income_proof = time().'.'.$income_proof_file->getClientOriginalExtension();
         $request->income_proof->move('businessloan_upload/income_proof',$file_name_income_proof);
 
         $businessloan->income_proof = $file_name_income_proof;
        }
          //photo
        $photo_file=$request->photo;
        if ($photo_file !== null) {
        $file_name_photo = time().'.'.$photo_file->getClientOriginalExtension();
        $request->photo->move('businessloan_upload/photo',$file_name_photo);

        $businessloan->photo = $file_name_photo;
        }

         //statment
         $statment_file=$request->statment;
        if ($statment_file !== null) {
         $file_name_statment = time().'.'.$statment_file->getClientOriginalExtension();
         $request->statment->move('businessloan_upload/statment',$file_name_statment);
         $businessloan->statment = $file_name_statment;
        }

       $businessloan->save();
 
       $request->session()->forget('businessloan');
 
       // return redirect()->route('businessloan.create.step.one');
       // return redirect('/')->with('form_send','<script type="text/javascript">alert("Thank, you Application has been sucessfully submitted our, representative contact you shortly!");</script>');
       return response()->json([
           'status' => 200,
           'message' => "Thank, you Application has been sucessfully submitted our, representative contact you shortly!!"
       ]);
    
    }

       // pan
       public function download(Request $request ,$file)
       {
           return response()->download(public_path('businessloan_upload/panCard/'.$file));
       }
       // photo
       public function downloadphoto(Request $request ,$file)
       {
           return response()->download(public_path('businessloan_upload/photo/'.$file));
       }
      // statement
       public function downloadstatement(Request $request ,$file)
       {
           return response()->download(public_path('businessloan_upload/statment/'.$file));
       }
           // income
       public function downloadincome(Request $request ,$file)
       {
           return response()->download(public_path('businessloan_upload/income_proof/'.$file));
       }
           // aaddhar
       public function downloadaadhar(Request $request ,$file)
       {
           return response()->download(public_path('businessloan_upload/aadhaar/'.$file));
       }

}

