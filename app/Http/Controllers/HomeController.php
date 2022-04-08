<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superAdmin()
    {
        return view('superAdmin.superAdminDashboard');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function teamleader()
    {
        return view('teamleader.dashboard');
    }
    public function backEnd()
    {
        return view('backEnd.dashboard');
    }
    public function executive()
    {
        return view('executive.dashboard');
    }
      public function home()
    {
        auth()->logout();
        return redirect('/');
    }
    
}