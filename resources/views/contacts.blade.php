@extends('layouts.dashboard')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">{{ __('Get in touch with us') }}</h3>
    </div>
    <div class="row p-4">
        <div class="col-md-6">
            <div class="card-body">
               <h5> If you have any queries, or require further assistance, contact us at:</h5>
               <div class="container address">
               <address>
                  <span class="text-muted"><a href='https://www.jubileeinsurance.com'>Jubilee Insurance Company Limited</a ></span><br>
                  <span class="text-muted">P.O.Box 20524, Dar es Salaam 
                  <br> 
                  6th Floor Amani Place, Ohio Street. 
                  <br>
                  +255 22 2135121/4
                  </span>
               </address>
               <address>
                  <strong>Or send us an email:</strong>
                  <a href="mailto:medical@jubileetanzania.com ">medical@jubileetanzania.com </a>
               </address>
               </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
             <!--The div element for the map -->
            <div id="map">
                <img src={{ asset('media/svg/contact.svg') }} height="212.86px" width="100%" alt="contact us image">
            </div>
        </div>
    </div>
</div>
@endsection
