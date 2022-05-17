@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
  <ul class="progressbar d-sm-flex justify-content-center">
      <li class="active done"><a href="#">Employee <small>Photo</small></a></li>
      <li class="active done"><a href="#">Employee <small>Full Details</small></a></li>
      <li class="active done"><a href="#">Emergency <small>Contact</small></a></li>
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
        <form action="{{route('emergency-contacts')}}" method="POST">
            @csrf
            <fieldset>
                <h4>Emergency Contacts</h4>
                <div class="row">
                  <div class="col-md-6">
          
                        <div class="form-group">
                            <label for="ec_name" class="col-form-label ">Full Name</label>
                            <input type="text" name="ec_name" class="form-control validate text-white p-input" id="ec_name" >
                        </div>
            
                        <div class="form-group">
                            <label for="ec_relation_to_staff" class="col-form-label ">Relation to Staff</label>
                            <input type="text" name="ec_relation_to_staff" class="form-control validate text-white p-input" id="ec_relation_to_staff" >
                        </div>
            
                        <div class="form-group">
                            <label for="contact_number" class="col-form-label ">Contact Number</label>
                            <input type="text" name="ec_contact_number" class="form-control validate text-white p-input" id="contact_number" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="residence" class="col-form-label ">Place of Residence</label>
                            <input type="text" name="ec_place_of_residence" class="form-control validate text-white p-input" id="residence" >
                          </div>
            
                          <div class="form-group">
                            <label for="res_address" class="col-form-label ">Residencial Address</label>
                            <input type="text" name="ec_residential_address" class="form-control validate text-white p-input" id="res_address" >
                          </div>
            
                          <div class="form-group">
                            <label for="ec_email" class="col-form-label ">Email Address</label>
                            <input type="email" name="ec_email" class="form-control validate text-white p-input" id="ec_email" >
                          </div>
                    </div>
                </div>
                                 
                <div class="next-prev">
                    <a href="{{route('employee-details')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                    <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                </div>
              </fieldset>
        </form>
    </div>
</div> 
@endsection
