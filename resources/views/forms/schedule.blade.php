@extends('layouts.dashboard')
@section('content')
<div class="card card-danger">
   <div class="card-header">
      <h3 class="card-title">{{ __('MEDICAL INSURANCE MEMBERSHIP APPLICATION FORM') }}</h3>
   </div>
   <div class="content-section p-4">
      <h2 class="form-heading" style='color:#b50c2e'>SCHEDULE</h2>
      <p>To be completed if member's family is covered for Medical Insurance</p>
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
         <tbody>
            <tr>
               <th scope="row"></th>
               <td></td>
               <td></td>
               <td></td>
               <td>
                  <a href="" title="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  <a href="" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="row">
         <!-- Adding a modal here -->
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#familyModal">
         Add Member
         </button>
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
                     <form method="POST" action=''>
                        @csrf
                        <!-- Adding fields -->
                        <div class="form-group row mb-3">
                           <label for="fullName" class="col-form-label pl-3">Full Name</label>
                           <div class="col">
                              <input type="text" class="form-control" placeholder="Enter full name" id="fullName" required>
                           </div>
                        </div>
                        <div class="form-group row mb-3">
                           <label for="DOB1" class="col-form-label pl-3">Date of Birth</label>
                           <div class="col">
                              <input type="date" class="form-control" id="DOB1" required>
                           </div>
                        </div>
                        <div class="form-group row mb-3">
                           <label for="birth" class="col-form-label pl-3">ID No/ Birth certificate No</label>
                           <div class="col">
                              <input type="text" class="form-control" placeholder="" id="birth" required>
                           </div>
                        </div>
                        <div class="form-group row mb-3">
                           <label for="relationship" class="col-form-label pl-3">Relationship to Member</label>
                           <div class="col">
                              <select class="custom-select">
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
                     </form>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save</button>
                  </div>
               </div>
            </div>
         </div>
         <button type='submit' class='btn btn-outline-danger ml-2'>Next Page</button>
      </div>
   </div>
</div>
@endsection