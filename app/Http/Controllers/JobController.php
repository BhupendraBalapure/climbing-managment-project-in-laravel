<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\job;
use App\Models\Job;
use App\Models\career;


class JobController extends Controller
{
    public function jobPage()
    {
        return view('job.jobPage');
    }

    public function jobContact(Request $request)
    {
        // dd($request->all());

        $jobs = new Job();

        $jobs->name = $request->name;
        $jobs->email = $request->email;
        $jobs->dob = $request->dob;
        $jobs->phone = $request->phone;
        $jobs->education = $request->education;
        $jobs->job = $request->job;
        $jobs->exp = $request->exp;
        $jobs->location = $request->location;
        $jobs->company_name = $request->company_name;
        $jobs->message = $request->message;

        $jobs->save();
        return back()->with('msgSend','Your form submitted successfully Send your resume on "ankitshende@climbingmgt.com"');

    } 
    public function showjob()
    {
        $jobs = Job::paginate(5);
        return view('job.show',['jobs'=>$jobs]);
    }

     public function careerpage()
   {
       return view('job.career');
   } 
   
   public function careerstore(Request $request)
   {
        $career = new career();

        $career->first_name = $request->first_name;
        $career->last_name = $request->last_name;
        $career->email = $request->email;
        $career->phone = $request->phone;
        $career->education = $request->education;
        $career->location = $request->location;

        $career->save();
        return back()->with('msgSend','Your registered successfully!');
   }
   public function showCareer()
   {
       $careers = career::paginate(5);
       return view('job.showCareer',['careers'=>$careers]);
   }
   
   

   
}
