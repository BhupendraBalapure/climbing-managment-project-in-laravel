<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field_Executive;
use App\Models\User;
use App\Models\Wh_executive;
use DB;
use Auth;
use App\Exports\MonthwiseExport;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

// use Illuminate\Support\Carbon;


class FieldExecutiveController extends Controller
{
    public function addcustomer(Request $request)
    {
        $executive = new Field_Executive();

        $executive->full_name = $request->full_name;
        $executive->email = $request->email;
        $executive->phone = $request->phone;
        $executive->occupation = $request->occupation;
        $executive->income = $request->income;
        $executive->t_l_code = $request->t_l_code;
        $executive->e_code = $request->e_code;
        $executive->executive_name = $request->executive_name;
        $executive->remark = $request->remark;
        $executive->status = 'IN Progress';
        
        // adher_front
        $adher_front_file=$request->adher_front;
        if ($adher_front_file !== null) {
        $file_name_adher_front = time().'.'.$adher_front_file->getClientOriginalExtension();
        $request->adher_front->move('upload/adher_front',$file_name_adher_front);

        $executive->adher_front = $file_name_adher_front;
        }
        //Adher
        $aadher_back_file=$request->adher_back;
        if ($aadher_back_file !== null) {
        $file_name_aadher_back = time().'.'.$aadher_back_file->getClientOriginalExtension();
        $request->adher_back->move('upload/adher_back',$file_name_aadher_back);

        $executive->adher_back = $file_name_aadher_back;
        }
        //pan
        $pan_file=$request->pan;
        if ($pan_file !== null) {
        $file_name_pan = time().'.'.$pan_file->getClientOriginalExtension();
        $request->pan->move('upload/panCard',$file_name_pan);

        $executive->pan = $file_name_pan;
        }
        
         //income_prof
         $income_prof_file=$request->income_prof;
        if ($income_prof_file !== null) {
         $file_name_income_prof = time().'.'.$income_prof_file->getClientOriginalExtension();
         $request->income_prof->move('upload/income_prof',$file_name_income_prof);
 
         $executive->income_prof = $file_name_income_prof;
        }
          //photo
        $photo_file=$request->photo;
        if ($photo_file !== null) {
        $file_name_photo = time().'.'.$photo_file->getClientOriginalExtension();
        $request->photo->move('upload/photo',$file_name_photo);

        $executive->photo = $file_name_photo;
        }

         //statment
         $statment_file=$request->statment;
        if ($statment_file !== null) {
         $file_name_statment = time().'.'.$statment_file->getClientOriginalExtension();
         $request->statment->move('upload/statment',$file_name_statment);
         $executive->statment = $file_name_statment;
        }

           //bill
        $bill_file=$request->bill;
        if ($bill_file !== null) {
        $file_name_bill = time().'.'.$bill_file->getClientOriginalExtension();
        $request->bill->move('upload/bill',$file_name_bill);
        $executive->bill = $file_name_bill;
        }

        $executive->save();
        // return back()->with('success', 'Customer added successfully.');
        return response()->json([
            'status' => 200,
            'message' => "Customer added succcesfully!"
        ]);
    }

    public function executiveShow(Request $request)
    {
        // $executives = Field_Executive::whereDate('created_at', Carbon::now())->paginate(15);


        // dd(now()->format('m/d/y'));
        // $executives = Field_Executive::orderBy('created_at','desc')->paginate(15);

                             
        $start_date = Carbon::parse($request->start_date)->toDateTimeString();
        $executives = Field_Executive::whereDate('created_at',[$start_date])->get();
    
        return view('executive.show',compact('executives'));
    }

    public function teamleaderDataShow()
    {
        $executives = Field_Executive::where('t_l_code',"=",auth()->user()->t_l_code)->orderBy('created_at','desc')->paginate(10);
        return view('teamleader.dashboard',compact('executives'));
    }

    public function backendShow()
    {
        $executives = Field_Executive::orderBy('created_at','desc')->paginate(10);
        return view('backEnd.login_data',compact('executives'));
    }

