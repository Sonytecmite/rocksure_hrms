@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
  <ul class="progressbar d-sm-flex justify-content-center">
      <li class="active done"><a href="#">Employee <br><small>Full Details</small></a></li>
      <li><a href="#">Emergency <small>Contact</small></a></li>
      <li><a href="#">Dependants <small>Information</small></a></li>
      <li><a href="#">Next <br><small>of Kins</small></a></li>
      <li><a href="#">Educational <small>Information</small></a></li>
      <li><a href="#">Certifications <small>Obtained</small></a></li>
      <li><a href="#">Employment History</a></li>
      <li><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div> 
<div class="card">
    <div class="card-body">
        <form action="{{route('employee-details')}}" method="POST" class="forms-sample">
            @csrf

            <fieldset class="showing">
              <h4>Personal Information</h4>
              <div class="row">
                <div class="col-md-6">
                    <div class="mb-2" style="text-align: left;">
                    <label>Passport Photo</label>
                    </div>
                    <div class="photo-frame">
                        <img src="../../assets/images/default-placeholder.jpg" alt="preview image" width="147" height="147">
                    </div>
                    <div class="form-group mt-2" style="width: 70%">
                    <input type="file" class="form-control validate p-input" name="photo" id="photo">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstname" class="col-form-label ">First Name</label>
                    <input type="text" name="fname" class="form-control validate text-white p-input" id="firstname" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="col-form-label ">Last Name</label>
                    <input type="text" name="lname" class="form-control validate text-white p-input" id="lastname" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">                          
                  <div class="form-group">
                    <label for="other_name" class="col-form-label ">Other Name</label>
                    <input type="text" name="other_name" class="form-control text-white p-input" id="other_name" >
                  </div>                   
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="birthdate" class="col-form-label ">Date of Birth</label>
                    <input type="date" name="birthdate" class="form-control validate text-white p-input" id="birthdate" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="birthplace" class="col-form-label ">Place of Birth</label>
                    <input type="text" name="birth_place" class="form-control validate text-white p-input" id="birthplace" >
                  </div>                     
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hometown" class="col-form-label ">Hometown</label>
                    <input type="text" name="hometown" class="form-control validate text-white p-input" id="hometown" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone" class="col-form-label ">Telephone Number</label>
                    <input type="text" name="telephone_no" class="form-control validate text-white p-input" id="telephone" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="col-form-label ">Email Address</label>
                    <input type="email" name="email_address" class="form-control validate text-white p-input" id="email" >
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="ssnit_no" class="col-form-label ">SSNIT Number</label>
                    <input type="text" name="ssnit_no" class="form-control validate text-white p-input" id="ssnit_no" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="ghana_card_no" class="col-form-label ">Ghana Card Number</label>
                    <input type="text" name="ghana_card_no" class="form-control validate text-white p-input" id="ghana_card_no" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="convid19_card_no" class="col-form-label ">COVID-19 Card Number</label>
                    <input type="text" name="convid19_card_no" class="form-control validate text-white p-input" id="convid19_card_no" >
                  </div>
                </div>
              </div>

              <div class="next-prev">
                  <button type="button" class="btn btn-outline-secondary next btn-lg waves-effect">Next</button>
              </div>
            </fieldset>
            <fieldset>
              <h4>Contract Information</h4>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="place_of_res_onsite" class="col-form-label ">Place of Residence (Site)</label>
                    <input type="text" name="place_of_res_onsite" class="form-control validate text-white p-input" id="place_of_res_onsite" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="res_address_onsite" class="col-form-label ">Residential Address (Site) </label>
                    <input type="text" name="res_address_onsite" class="form-control validate text-white p-input" id="res_address_onsite" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="place_of_res_offsite" class="col-form-label ">Place of Residence (Offsite)</label>
                    <input type="text" name="place_of_res_offsite" class="form-control validate text-white p-input" id="place_of_res_offsite" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="res_address_offsite" class="col-form-label ">Residential Address (Offsite) </label>
                    <input type="text" name="res_address_offsite" class="form-control validate text-white p-input" id="res_address_offsite" >
                  </div>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="staff_id" class="col-form-label ">Staff ID</label>
                    <input type="text" name="staff_id" class="form-control validate text-white p-input" id="staff_id" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tag_id" class="col-form-label ">Tag ID</label>
                    <input type="text" name="tag_id" class="form-control validate text-white p-input" id="tag_id" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="job_title" class="col-form-label ">Job Title</label>
                    <input type="text" name="job_title" class="form-control validate text-white p-input" id="job_title" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="employment_date" class="col-form-label ">Date of Employment</label>
                    <input type="date" name="employment_date" class="form-control validate text-white p-input" id="employment_date" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="department_id" class="col-form-label ">Department</label>
                    <select name="department_id" id="department_id" class="form-control validate text-white p-input">
                      <option value="">--None--</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="section_id" class="col-form-label ">Section</label>
                    <select name="section_id" id="section_id" class="form-control validate text-white p-input">
                      <option value="">--None--</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="rank" class="col-form-label ">Rank</label>
                    <select name="rank" class="form-control validate text-white p-input" id="rank">
                      <option value="">--None--</option>
                      <option value="Management">Management</option>
                      <option value="Senior Staff">Senior Staff</option>
                      <option value="Junior Staff">Junior Staff</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="status" class="col-form-label ">Status</label>
                    <select name="status" id="status" class="form-control validate text-white p-input">
                      <option value="">--None--</option>
                      <option value="Contract">Contract</option>
                      <option value="Casual">Casual/Temporary</option>
                      <option value="National Service">National Service</option>
                      <option value="Graduate Trainee">Graduate Trainee</option>
                      <option value="Intern">Intern</option>
                    </select>
                  </div>
                </div>
              </div>
   
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shift" class="col-form-label ">Shift</label>
                    <select name="shift" class="form-control validate text-white p-input" id="shift" >
                      <option value="">--None--</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tier2_number" class="col-form-label ">Tier 2 Number</label>
                    <input type="text" name="tier2_number" class="form-control validate text-white p-input" id="tier2_number" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="driving_license" class="col-form-label ">Driving License</label>
                    <input type="text" name="driving_license" class="form-control validate text-white p-input" id="driving_license" >
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="edu_qualification" class="col-form-label ">Educational Qualification</label>
                    <input type="text" name="edu_qualification" class="form-control validate text-white p-input" id="edu_qualification" >
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="min_com_cert" class="col-form-label ">MinCom Certification</label>
                    <input type="text" name="min_com_cert" class="form-control validate text-white p-input" id="min_com_cert" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="provident_fund_contributor" class="col-form-label ">Provident Fund Contributor?</label>
                    <select name="provident_fund_contributor" class="form-control validate text-white p-input" id="provident_fund_contributor" >
                      <option value="">--None--</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="unionized" class="col-form-label ">Unionized?</label>
                    <select name="unionized" class="form-control validate text-white p-input" id="unionized" >
                      <option value="">--None--</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class=" col-md-8 toggle-unionized">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="branch_union" class="col-form-label ">Branch Union</label>
                        <input type="text" name="branch_union" class="form-control validate text-white p-input" id="branch_union" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pmsu" class="col-form-label ">PMSU</label>
                        <input type="text" name="pmsu" class="form-control validate text-white p-input" id="pmsu" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="next-prev">
                <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
              </div>
            </fieldset>
        </form>
    </div>
</div> 
@endsection

