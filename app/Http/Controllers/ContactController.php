<?php

namespace App\Http\Controllers;

use App\Agreement;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $id = auth()->user()->id;
        $status = Agreement::where('user_id',$id)->get();
        return view('contacts',compact('status'));
    }
}
