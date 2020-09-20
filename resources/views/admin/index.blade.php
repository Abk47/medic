@extends('layouts.dashboard')

@section('content')
<!-- Page content  -->
<div class="content-section ">
<!-- Jumbotron -->
<div class="jumbotron dashboard-jumbo">
   @if(count($status) === 1)
   <h1 class="h2" style="font-weight: bold;">Thank You {{ ucfirst(Auth::user()->name) }} for submitting your application!</h1>
   <p class="lead">An email will be sent to you after your application has been reviewed and accepted. You can track the status of your application at the dashboard panel.</p>
   @else
    <h1 class="h2" style="font-weight: bold;">Welcome {{ ucfirst(Auth::user()->name) }} to Jubilee Insurance Medical Portal</h1>
    <p class="lead">This is a simple portal that you can use for your medical insurance application or cessation.</p>
   @endif
 </div> <!-- /.end-jumbotron -->

 <!-- Get in touch -->
 <div class="card card-danger">
   <div class="card-header">
     <h3 class="card-title">Individual/Family Health Cover</h3>
   </div>
   <div class="card-body">
      <!-- Content here -->
      <div class="content-section">
      <div class="row">
         <div class="col-md-6">
            <img src={{ asset('media/svg/medical.svg') }} height="212.86px" width="100%" alt="supporting image">
         </div>
         <div class="col-md-6 mt-4">
            <p><strong>Who is eligible for the cover?</strong><br>
               Adults between the age of 18 years and 60 years.<br>
               Children between the age of 3 months and 17 years.</p>
               <p>NB. Members above 50 years will be required to undergo a medical examination at specific providers before membership and eligibility of cover can be confirmed. Please note that this will be at the applicant’s cost</p>
         </div>
      </div>
   </div>
</div>
   <!-- /.Get-in-touch -->
 </div> <!-- /.content-section -->
@endsection
