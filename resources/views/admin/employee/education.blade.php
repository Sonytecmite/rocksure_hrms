@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
  <ul class="progressbar d-sm-flex justify-content-center">
      <li class="active done"><a href="#">Employee <small>Full Details</small></a></li>
      <li class="active done"><a href="#">Emergency <small>Contact</small></a></li>
      <li class="active done"><a href="#">Dependants <small>Information</small></a></li>
      <li class="active done"><a href="#">Next <br><small>of Kins</small></a></li>
      <li class="active done"><a href="#">Educational <small>Information</small></a></li>
      <li><a href="#">Certifications <small>Obtained</small></a></li>
      <li><a href="#">Employment History</a></li>
      <li><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('employee-education')}}" method="post" class="form-samples">
            @csrf
            <fieldset>
              <h5>Education</h5>
              <div class="row">
                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label for="name_of_institution" class="col-form-label ">Name of Institution</label>
                    <input type="text" name="name_of_institution" class="form-control validate text-white p-input" id="name_of_institution" >
                  </div>
    
                  <div class="form-group">
                    <label for="edu_location" class="col-form-label ">Location</label>
                    <input type="text" name="edu_location" class="form-control validate text-white p-input" id="edu_location" >
                  </div>

                  <div class="form-group">
                    <label for="edu_certificate_obtained" class="col-form-label ">Certificate Obtained</label>
                    <select name="cert_name_of_institution" class="form-control validate text-white p-input">
                      <option value="bachelor">Bachelor</option>
                      <option value="masters">Masters</option>
                      <option value="phd">PhD</option>
                      <option value="diploma">Diploma</option>
                      <option value="certificate">Certificate</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                      
                  <div class="form-group">
                    <label for="edu_start_date" class="col-form-label ">Start Date</label>
                    <input type="date" name="edu_start_date" class="form-control validate text-white p-input" id="edu_start_date" >
                  </div>

                  <div class="form-group">
                    <label for="edu_compeletion_date" class="col-form-label ">Completion Date</label>
                    <input type="date" name="edu_compeletion_date" class="form-control validate text-white p-input" id="edu_compeletion_date" >
                  </div>
                
                </div>
              </div>
              
              <div class="next-prev">
                <a href="{{route('nextofkin')}}" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</a>
                <button type="submit" class="btn btn-outline-secondary next btn-lg waves-effect">Next</button>
              </div>

            </fieldset>
        </form>
    </div>
</div>
@endsection
