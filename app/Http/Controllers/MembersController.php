<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Agreement;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $user_id = auth()->user()->id;
        $member = Member::find($user_id);
        $status = Agreement::where('user_id',$user_id)->get();

        if(isset($member)){
        return view('forms.infoEdit',compact('member','status'));
        } else {
            return view('forms.info',compact('status'));
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
        $status = Agreement::where('user_id',$user_id)->get();
        return view('forms.infoEdit',compact('member','status'));
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