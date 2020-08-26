<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{

    public function show(){
        return view('forms.info');
    }

    public function save(Request $request){
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

        $member = Member::create($request->all());

        return redirect('/user/forms/membership-form/dependant');
    }
}
