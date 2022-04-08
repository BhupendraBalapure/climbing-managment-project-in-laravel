<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactPage()
    {
        return view('contactUs.contactPage');
    }

    public function createContact(Request $request)
    {
        // dd($request->all());

        $cont = new Contact();

        $cont->name = $request->name;
        $cont->email = $request->email;
        $cont->phone = $request->phone;
        $cont->message = $request->message;

        

        $cont->save();
        return back()->with('msgSend','Thank you for contact us!');

    } 
    public function shwoContact()
    {
        $contactus = Contact::paginate(5);
        return view('contactUs.show',['contacts'=>$contactus]);
    }

    
   

    
}
