@extends('layouts.dashboard')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
    </div>
    <div class="content-section p-5">
        <form method="POST" action="{{ route('members.update', $member->id) }}">
            @method('PATCH') 
            @csrf
           <fieldset class="form-group">
              <h2 class="form-heading mb-4" style='color:#b50c2e'>YOUR PERSONAL DETAILS</h2>
              <!-- Form Fields -->
              <div class="form-group row">
                 <label for="company" class="col-sm-2 col-form-label">Employer's Name</label>
                 <div class="col-sm-10">
                    <input type="text" readonly class="form-control" autoComplete="off" name="company" value="Jubilee Insurance Company">
                 </div>
              </div>
              <div class="form-group row">
                 <label for="Surname" class="col-sm-2 col-form-label">Member's Surname</label>
                 <div class="col-sm-4">
                    <input value="{{ $member->surname }}" type="text" class="form-control" autoComplete="off" name="surname" required>
                 </div>
                 <label for="Surname" class="col-sm-2 col-form-label">Other Names</label>
                 <div class="col-sm-4">
                    <input value="{{ $member->other_names }}" type="text" class="form-control" autoComplete="off" name="other_names" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="DOB"class='col-sm-2 col-form-label'>Date of Birth</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->DOB }}" type="date" class="form-control" autoComplete="off" name="DOB" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="passport"class='col-sm-2 col-form-label'>ID or Passport number</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->passport }}" type="text" class="form-control" autoComplete="off" name="passport" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="occupation"class='col-sm-2 col-form-label'>Occupation</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->occupation }}" type="text" class="form-control" autoComplete="off" name="occupation" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="address" class='col-sm-2 col-form-label'>Postal Address</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->address }}" type="text" class="form-control" autoComplete="off" name="address" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="location" class='col-sm-2 col-form-label'>Physical location of place of work</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->work_location }}" type="text" class="form-control" autoComplete="off" name="work_location" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="home" class='col-sm-2 col-form-label'>Physical home address</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->home_location }}" type="text" class="form-control" autoComplete="off" name="home_location" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="telephone" class=" col-sm-2 col col-form-label">Telephone</label>
                 <div class="col">
                  <input value="{{ $member->office_no }}" type="text" class="form-control" placeholder="Office" autoComplete="off" name="office_no">
                 </div>
                 <div class="col">
                  <input value="{{ $member->house_no }}" type="text" class="form-control" placeholder="House" autoComplete="off" name="house_no">
                 </div>
                 <div class="col">
                  <input value="{{ $member->mobile_no }}" type="text" class="form-control" placeholder="Mobile" autoComplete="off" name="mobile_no" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="email" class='col-sm-2 col-form-label'>Email address</label>
                 <div class="col-sm-10">
                    <input value="{{ $member->user_email }}" type="email" class="form-control" autoComplete="off" name="user_email" aria-describedby="emailHelp" required>
                    <small id="user_email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                 </div>
              </div>
           </fieldset>
           <div class="form-group" style="text-align: center">
              <button type='submit' name="submit" class='btn btn-outline-danger'>Next Page  <i class="fas fa-arrow-right"></i></button>
           </div>
        </form>
     </div>
</div>
@endsection
