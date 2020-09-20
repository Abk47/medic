<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Agreement;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;
class AgreementController extends Controller
{
  
public function __construct()
{
  $this->middleware('auth');
}

public function show()
{
  $id = auth()->user()->id;
  $status = Agreement::where('user_id',$id)->get();
  return view('forms.declaration', compact('status'));  
}

public function store(Request $request)
{
  $id = auth()->user()->id;
  $status = Agreement::find($id);

  if (empty($status)) {
  $status= new Agreement;
  $status->form_submit = $request->has('terms');
  $status->form_status = 0;
  $status->user_id= $id;
  $status->save();
  Mail::to($request->user()->email)->send(new ConfirmationMail());
  $request->session()->flash('form_success', 'Thank You! Your application has been submitted!');
  return redirect()->route('index.dashboard', $id)->with('status', $status);
}
  else{
    $request->session()->flash('form_message', 'The form already exists in our records!');
    return redirect()->route('index.dashboard',$id)->with('status', $status);
  }
}
}