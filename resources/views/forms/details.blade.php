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
      <div class="container mt-4" style="text-align: center">
         <div class="row" style="display: inline-block">
            <!-- Adding a modal here -->
            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#familyModal">
            Add details
            </button> --}}
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
                                    <option value="1">1</option>
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