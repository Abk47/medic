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
  // dd($request->all());
  $status = Agreement::find(auth()->user()->id);

  if (empty($status)) {
  $status= new Agreement;
  $status->form_submit = $request->has('terms');
  $status->form_status = 0;
  $status->user_id= auth()->user()->id;
  $status->save();
  return response('success');
}
}
}