<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agreement;
class AdminController extends Controller
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
    public function index($user)
    {
        $id = auth()->user()->id;
        $status = Agreement::where('user_id',$id)->get();
        return view('admin.index',compact('status'));
    }

    public function show()
    {
        return view('admin.panel');
    }
    
}
