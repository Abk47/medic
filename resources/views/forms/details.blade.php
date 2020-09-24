@extends('layouts.dashboard')
@section('content')
<div class="card card-danger">
   <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
   </div>
   <div class="content-section p-4">
      <div class="row">
         <h2 class="form-heading" style='color:#b50c2e'>CONFIDENTIAL MEDICAL HISTORY II</h2>
         <button type="button" class="btn btn-danger ml-auto" data-toggle="modal" data-target="#familyModal" >
         Add details
         </button>
      </div>
      <span>
         <p>
            <em>
            Please provide full details below on the answers you've provided
            </em>
         </p>
      </span>
      <!-- Table Fields -->
      <table class="table table-bordered">
         <caption>The information provided will not be shared with anyone.</caption>
         <thead class="thead-dark">
            <tr style="text-align: center; font-size:15px; ">
               <th scope="col" style="width: 18%">Name and relationship to the applicant</th>
               <th scope="col" style="width: 2%">Relevant Question</th>
               <th scope="col" style="width: 20%">Medical condition</th>
               <th scope="col" style="width: 21%">Treatment and consultations received <br> (with date)</th>
               <th scope="col" style="width: 18%">Name of the treating doctor or hospital <br>and their telephone number or address</th>
               <th scope="col" style="width: 17%">Needs for future treatment <br> or consultation</th>
               <th scope="col" style="width: 4%">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach($medicals as $medical)
            <tr style="text-align:center">
               <th scope="row">{{ $medical->NameRelation ?? '' }}</th>
               <td>{{ $medical->QsnID ?? '' }}</td>
               <td>{{ $medical->Medical ?? '' }}</td>
               <td>{{ $medical->Treatment ?? '' }}</td>
               <td>{{ $medical->DoctorsInfo ?? '' }}</td>             
               <td>{{ $medical->FutureTreatment ?? '' }}</td>             
               <td>
                  <form action="{{ route('confidential.destroy', $medical->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger" title='DELETE' type="submit"><i class="far fa-trash-alt"></i></button>
                   </form>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>

{{-- A question preview table to help users refer to the question they have answered--}}
      <details>
         <summary style="color: #b50c2e"><strong>Click here for a quick preview of the questions asked</strong></summary>
        <table class="table table-hover">
           <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
           </tr>
           <tr>
              <th scope="row">2</th>
              <td>
               Have you or any member of your family proposed for this insurance had medical and surgical or other 
               form of health treatment during the past three years?
              </td>
           </tr>
           <tr>
              <th scope="row">3</th>
              <td>
               Have you or any member of your family proposed for this insurance 
               suffered at any time from or become aware of any tendency to infection of the chest, 
               heart, spine, glands, bones or joints, digestive organs, kidneys, bladder or other organs?
              </td>
           </tr>
           <tr>
              <th scope="row">4</th>
              <td>
               Have you or any member of your family proposed for this insurance suffered at any time from rheumatism, 
               diabetes, gastric or duodenal ulceration, paralysis, gout, asthma, blood spitting, hernia, rheumatic fever, 
               tuberculosis or from any nervous disease?
              </td>
           </tr>
           <tr>
              <th scope="row">5</th>
              <td>
               Have you or any member of your family proposed for this insurance suffered from any 
               complaint which may necessitate a surgical operation or for which you reasonably 
               anticipate the necessity of treatment? 
              </td>
           </tr>
           <tr>
              <th scope="row">6</th>
              <td>
               Have you or any member of your family proposed for this insurance suffered
               from chronic/long term medical or dental condition or is there any other known disability,
               abnormality or recurrent illness or injury?
              </td>
           </tr>
           <tr>
              <th scope="row">7</th>
              <td>
               Have any of your immediate relatives (child, father, mother, sister or brother) suffered 
               from rheumatism, gout, kidney related problem, high blood pressure, cancer, diabetes, heart disease, 
               asthma, tuberculosis, epilepsy, blood disorder or any chronic illness?
              </td>
           </tr>
           <tr>
              <th scope="row">8</th>
              <td>
               Are you or any member of your family proposed for insurance now under observation or 
               taking treatment or medication for any disease or disorder?
              </td>
           </tr>
           <tr>
              <th scope="row">9</th>
              <td>
               Do you or any member of your family proposed for insurance currently pursue or 
               intend to pursue any profession, occupation, sport or hobby which is hazardous?
              </td>
           </tr>
         </table>
     </details>

      <div class="container mt-4" style="text-align: center">
         <div class="row" style="display: inline-block">
            <!-- Adding a modal here -->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="familyModal" tabindex="-1" role="dialog" aria-labelledby="familyModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="familyModalLabel">Medical History Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form method="POST" action='{{ route('confidential.save') }}'>
                           @csrf
                           <!-- Adding fields -->
                           <div class="form-group">
                              <label for="NameRelation" class="col-form-label pl-3">Name and relationship to the applicant</label>
                              <div class="col">
                                 <input type="text" class="form-control" autoComplete='off' name="NameRelation" id="NameRelation" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="question" class="col-form-label pl-3">Relevant question</label>
                              <div class="col">
                                 <select class="custom-select" name="QsnID">
                                    <option selected disabled>Choose a number</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="medical" class="col-form-label pl-3">Medical condition</label>
                              <div class="col">
                                 <input type="text" class="form-control" autoComplete='off' name="Medical" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="Treatment" class="col-form-label pl-3">Treatment and consultations received</label>
                              <div class="col">
                                 <input type="text" class="form-control" autoComplete='off' name="Treatment" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="DoctorsInfo" class="col-form-label pl-3">Name of the treating doctor or hospital and their telephone number or address</label>
                              <div class="col">
                                 <input type="text" class="form-control" autocomplete='off' name="DoctorsInfo" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="FutureTreatment" class="col-form-label pl-3">Needs for future treatment or consultation</label>
                              <div class="col">
                                 <input type="text" class="form-control" autocomplete='off' name="FutureTreatment" required>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <a href="{{ route('history.show') }}" role='button' class='btn btn-danger'>Previous Page</a>
            <a href="/user/forms/membership-form/declaration" role='button' class='btn btn-outline-danger'>Next Page  <i class="fas fa-arrow-right"></i></a>
         </div>
      </div>
   </div>
</div>
@endsection