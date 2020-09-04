<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{
    public function show(){
        return view('forms.history');
    }

    public function store(Request $request){
        $input = $request->Qsn1;
        $input1 = $request->Qsn2;
        $input2 = $request->Qsn3;
        $input3 = $request->Qsn4;
        $input4 = $request->Qsn5;
        $input5 = $request->Qsn6;
        $input6 = $request->Qsn7;
        $input7 = $request->Qsn8;
        $input8 = $request->Qsn9;
        
        if($input1 == 'yes' || $input2 == 'yes' || $input3 == 'yes' || $input4 == 'yes' || $input5 == 'yes' || $input6 == 'yes' ||
        $input7 == 'yes' || $input8 == 'yes' || $input == 'yes')
        {
            $history = History::find(auth()->user()->id);
            // if(isset($history)) return dd('Exists'); 
            isset($history) ? dd('Exists') : dd('Nope');
            // $saveMedicalHistory = auth()->user()->history()->create($request->all());
            // if(true){ 
                return redirect('/form4'); 
            // } abort(404);

        } else{
            // if(true){ 
                return redirect('/form5'); 
            // } abort(404);
        }  
    }
}
