<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{

    public function show(){
        $user_id = auth()->user()->id;
        $member = Member::find($user_id);
        if(isset($member)){
        return view('forms.infoEdit',compact('member'));
        } else {
            return view('forms.info');
        }
    }

    public function store(Request $request){
        $request->validate([
            'company'=>'required',
            'surname'=>'required',
            'other_names'=>'required',
            'user_email'=>'required',
            'DOB'=>'required',
            'passport'=>'required',
            'home_location'=>'required',
            'work_location'=>'required',
            'occupation'=>'required',
            'mobile_no'=>'required',
        ]);
        
        auth()->user()->member()->create($request->all());
        
        return redirect('/user/forms/membership-form/dependant');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user_id = auth()->user()->id;
        $member = Member::findOrFail($user_id);
        return view('forms.infoEdit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'company'=>'required',
            'surname'=>'required',
            'other_names'=>'required',
            'user_email'=>'required',
            'DOB'=>'required',
            'passport'=>'required',
            'home_location'=>'required',
            'work_location'=>'required',
            'occupation'=>'required',
            'mobile_no'=>'required',
        ]);

        $user_id = auth()->user()->id;
        $member = Member::find($user_id);
        $member->update($request->all());
        return redirect()->route('dependant.show');
    }
}

// TODO: If member details exist, return update route else return create route