<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteDev;

class WebsiteDevController extends Controller
{
    public function index()
    {
        return view('webSite.websitePage');
    }
    public function show()
    {
        $webSites = WebsiteDev::paginate(5);
  
        return view('webSite.show',compact('webSites'));
    }

    public function createWebsite(Request $request)
    {
        $website = new WebsiteDev();

        $website->name = $request->name;
        $website->email = $request->email;
        $website->phone = $request->phone;
        $website->org_name = $request->org_name;
        $website->requirment = $request->requirment;

        $website->save();
        return redirect('/')->with('form_send','<script type="text/javascript">alert("Thank, you Application has been sucessfully submitted our, representative contact you shortly!");</script>');
    }
}
