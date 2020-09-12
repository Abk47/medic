<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
      return view('forms.declaration');  
    }

    public function store(Request $request)
    {
      dd($request->all());
    }

}
