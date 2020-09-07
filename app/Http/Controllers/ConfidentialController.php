<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confidential;

class ConfidentialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {
        $medicals = Confidential::where('user_id', auth()->user()->id)->get();
        return view('forms.details',compact('medicals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NameRelation'=>'required|string',
            'QsnID'=>'required',
            'Medical'=>'required',
            'Treatment'=>'required',
            'DoctorsInfo'=>'required',
            'FutureTreatment'=>'required',
        ]);

        auth()->user()->confidentials()->create($request->all());
        return redirect()->route('confidential.show');
    }
}
