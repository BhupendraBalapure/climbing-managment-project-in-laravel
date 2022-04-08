<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreditCard;
use App\Exports\BasicinfoExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class CreditCardController extends Controller
{
    public function index()
    {
        return view('creditCard.basicinfo');
    }

    public function indexstepone()
    {
        return view('creditCard.create-step-one');
    }
 
 
    public function BasicinfoExport() 
    {
        return Excel::download(new BasicinfoExport, 'Basic Info.xlsx');
    }
    
 
    public function postbasicinfo(Request $request)
    {
        $creditCard = new CreditCard();

        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        // $creditCard->salary = $request->salary;

        $creditCard->save();
        return redirect()->route('creditCard.create.step.one');
    }
    public function show1(){

              $CreditCards = CreditCard::orderBy('created_at', 'desc')->simplePaginate(4);
      
        return view('creditCard.show1', compact('CreditCards'));
    }
  
  
 
}
