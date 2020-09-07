<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfidentialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {
        return view('forms.details');
    }
}
