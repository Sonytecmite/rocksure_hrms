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
      <li class="active done"><a href="#">Next <small>of Kins</small></a></li>
      <li class="active done"><a href="#">Educational <small>Information</small></a></li>
      <li class="active done"><a href="#">Certifications <small>Obtained</small></a></li>
      <li class="active done"><a href="#">Employment History</a></li>
      <li><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('employment-history')}}" method="post">
            @csrf
            <fieldset>
                <h5>Previous Employments</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_of_employer" class="col-form-label ">Name of Employer</label>
                            <input type="text" name="name_of_employer" class="form-control validate text-white p-input" id="name_of_employer" >
                          </div>
            
                          <div class="form-group">
                            <label for="emp_last_job_title" class="col-form-label ">Last Job Title</label>
                            <input type="text" name="emp_last_job_title" class="form-control validate text-white p-input" id="emp_last_job_title" >
                          </div>
            
                          <div class="form-group">
                            <label for="location" class="col-form-label ">Location</label>
                            <input type="text" name="emp_location" class="form-control validate text-white p-input" id="location" >
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="emp_start_date" class="col-form-label ">Start Date</label>
                            <input type="date" name="emp_start_date" class="form-control validate text-white p-input" id="emp_start_date" >
                            </div>
            
                            <div class="form-group">
                            <label for="emp_end_date" class="col-form-label ">End Date</label>
                            <input type="date" name="emp_end_date" class="form-control validate text-white p-input" id="emp_end_date" >
                        </div>  
                    </div>
                </div>
                <div class="next-prev">
                    <a href="{{route('employee-certifications')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                    <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection