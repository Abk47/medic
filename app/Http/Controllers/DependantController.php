<?php

namespace App\Http\Controllers;

use App\Dependant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DependantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $dependents = Dependant::where('user_id',$id)->get();
        return view('forms.schedule',compact('dependents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    
        $dependents = Dependant::where('user_id',Auth::id())->get();
        return view('forms.schedule',compact('dependents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function show(Dependant $dependant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependant $dependant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependant $dependant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependant  $dependant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependant $dependant)
    {
        //
    }
}
