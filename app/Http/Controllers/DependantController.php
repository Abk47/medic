<?php

namespace App\Http\Controllers;

use App\Dependant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DependantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            'full_name'=>'required',
            'DOB'=>'required',
            'identification'=>'required',
            'relationship'=>'required',
        ]);

        auth()->user()->dependants()->create($request->all());
        return redirect()->route('dependant.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function show(Dependant $dependant)
    {
        $id = Auth::id();
        $dependents = Dependant::where('user_id',$id)->get();
        return view('forms.dependents',compact('dependents'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = auth()->user()->id;
        $dependents= Dependant::findOrFail($id);
        if($dependents && $dependents->user_id){
            $dependents->delete();
            return redirect()->route('dependant.show')->with('status','Dependant successfully deleted!');
        } else{
            abort(404);
        }
    }
}
