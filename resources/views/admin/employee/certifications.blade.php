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
      <li class="active done"><a href="#">Certifications <small>Obtained</small></a></li>
      <li><a href="#">Employment History</a></li>
      <li><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('employee-certifications')}}" method="post">
            @csrf
            <fieldset>
                <h5>Certifications</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cert_name_of_institution" class="col-form-label ">Name of Institution</label>
                            <input type="text" name="cert_name_of_institution" class="form-control validate text-white p-input" id="cert_name_of_institution" >
                          </div>
            
                          <div class="form-group">
                            <label for="cert_country" class="col-form-label ">Country</label>
                            <select name="cert_country" class="form-control validate text-white p-input">
                              <option value="" selected>Select Country of Certification</option>
                            </select>
                          </div>
            
                          <div class="form-group">
                            <label for="cert_issued_date" class="col-form-label ">Certificate Issue Date</label>
                            <input type="date" name="cert_issued_date" class="form-control validate text-white p-input" id="cert_issued_date" >
                          </div>
            
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cert_level" class="col-form-label ">Certification Level</label>
                            <input type="text" name="cert_level" class="form-control validate text-white p-input" id="cert_level" >
                          </div>
            
                          <div class="form-group">
                            <label for="cert_number" class="col-form-label ">Certificate Number</label>
                            <input type="text" name="cert_number" class="form-control validate text-white p-input" id="cert_number" >
                          </div>
            
                          <div class="form-group">
                            <label for="cert_expiry_date" class="col-form-label ">Expiry Date</label>
                            <input type="date" name="cert_expiry_date" class="form-control validate text-white p-input" id="cert_expiry_date" >
                          </div>
            
                    </div>
                </div>
                <div class="next-prev">
                    <a href="{{route('employee-education')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                    <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection