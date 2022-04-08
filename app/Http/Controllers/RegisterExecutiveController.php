<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddTeam;
use App\Models\AddTeamLeader;
use App\Models\Field_Executive;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use App\Mail\SendMail;



class RegisterExecutiveController extends Controller
{
    //
    public function index()
    {
        // $usersdata = User::whereHas(
        //     'is_admin', function($q){
        //         $q->where('is_admin', 5);
        //     }
        // )->get();

        // $usersdata = User::where('is_admin',5)->get()->all();

        // $usersdata = User::where('is_admin',5)->paginate(5);

        $usersdata = User::where('team',false)->get();

        $shownewdata = AddTeam::all();
        $showteamLdata = AddTeamLeader::all();
        return view('superAdmin.registerExecutive',compact(['usersdata','shownewdata','showteamLdata']));
        // return view('superAdmin.registerExecutive');
    }

    public function registration(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'is_admin' => 'required'
            // 't_l_code' => 'required',
            // 'team' => 'required',
            // 'e_code' => 'required'
        ]);

        $userreg = new User();

        $userreg->name = $request->name;
        $userreg->email = $request->email;
        $userreg->password = Hash::make($request['password']);
        $userreg->is_admin = $request->is_admin;
        $userreg->team = $request->team;
        $userreg->t_l_code = $request->t_l_code;
        $userreg->e_code = $request->e_code;

        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password'=>$request->password,
            'is_admin' => $request->is_admin,
            'team' => $request->team            
        );
        // \Mail::to($request->email)->send(new SendMail($data));
        
        $userreg->save();
        return back()->with('success','User registered succesfully !');
    }

    public function destroy($id)
    {
        $userdelete = User::find($id);
        $userdelete->delete();
        return back()->with('deleted','User deleted succesfully !');
    }

    public function allRegistered()
    {
        // $usersdata = User::where('t_l_code',false)->paginate(5);

        $groups = User::where('team',false)->get()->groupBy('team');

        return view('superAdmin.all_registered_users',compact('groups'));
    }

    public function showperticular($id)
    {
        $showusers = User::find($id); //for perticular user

        //for perticular user's customers
        $showuserCustomers = Field_Executive::where('e_code',false)->get();

        // $showuserCustomers = Field_Executive::where('id','e_code')->paginate(5);
       

        // $showuserCustomers = Field_Executive::where('id','!=',$id)->get();

        // $showuserCustomers = Field_Executive::where('e_code',false)->get()->groupBy('e_code');

        // $showuserCustomers = Field_Executive::whereId($id)->first(); 
        return view('executive.showUser',compact(['showusers','showuserCustomers']));
    }    

}