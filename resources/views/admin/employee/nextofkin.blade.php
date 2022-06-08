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
      <li><a href="#">Educational <small>Information</small></a></li>
      <li><a href="#">Certifications <small>Obtained</small></a></li>
      <li><a href="#">Employment History</a></li>
      <li><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div> 
<div class="card">
    <div class="card-body">
        <form action="{{route('nextofkin')}}" method="POST">
            @csrf
            <fieldset>
                <h5>Next of Kin</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nk_name" class="col-form-label ">Full Name</label>
                            <input type="text" name="nk_name" class="form-control validate text-white p-input" id="nk_name" >
                          </div>
            
                          <div class="form-group">
                            <label for="nk_relation_to_staff" class="col-form-label ">Relation to Staff</label>
                            <input type="text" name="nk_relation_to_staff" class="form-control validate text-white p-input" id="nk_relation_to_staff" >
                          </div>
            
                          <div class="form-group">
                            <label for="nk_contact_number" class="col-form-label ">Contact Number</label>
                            <input type="text" name="nk_contact_number" class="form-control validate text-white p-input" id="nk_contact_number" >
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nk_residence" class="col-form-label ">Place of Residence</label>
                            <input type="text" name="nk_place_of_residence" class="form-control validate text-white p-input" id="nk_residence" >
                          </div>
            
                          <div class="form-group">
                            <label for="nk_res_address" class="col-form-label ">Residencial Address</label>
                            <input type="text" name="nk_residential_address" class="form-control validate text-white p-input" id="nk_res_address" >
                          </div>
            
                          <div class="form-group">
                            <label for="nk_email" class="col-form-label ">Email Address</label>
                            <input type="email" name="nk_email" class="form-control validate text-white p-input" id="nk_email" >
                          </div>
            
                    </div>
                    <div class="next-prev">
                        <a href="{{route('employee-dependants')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                        <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection