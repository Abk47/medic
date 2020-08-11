@extends('layouts.dashboard')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
    </div>
    <div class="content-section p-5">
        <form method="POST" action="">
            @csrf
           <fieldset class="form-group">
              <h2 class="form-heading mb-4" style='color:#b50c2e'>YOUR PERSONAL DETAILS</h2>
              <!-- Form Fields -->
              <div class="form-group row">
                 <label for="company" class="col-sm-2 col-form-label">Employer's Name</label>
                 <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="company" value="Jubilee Insurance Company">
                 </div>
              </div>
              <div class="form-group row">
                 <label for="Surname" class="col-sm-2 col-form-label">Member's Surname</label>
                 <div class="col-sm-4">
                    <input type="text" class="form-control" id="userSurname" placeholder="Enter your surname here" required>
                 </div>
                 <label for="Surname" class="col-sm-2 col-form-label">Other Names</label>
                 <div class="col-sm-4">
                    <input type="text" class="form-control" id="otherNames" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="DOB"class='col-sm-2 col-form-label'>Date of Birth</label>
                 <div class="col-sm-10">
                    <input type="date" class="form-control" id="DOB" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="passport"class='col-sm-2 col-form-label'>ID or Passport number</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" id="passport" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="occupation"class='col-sm-2 col-form-label'>Occupation</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" id="occupation" required>
                    <small id="occupation" class="form-text text-muted">If more than one, state all.</small>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="address" class='col-sm-2 col-form-label'>Postal Address</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="location" class='col-sm-2 col-form-label'>Physical location of place of work</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" id="location" placeholder="Building/Street" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="home" class='col-sm-2 col-form-label'>Physical home address</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" id="home" placeholder="Residence/Area/House No." required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="telephone" class=" col-sm-2 col col-form-label">Telephone</label>
                 <div class="col">
                    <input type="text" class="form-control" placeholder="Office" id="office">
                 </div>
                 <div class="col">
                    <input type="text" class="form-control" placeholder="House" id="house">
                 </div>
                 <div class="col">
                    <input type="text" class="form-control" placeholder="Mobile" id="mobile" required>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="email" class='col-sm-2 col-form-label'>Email address</label>
                 <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                 </div>
              </div>
           </fieldset>
           <div class="form-group" style="text-align: center">
              <button type='submit' class='btn btn-outline-danger'>Next Page  <i class="fas fa-arrow-right"></i></button>
           </div>
        </form>
     </div>
</div>
@endsection
