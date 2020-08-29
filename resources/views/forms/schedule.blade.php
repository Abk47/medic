@extends('layouts.dashboard')
@section('content')
<div class="card card-danger">
   <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
   </div>
   <div class="content-section p-4">
      <div class="row">
         <h2 class="form-heading" style='color:#b50c2e'>SCHEDULE</h2>
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger ml-auto" data-toggle="modal" data-target="#familyModal">
         Add Member
         </button>
      </div>
      <span>
         <p>To be completed if member's family is covered for Medical Insurance</p>
      </span>
      <!-- Table Fields -->
      <table class="table table-bordered">
         <caption>Skip this section if you don't have any family member covered for Medical Insurance</caption>
         <thead class="thead-dark">
            <tr style="text-align:center">
               <th scope="col" >Names in Full</th>
               <th scope="col">Date of Birth <br> (DD/MM/YY)</th>
               <th scope="col">Identity Card number/ <br>Birth Certificate number</th>
               <th scope="col">Relationship to Member</th>
               <th scope="col">Actions</th>
            </tr>
         </thead>
         @foreach($dependents as $dependant)
         <tbody>
            <tr>
               <th scope="row">{{ $dependant->full_name ?? '' }}</th>
               <td>{{ $dependant->DOB ?? ''}}</td>
               <td>{{ $dependant->identification ?? ''}}</td>
               <td>{{ $dependant->relationship ?? ''}}</td>
               <td>
                  <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" title='DELETE' type="submit"><i class="fas fa-times"></i></button>
                  </form>
              </td>
            </tr>
         </tbody>
         @endforeach
      </table>
      <div class="container mt-4" style="text-align: center">
         <div class="row" style="display: inline-block">
            <!-- Adding a modal here -->
            <!-- Modal -->
            <div class="modal fade" id="familyModal" tabindex="-1" role="dialog" aria-labelledby="familyModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="familyModalLabel">Add Family Member Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form method="POST" action='/user/forms/membership-form/dependant'>
                           @csrf
                           <!-- Adding fields -->
                           <div class="form-group row mb-3">
                              <label for="fullName" class="col-form-label pl-3">Full Name</label>
                              <div class="col">
                                 <input type="text"  name='full_name' class="form-control" placeholder="Enter full name" id="fullName" required>
                              </div>
                           </div>
                           <div class="form-group row mb-3">
                              <label for="DOB1" class="col-form-label pl-3">Date of Birth</label>
                              <div class="col">
                                 <input type="date"  name='DOB' class="form-control" id="DOB1" required>
                              </div>
                           </div>
                           <div class="form-group row mb-3">
                              <label for="birth" class="col-form-label pl-3">ID No/ Birth certificate No</label>
                              <div class="col">
                                 <input type="text"  name='identification' class="form-control" placeholder="" id="birth" required>
                              </div>
                           </div>
                           <div class="form-group row mb-3">
                              <label for="relationship" class="col-form-label pl-3">Relationship to Member</label>
                              <div class="col">
                                 <select class="custom-select" name='relationship'>
                                    <option selected>Choose relationship</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Nephew">Nephew/Niece</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Guardian">Guardian</option>
                                 </select>
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
            <button type='submit' class='btn btn-danger'>Previous Page</button>
            <button type='submit' class='btn btn-outline-danger'>Next Page  <i class="fas fa-arrow-right"></i></button>
         </div>
      </div>
   </div>
</div>
@endsection