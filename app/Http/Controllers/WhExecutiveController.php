<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Importwh_executive;
use App\Models\Wh_executive;
use App\Models\User;

class WhExecutiveController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Wh_executives = Wh_executive::latest()->paginate(10);

        // $id = Auth::id();

        // print_r($id);
        // exit();

        return view('backEnd.import_file.index', compact('Wh_executives'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.import_file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'location' => 'required',
            'cost' => 'required'
        ]);

        $Wh_executive = $request->name;

        Wh_executive::create($request->all());

        return redirect()->route('backEnd.import_file.create')
            ->with('success', $Wh_executive . ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Wh_executives $Wh_executives)
    {
        return view('projects.show', compact('Wh_executives'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Wh_executive $Wh_executives)
    {
        return view('backEnd.import_file.index', compact('Wh_executives'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $Wh_executives = $request->name;
        // $Wh_executives->update($request->all());
        // // return redirect()->route('backEnd.import_file.index')
        // //     ->with('success', 'Project deleted successfully');
        // return view('backEnd.import_file.index',compact('$Wh_executives'));

        // $wh_executives = $request->name;
        $wh_executives = Wh_executive::find($id);

        $wh_executives->code = $request->code;
        $wh_executives->update();
        // $wh_executives->save();

        return view('backEnd.import_file.index',compact('wh_executives'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    // public function destroy ( Request $request,Wh_executive $Wh_executive)
    // {
    //     $Wh_executive = $request->name;
    //     $Wh_executive->update($request->all());
    //     // return redirect()->route('backEnd.import_file.index')
    //     //     ->with('success', 'Project deleted successfully');
    //     return view('backEnd.import_file.edit',compact('$Wh_executive'));

    // }

    public function import()
    {

        Excel::import(new Importwh_executive, request()->file('file'));

        return back()->with('success', 'Project created successfully.');
    }

    public function wh_executiveindex()
    {
        // $wh_executive = Wh_executive::latest()->paginate(10);
        $wh_executive = Wh_executive::where('code',"=",auth()->user()->e_code)->orderBy('created_at','desc')->paginate(10);


        // $id = Auth::id();

        // print_r($id);
        // exit();

        // return view('backEnd.import_file.index', compact('Wh_executives'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('executive.wh_executive_show',compact('wh_executive'));
    }



    // public function showdata()
    // {
    //     $executives = Field_Executive::where('code',"=",auth()->user()->e_code)->orderBy('created_at','desc')->paginate(10);
    //     return view('executive.wh_executive_show',compact('executives'));
    // }


}
