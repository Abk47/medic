<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function show(){
        return view('forms.history');
    }

    public function store(Request $request){
        if(auth()->user()->history()->create($request->all())){
            return redirect('/form4');
        }
        else{
            abort(404);
        }
        
        
    }
}
