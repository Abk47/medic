@extends('layouts.dashboard')
@section('content')
<div class="card card-danger">
   <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
   </div>
   <div class="content-section p-4">
      <h2 class="form-heading" style='color:#b50c2e'>DECLARATION OF MAIN MEMBER</h2>
      <div class="card bg-light mb-3">
         <div class="card-body">
            I, on behalf of myself and the members of my family proposed for insurance, 
            hereby declare that I have not withheld or misstated any particular material fact. 
            I understand that any misstatement or non disclosure of any material information
            in this form will jeopardize my membership. I hereby authorize the hospitals/medical
            practitioners who have treated me or any of my dependant to disclose to The Jubilee 
            Insurance Company of Tanzania Limited or their representative the records relating
            to such current or previous hospitalization/medical treatment and allow The Jubilee 
            Insurance Company of Tanzania Limited to receive extracts from such records and
            undertake to assist in obtaining such information.
         </div>
      </div>
      <div class="icheck-danger">
         <input type="checkbox" name="terms" id="terms" />
         <label for="terms"> I hereby acknowledge and agree to the above statement</label>
     </div>
      <div class="form-group mt-4" style="text-align: center">
         <a href="{{ url()->previous() }}" role="button" class='btn btn-danger'>Previous Page</a>
         <button type='submit' id='submit' class='btn btn-outline-info' disabled>Submit</button>
      </div>
   </div>
   </div>
</div>
@endsection