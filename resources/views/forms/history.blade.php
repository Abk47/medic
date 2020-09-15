@extends('layouts.dashboard')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
    </div>
    <div class="content-section p-5">
      <form method="POST" action="{{ route('history.store') }}">
         @csrf
         <fieldset class="form-group">
            <h2 class="form-heading mb-4" style='color:#b50c2e'>CONFIDENTIAL MEDICAL HISTORY</h2>
            <p class='font-weight-bold'>
               Please ensure that you have fully disclosed any known or suspected conditions and symptoms experienced 
               by anybody included in this application. In completing the questions please make sure you answer each question
               fully and accurately. Failure to disclose material facts could affect payment of claims.
            </p>
            <!-- Form Fields -->
            <ol>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Do you or any member of your family proposed for this insurance already hold Life,
                        Personal Accident or Medical Insurance policies?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn1" name="Qsn1" value="yes" required/>
                           <label for="qsn1">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn1a" name="Qsn1" value="no"/>
                           <label for="qsn1a">No</label>
                       </div>
                     </div>
                  </div>
                  <div class="form-group ">
                     <label for="QsnTextarea1">If Yes, please state name of insurers and policy numbers</label>
                     <textarea class="form-control" id="QsnTextarea1" name='Insurer' rows="2"></textarea>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Have you or any member of your family proposed for this insurance had medical and surgical or other 
                        form of health treatment during the past three years?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn2" name="Qsn2" value="yes"  required/>
                           <label for="qsn2">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn2a" name="Qsn2" value="no" />
                           <label for="qsn2a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Have you or any member of your family proposed for this insurance 
                        suffered at any time from or become aware of any tendency to infection of the chest, 
                        heart, spine, glands, bones or joints, digestive organs, kidneys, bladder or other organs?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn3" name="Qsn3" value="yes" required/>
                           <label for="qsn3">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn3a" name="Qsn3" value="no" />
                           <label for="qsn3a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Have you or any member of your family proposed for this insurance suffered at any time from rheumatism, 
                        diabetes, gastric or duodenal ulceration, paralysis, gout, asthma, blood spitting, hernia, rheumatic fever, 
                        tuberculosis or from any nervous disease?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn4" name="Qsn4" value="yes" required/>
                           <label for="qsn4">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn4a" name="Qsn4" value="no" />
                           <label for="qsn4a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Have you or any member of your family proposed for this 
                        complaint which may necessitate a surgical operation or 
                        anticipate the necessity of treatment?                  
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn5" name="Qsn5" value="yes" required/>
                           <label for="qsn5">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn5a" name="Qsn5" value="no"/>
                           <label for="qsn5a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Have you or any member of your family proposed for this insurance suffered
                        from chronic/long term medical or dental condition or is there any other known disability,
                        abnormality or recurrent illness or injury?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn6" name="Qsn6" value="yes" required/>
                           <label for="qsn6">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn6a" name="Qsn6" value="no"/>
                           <label for="qsn6a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Have any of your immediate relatives (child, father, mother, sister or brother) suffered 
                        from rheumatism, gout, kidney related problem, high blood pressure, cancer, diabetes, heart disease, 
                        asthma, tuberculosis, epilepsy, blood disorder or any chronic illness?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn7" name="Qsn7" value="yes" required/>
                           <label for="qsn7">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn7a" name="Qsn7" value="no"/>
                           <label for="qsn7a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Are you or any member of your family proposed for insurance now under observation or 
                        taking treatment or medication for any disease or disorder?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn8" name="Qsn8" value="yes" required/>
                           <label for="qsn8">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn8a" name="Qsn8" value="no"/>
                           <label for="qsn8a">No</label>
                       </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="row mb-2">
                     <legend class="col-form-label col-sm-10 pt-0">
                        Do you or any member of your family proposed for insurance currently pursue or 
                        intend to pursue any profession, occupation, sport or hobby which is hazardous?
                     </legend>
                     <div class="col-sm-2">
                        <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn9" name="Qsn9" value="yes" required/>
                           <label for="qsn9">Yes</label>
                       </div>
                       <div class="icheck-danger icheck-inline">
                           <input type="radio" id="qsn9a" name="Qsn9" value="no"/>
                           <label for="qsn9a">No</label>
                       </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="QsnTextarea1">
                     <strong>
                     Please state the name and address of your medical doctor/physician or hospital
                     </strong>
                     </label>
                     <textarea class="form-control" name="DoctorName" id="QsnTextarea1" rows="3" required></textarea>
                  </div>
               </li>
            </ol>
         </fieldset>
         <div class="form-group" style="text-align: center">
            <a href="{{ route('dependant.show') }}" role='button' class='btn btn-danger'>Previous Page</a>
            <button type='submit' class='btn btn-outline-danger'>Next Page  <i class="fas fa-arrow-right"></i></button>
         </div>
      </form>
   </div>
</div>
@endsection
