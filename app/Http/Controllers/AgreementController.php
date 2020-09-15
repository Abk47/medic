<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Agreement;
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
  $id = auth()->user()->id;
  $status = Agreement::findOrFail($id);

  if (empty($status)) {
  $status= new Agreement;
  $status->form_submit = $request->has('terms');
  $status->form_status = 0;
  $status->user_id= $id;
  $status->save();
  return redirect()->route('index.dashboard',$id)->with('form_success','Thank You! Your application has been submitted!');
}
else{
  $id = auth()->user()->id;
  return redirect()->route('index.dashboard',$id)->with('form_message','The user form already exists in our records!');
}
}
}