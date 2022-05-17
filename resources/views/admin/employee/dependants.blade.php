@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
    <ul class="progressbar d-sm-flex justify-content-center">
        <li class="active done"><a href="#">Employee <small>Photo</small></a></li>
        <li class="active done"><a href="#">Employee <small>Full Details</small></a></li>
        <li class="active done"><a href="#">Emergency <small>Contact</small></a></li>
        <li class="active done"><a href="#">Dependants <small>Information</small></a></li>
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
          <form action="{{route('employee-dependants')}}" method="post">
              @csrf
              <fieldset>
                  <h4>Employee's Dependants</h4>
                  <div class="row">
                    <h5>Spouse</h5>
                      <div class="col-md-6">
                          
                          <div class="form-group">
                            <label for="s_name" class="col-form-label ">Spouse's Name</label>
                            <input type="text" name="s_name" class="form-control validate text-white p-input" id="s_name" >
                          </div>
                          
                          <div class="form-group">
                            <label for="s_birthdate" class="col-form-label ">Date of Birth</label>
                            <input type="date" name="s_birthdate" class="form-control validate text-white p-input" id="s_birthdate" >
                          </div>
            
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="s_profession" class="col-form-label ">Profession</label>
                            <input type="text" name="s_profession" class="form-control validate text-white p-input" id="s_profession" >
                          </div>
            
                          <div class="form-group">
                            <label for="s_ghana_card_number" class="col-form-label ">Ghana Card Number</label>
                            <input type="text" name="s_ghana_card_number" class="form-control validate text-white p-input" id="s_ghana_card_number" >
                          </div>
                      </div>
                      
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                    <h5 class="mt-5">Children Details</h5>
                    <div class="col-md-6">
              
                        <div class="form-group">
                          <label for="c_name" class="col-form-label ">Child's Name</label>
                          <input type="text" name="c_name" class="form-control validate text-white p-input" id="c_name" >
                        </div>
          
                        <div class="form-group">
                          <label for="c_birthdate" class="col-form-label ">Date of Birth</label>
                          <input type="date" name="c_birthdate" class="form-control validate text-white p-input" id="c_birthdate" >
                        </div>
          
                        <div class="form-group">
                          <label class="mt-3">Is the child a student?</label>
                          <div class=" yes_no">
                            <input type="radio" name="c_student" id="c_student_yes" class="form-check-primary" checked>
                            <label for="c_student_yes" class="col-form-label pl-5">Yes</label>
                            <input type="radio" name="c_student" id="c_student_no" class="form-check-primary">
                            <label for="c_student_no" class="col-form-label pl-5">No</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                                    
                        <div class="form-group">
                            <label for="c_name_of_inst" class="col-form-label ">Name of Institution</label>
                            <input type="text" name="c_name_of_inst" class="form-control validate text-white p-input" id="c_name_of_inst" >
                          </div>
            
                          <div class="form-group">
                            <label for="c_location" class="col-form-label ">Location</label>
                            <input type="text" name="c_location" class="form-control validate text-white p-input" id="c_location" >
                          </div>
            
                      </div>
                  </div>
                  <div class="next-prev">
                    <a href="{{route('emergency-contacts')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                    <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                </div>
              </fieldset>
          </form>
      </div>
  </div> 
@endsection