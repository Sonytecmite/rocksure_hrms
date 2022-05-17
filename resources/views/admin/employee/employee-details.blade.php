@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
  <ul class="progressbar d-sm-flex justify-content-center">
      <li class="active done"><a href="#">Employee <small>Photo</small></a></li>
      <li class="active done"><a href="#">Employee <small>Full Details</small></a></li>
      <li><a href="#">Emergency <small>Contact</small></a></li>
      <li><a href="#">Dependants <small>Information</small></a></li>
      <li><a href="#">Next <small>of Kins</small></a></li>
      <li><a href="#">Educational <small>Information</small></a></li>
      <li><a href="#">Certifications <small>Obtained</small></a></li>
      <li><a href="#">Employment History</a></li>
      <li><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div> 
<div class="card">
    <div class="card-body">
        <form action="{{route('employee-details')}}" method="POST">
            @csrf
            <fieldset>
                <h4>Employee's Personal Details</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname" class="col-form-label ">First Name</label>
                      <input type="text" name="fname" class="form-control vaoldate text-white p-input" id="firstname" >
                    </div>
                          
                    <div class="form-group">
                      <label for="other_name" class="col-form-label ">Other Name</label>
                      <input type="text" name="other_name" class="form-control text-white p-input" id="other_name" >
                    </div>
                    
                    <div class="form-group">
                      <label for="birthplace" class="col-form-label ">Place of Birth</label>
                      <input type="text" name="birth_place" class="form-control vaoldate text-white p-input" id="birthplace" >
                    </div> 

                    <div class="form-group">
                      <label for="email" class="col-form-label ">Email Address</label>
                      <input type="email" name="email_address" class="form-control vaoldate text-white p-input" id="email" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lname" class="col-form-label ">Last Name</label>
                      <input type="text" name="lname" class="form-control vaoldate text-white p-input" id="lastname" >
                    </div>

                    <div class="form-group">
                      <label for="birthdate" class="col-form-label ">Date of Birth</label>
                      <input type="date" name="birthdate" class="form-control vaoldate text-white p-input" id="birthdate" >
                    </div>
                   
                    <div class="form-group">
                      <label for="hometown" class="col-form-label ">Hometown</label>
                      <input type="text" name="hometown" class="form-control vaoldate text-white p-input" id="hometown" >
                    </div>
      
                    <div class="form-group">
                      <label for="telephone" class="col-form-label ">Phone Number</label>
                      <input type="text" name="telephone_no" class="form-control vaoldate text-white p-input" id="telephone" >
                    </div>
                  </div>
                </div>
                                 
                <div class="next-prev">
                    <a href="{{route('upload-photo')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                    <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                </div>
              </fieldset>
        </form>
    </div>
</div> 
@endsection

