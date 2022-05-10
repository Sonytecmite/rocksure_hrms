@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', '/ Add Employee')
@section('content')
<div class="progressbar-container">
  <ul class="progressbar d-sm-flex justify-content-center">
      <li class="active">Personal & Contact Details</li>
      <li>Education & Certifications</li>
      <li>Employment History</li>
      <li>Contract Details</li>
      <li>Finalize</li>
  </ul>
</div> 

<div class="row stretch-card">
  <div class="card">
      <div class="card-body">
        <div class="col-md-12">

          <form action="" method="POST" enctype="multipart/form-data" class="forms-sample" id="employeeForm">
            @csrf
            
            <!--Employee Personal, Emergency Contact, Next of kins and Dependants Details-->
            <fieldset class="showing">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Employee's Personal Details:</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-sm-12">
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="firstname" class="col-form-label ">First Name</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="fname" class="form-control validate text-white p-input" id="firstname" >
                    </div>
                  </div>
    
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="lname" class="col-form-label ">Last Name</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="lname" class="form-control validate text-white p-input" id="lastname" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="other_name" class="col-form-label ">Other Name</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="other_name" class="form-control text-white p-input" id="other_name" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="email" class="col-form-label ">Email Address</label>
                    </div>
                    <div class="col-8">
                      <input type="email" name="email_address" class="form-control validate text-white p-input" id="email" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="birthdate" class="col-form-label ">Date of Birth</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="birthdate" class="form-control validate text-white p-input" id="birthdate" >
                    </div>
                  </div>
                  
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="birthplace" class="col-form-label ">Place of Birth</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="birth_place" class="form-control validate text-white p-input" id="birthplace" >
                    </div>
                  </div>
    
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="hometown" class="col-form-label ">Hometown</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="hometown" class="form-control validate text-white p-input" id="hometown" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="telephone" class="col-form-label ">Phone Number</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="telephone_no" class="form-control validate text-white p-input" id="telephone" >
                    </div>
                  </div>

                  {{-- <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="ghanacardno" class="col-form-label">Ghana Card Number</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="ghana_card_no" class="form-control validate text-white p-input" id="ghanacardno" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="ssnit_no" class="col-form-label">SSNIT Number</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="ssnit_no" class="form-control validate text-white p-input" id="ssnit_no" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="covid19" class="col-form-label">COVID19 Card Number</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="convid19_card_no" class="form-control validate text-white p-input" id="covid19" >
                    </div>
                  </div> --}}

                </div>

                <div class="col-md-4 col-sm-12">
                  <div class="mb-2" style="text-align: left;">
                    <label>Passport Photo <br/><small class="photo-warning text-danger">[Must be gif, png, jpg or jpeg and not more than 1MB]</small></label>
                  </div>
                  <div class="photo-frame mb-2 p-2">
                      <img src="../../assets/images/default-placeholder.jpg" alt="preview image" width="147" height="147">
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control validate p-input" name="photo" id="photo" >
                  </div>
                </div>

              </div>
              <div class="dropdown-divider"></div>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Emergency Contact Details:</h6>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col-md-8 col-sm-12">
          
                    <div class="row form-group mt-2">
                      <div class="col-4">
                        <label for="ec_name" class="col-form-label ">Full Name</label>
                      </div>
                      <div class="col-8">
                        <input type="text" name="ec_name" class="form-control validate text-white p-input" id="ec_name" >
                      </div>
                    </div>

                    <div class="row form-group mt-2">
                      <div class="col-4">
                        <label for="ec_relation_to_staff" class="col-form-label ">Relation to Staff</label>
                      </div>
                      <div class="col-8">
                        <input type="text" name="ec_relation_to_staff" class="form-control validate text-white p-input" id="ec_relation_to_staff" >
                      </div>
                    </div>

                    <div class="row form-group mt-2">
                      <div class="col-4">
                        <label for="contact_number" class="col-form-label ">Contact Number</label>
                      </div>
                      <div class="col-8">
                        <input type="text" name="ec_contact_number" class="form-control validate text-white p-input" id="contact_number" >
                      </div>
                    </div>

                    <div class="row form-group mt-2">
                      <div class="col-4">
                        <label for="residence" class="col-form-label ">Place of Residence</label>
                      </div>
                      <div class="col-8">
                        <input type="text" name="ec_place_of_residence" class="form-control validate text-white p-input" id="residence" >
                      </div>
                    </div>

                    <div class="row form-group mt-2">
                      <div class="col-4">
                        <label for="res_address" class="col-form-label ">Residencial Address</label>
                      </div>
                      <div class="col-8">
                        <input type="text" name="ec_residential_address" class="form-control validate text-white p-input" id="res_address" >
                      </div>
                    </div>

                    <div class="row form-group mt-2">
                      <div class="col-4">
                        <label for="ec_email" class="col-form-label ">Email Address</label>
                      </div>
                      <div class="col-8">
                        <input type="email" name="ec_email" class="form-control validate text-white p-input" id="ec_email" >
                      </div>
                    </div>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Next of Kins:</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-sm-12">
        
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="nk_name" class="col-form-label ">Full Name</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="nk_name" class="form-control validate text-white p-input" id="nk_name" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="nk_relation_to_staff" class="col-form-label ">Relation to Staff</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="nk_relation_to_staff" class="form-control validate text-white p-input" id="nk_relation_to_staff" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="nk_contact_number" class="col-form-label ">Contact Number</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="nk_contact_number" class="form-control validate text-white p-input" id="nk_contact_number" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="nk_residence" class="col-form-label ">Place of Residence</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="nk_place_of_residence" class="form-control validate text-white p-input" id="nk_residence" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="nk_res_address" class="col-form-label ">Residencial Address</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="nk_residential_address" class="form-control validate text-white p-input" id="nk_res_address" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="nk_email" class="col-form-label ">Email Address</label>
                    </div>
                    <div class="col-8">
                      <input type="email" name="nk_email" class="form-control validate text-white p-input" id="nk_email" >
                    </div>
                  </div>
                
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Dependants Details (Spouse):</h6>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col-md-8 col-sm-12">
      
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="s_name" class="col-form-label ">Spouse's Name</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="s_name" class="form-control validate text-white p-input" id="s_name" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="s_birthdate" class="col-form-label ">Date of Birth</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="s_birthdate" class="form-control validate text-white p-input" id="s_birthdate" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="s_profession" class="col-form-label ">Profession</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="s_profession" class="form-control validate text-white p-input" id="s_profession" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="s_ghana_card_number" class="col-form-label ">Ghana Card Number</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="s_ghana_card_number" class="form-control validate text-white p-input" id="s_ghana_card_number" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Dependants Details (Children)</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="c_name" class="col-form-label ">Child's Name</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="c_name" class="form-control validate text-white p-input" id="c_name" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="c_birthdate" class="col-form-label ">Date of Birth</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="c_birthdate" class="form-control validate text-white p-input" id="c_birthdate" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4 yes_no pt-1">
                      <label for="">Student?</label>
                    </div>
                    <div class="col-8 yes_no">
                      <input type="radio" name="c_student" id="c_student_yes" class="form-check-primary" checked>
                      <label for="c_student_yes" class="col-form-label pl-5">Yes</label>
                      <input type="radio" name="c_student" id="c_student_no" class="form-check-primary">
                      <label for="c_student_no" class="col-form-label pl-5">No</label>
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="c_name_of_inst" class="col-form-label ">Name of Institution</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="c_name_of_inst" class="form-control validate text-white p-input" id="c_name_of_inst" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="c_location" class="col-form-label ">Location</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="c_location" class="form-control validate text-white p-input" id="c_location" >
                    </div>
                  </div>

                </div>

              </div>
              
              <div class="row next-div mt-2">
                <div class="col-md-12 col-sm-0">
                    <button type="button" class="btn btn-outline-secondary btn-lg next waves-effect">Next</button>
                </div>
              </div>

            </fieldset>
            <!--End of Employee Personal, Emergency Contact, Next of kins and Dependants Details-->
            
            <!--Employee Education and Certifications Details-->
            <fieldset>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Employee's Education:</h6>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="name_of_institution" class="col-form-label ">Name of Institution</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="name_of_institution" class="form-control validate text-white p-input" id="name_of_institution" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="edu_location" class="col-form-label ">Location</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="edu_location" class="form-control validate text-white p-input" id="edu_location" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="edu_start_date" class="col-form-label ">Start Date</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="edu_start_date" class="form-control validate text-white p-input" id="edu_start_date" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="edu_compeletion_date" class="col-form-label ">Completion Date</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="edu_compeletion_date" class="form-control validate text-white p-input" id="edu_compeletion_date" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="edu_certificate_obtained" class="col-form-label ">Completion Date</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="edu_certificate_obtained" class="form-control validate text-white p-input" id="edu_certificate_obtained" >
                    </div>
                  </div>


                </div>
              </div>

              <div class="dropdown-divider"></div>
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-title">Employee's Certifications:</h6>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="cert_name_of_institution" class="col-form-label ">Name of Institution</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="cert_name_of_institution" class="form-control validate text-white p-input" id="cert_name_of_institution" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="cert_country" class="col-form-label ">Country</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="cert_country" class="form-control validate text-white p-input" id="cert_country" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="cert_issued_date" class="col-form-label ">Issue Date</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="cert_issued_date" class="form-control validate text-white p-input" id="cert_issued_date" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="cert_level" class="col-form-label ">Certificate Level</label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="cert_level" class="form-control validate text-white p-input" id="cert_level" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="cert_number" class="col-form-label ">Certificate Number</label>
                    </div>
                    <div class="col-8">
                      <input type="number" name="cert_number" class="form-control validate text-white p-input" id="cert_number" >
                    </div>
                  </div>

                  <div class="row form-group mt-2">
                    <div class="col-4">
                      <label for="cert_expiry_date" class="col-form-label ">Certificate Expiry Date</label>
                    </div>
                    <div class="col-8">
                      <input type="date" name="cert_expiry_date" class="form-control validate text-white p-input" id="cert_expiry_date" >
                    </div>
                  </div>

                </div>
              </div>

              <div class="row next-div mt-2">
                <div class="col-md-12 col-sm-0">
                  <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg next waves-effect">Next</button>
                </div>
              </div>
            </fieldset>
            <!--End of Employee Education and Certifications Details-->

            <!--Employee Employment History-->
            <fieldset>
              <div class="row next-div mt-2">
                <div class="col-md-12 col-sm-0">
                  <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg next waves-effect">Next</button>
                </div>
              </div>
            </fieldset>
            <!--End of Employee Employment History-->

            <!--Employee Contract Information-->
            <fieldset>
              <div class="row next-div mt-2">
                <div class="col-md-12 col-sm-0">
                  <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg next waves-effect">Next</button>
                </div>
              </div>
            </fieldset>
            <!--End of Employee Contract Information-->

            <!--Summary and Submit-->
            <fieldset>
              <div class="row next-div mt-2">
                <div class="col-md-12 col-sm-0">
                  <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                  <button type="submit" class="btn btn-outline-success btn-lg submit waves-effect">Submit Employee</button>
                </div>
              </div>
            </fieldset>
            <!--End of Summary and Submit-->

          </form>
        </div>
    </div>
  </div>
</div>    
@endsection