    public function approved($id){
        $executive = Field_Executive::find($id);
        $executive->status='Approved';
        $executive->save();
        // dd($data);
        return redirect()->back();
    }

    public function cancel($id){
        $executive = Field_Executive::find($id);
        $executive->status='cancel';
        $executive->save();
        // dd($data);
        return redirect()->back();
    }

    public function dispatch($id){
        $executive = Field_Executive::find($id);
        $executive->status='Dispatch';
        $executive->save();
        // dd($data);
        return redirect()->back();
    }

    public function showdata()
    {
        $executives = Field_Executive::where('e_code',"=",auth()->user()->e_code)->orderBy('created_at','desc')->paginate(10);
        return view('executive.customerData',compact('executives'));
    } 

    public function message(Request $request,Field_Executive $executives,$id){
        $request->validate([
            'message' => 'required',
            ]);
        $executives = Field_Executive::find($id);
        $executives->message = $request->message;
        $executives->message_exe = $request->message_exe;
        
        $executives->save();
        return redirect()->back();
    }

    public function message_exe(Request $request,Field_Executive $executives,$id){
        $request->validate([
            'message_exe' => 'required',
            ]);
        $executives = Field_Executive::find($id);
        $executives->message_exe = $request->message_exe;

        $executives->save();
        return redirect()->back();
    }

    public function login_data_teamwise_backend($id)
    {
        $showexes = User::find($id); //for perticular user
        $exeCustomers = Field_Executive::where('e_code',false)->get();
        return view('backEnd.login_data_teamwise',compact(['showexes','exeCustomers']));
    }

    public function allExecutives()
    {
        $groups = User::where('team',false)->get()->groupBy('team');
        return view('backEnd.all_executives',compact('groups'));
    }

    public function team_executives()
    {   
        $my_teams = Field_Executive::where('t_l_code',"=",auth()->user()->t_l_code)->get();
        return view('teamleader.team_executives',compact('my_teams'));
    }

    public function daily_report(Request $request)
    {
       $start_date = Carbon::parse($request->start_date)
                             ->toDateTimeString();

    //    $end_date = Carbon::parse($request->end_date)
    //                          ->toDateTimeString();

    //    $date_data = Field_Executive::whereBetween('created_at',[$start_date,$end_date])->get();
    $date_data = Field_Executive::whereDate('created_at',[$start_date])->get();


       return view('backEnd.selected_datewise_data',compact('date_data'));

    }

    public function daily_report_executive(Request $request)
    {
       $start_date = Carbon::parse($request->start_date)
                             ->toDateTimeString();
    $date_data = Field_Executive::whereDate('created_at',[$start_date])->get();
       return view('executive.executive_datewise_data',compact('date_data'));

    }
    public function export() 
    {
         return Excel::download(new MonthwiseExport, 'FieldExecutiveData.xlsx');
    }  
    // pan
    public function download(Request $request ,$file)
    {
        return response()->download(public_path('upload/panCard/'.$file));
    }
    // photo
    public function downloadphoto(Request $request ,$file)
    {
        return response()->download(public_path('upload/photo/'.$file));
    }
        // bill
    public function downloadother(Request $request ,$file)
    {
        return response()->download(public_path('upload/bill/'.$file));
    }
        // statement
    public function downloadstatement(Request $request ,$file)
    {
        return response()->download(public_path('upload/statment/'.$file));
    }
        // income
    public function downloadincome(Request $request ,$file)
    {
        return response()->download(public_path('upload/income_prof/'.$file));
    }
        // adher_front
    public function downloadadher_front(Request $request ,$file)
    {
        return response()->download(public_path('upload/adher_front/'.$file));
    }

    // adher_back
    public function downloadadher_back(Request $request ,$file)
    {
        return response()->download(public_path('upload/adher_back/'.$file));
    }

    public function update(Request $request, Wh_executive $wh_executives ,$id)
    {
        $wh_executives = Wh_executive::where('id', $id)->update($input);
        return view('backEnd.whExecutive', compact('wh_executives'));
    }
}
