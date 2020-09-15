<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $history = History::find(auth()->user()->id);
        if(empty($history)){
            return view('forms.history');
        }
        return view('forms.editHistory',compact('history'));
    }

    public function store(Request $request){
        // Store data in database if it doesn't exist
        $history = History::find(auth()->user()->id);
        if(empty($history)){
            $request->validate([
                'Qsn1'=>'required',
                'Qsn2'=>'required',
                'Qsn3'=>'required',
                'Qsn4'=>'required',
                'Qsn5'=>'required',
                'Qsn6'=>'required',
                'Qsn7'=>'required',
                'Qsn8'=>'required',
                'Qsn9'=>'required',
                'DoctorName'=>'required',
            ]);

            $input = $request->Qsn1;
            $input1 = $request->Qsn2;
            $input2 = $request->Qsn3;
            $input3 = $request->Qsn4;
            $input4 = $request->Qsn5;
            $input5 = $request->Qsn6;
            $input6 = $request->Qsn7;
            $input7 = $request->Qsn8;
            $input8 = $request->Qsn9;

            auth()->user()->history()->create($request->all());
        // If a user chooses any YES option, redirected to a different page 
            if($input1 == 'yes' || $input2 == 'yes' || $input3 == 'yes' || $input4 == 'yes' || $input5 == 'yes' || $input6 == 'yes' || $input7 == 'yes' || $input8 == 'yes' || $input == 'yes')
            {
                return redirect()->route('confidential.show');
            }
            return redirect()->route('agreement.show');
        } 
    }

    public function update(Request $request){
        $request->validate([
            'Qsn1'=>'required',
            'Qsn2'=>'required',
            'Qsn3'=>'required',
            'Qsn4'=>'required',
            'Qsn5'=>'required',
            'Qsn6'=>'required',
            'Qsn7'=>'required',
            'Qsn8'=>'required',
            'Qsn9'=>'required',
            'DoctorName'=>'required',
        ]);

        $input = $request->Qsn1;
        $input1 = $request->Qsn2;
        $input2 = $request->Qsn3;
        $input3 = $request->Qsn4;
        $input4 = $request->Qsn5;
        $input5 = $request->Qsn6;
        $input6 = $request->Qsn7;
        $input7 = $request->Qsn8;
        $input8 = $request->Qsn9;

        $user_id = auth()->user()->id;
        $medicalHistory = History::find($user_id);

        if(isset($medicalHistory)){
            $medicalHistory->update($request->all());
    
            // If a user chooses any YES option, redirected to a different page 
            if($input1 == 'yes' || $input2 == 'yes' || $input3 == 'yes' || $input4 == 'yes' || $input5 == 'yes' || $input6 == 'yes' || $input7 == 'yes' || $input8 == 'yes' || $input == 'yes')
                {
                    return redirect()->route('confidential.show');
                }
                return redirect()->route('agreement.show');
        } else{
            abort(404);
        }
    }
}
