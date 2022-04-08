<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchisee;

class FranchiseeController extends Controller
{
    public function index()
    {
        return view('franchisee.franchiseePage');
    }

    public function createFranchisee(Request $request)
    {
        $franchise = new Franchisee();

        $franchise->full_name = $request->full_name;
        $franchise->email = $request->email;
        $franchise->phone = $request->phone;
        $franchise->location = $request->location;
        $franchise->company_name = $request->company_name;

        $franchise->save();
        return redirect('/')->with('form_send','<script type="text/javascript">alert("Thank, you Application has been sucessfully submitted our, representative contact you shortly!");</script>');
    }
}
