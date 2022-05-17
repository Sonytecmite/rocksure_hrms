@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', '/ Add Employee')
@section('content')
<div class="row stretch-card main-form-card">
  <div class="card">
      <div class="card-body">
        <div class="col-md-12">

          <form action="" method="POST" enctype="multipart/form-data" class="forms-sample" id="employeeForm">
            @csrf
            
            <!--Employee Photo-->  

            <!--Employee Personal-->
            

            <!--End of Employee Personal-->
            
            <!--Emergency Contacts-->
            

            <!--Dependants-->
            <fieldset>
              <h4>Spouse Details</h4>
              
              <div class="dropdown-divider"></div>
              
              <div class="next-prev">
                <button type="button" class="btn btn-outline-secondary prev waves-effect">Previous</button>
                <button type="button" class="btn btn-outline-secondary next waves-effect">Save & Continue</button>  
              </div>

            </fieldset>

            <!--Next of Kins-->
            <fieldset>
              <h4>Next of Kins Information</h4>
              
              

              
              

            </fieldset>
            <!--Education-->
            

            <fieldset>
              <h4>Certifications Obtained</h4>

             
             
              <div class="next-prev">
                <button type="button" class="btn btn-outline-secondary prev waves-effect">Previous</button>
                <button type="button" class="btn btn-outline-secondary next waves-effect">Save & Continue</button>
              </div>

            </fieldset>

            <!--Employee Employment History-->
            <fieldset>
              <h4></h4>

              

              
            
              <div class="next-prev">
                <button type="button" class="btn btn-outline-secondary prev waves-effect">Previous</button>
                <button type="button" class="btn btn-outline-secondary next waves-effect">Save & Continue</button>
              </div>

            </fieldset>
            <!--End of Employee Employment History-->

            <!--Employee Contract Information-->
            <fieldset>
              <h4>Other Details</h4>


              <div class="next-prev">
                <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                <button type="button" class="btn btn-outline-secondary btn-lg next waves-effect">Next</button>
              </div>
            </fieldset>
            <!--End of Employee Contract Information-->

            <!--Summary and Submit-->
            <fieldset>
              <div class="next-prev">
                  <button type="button" class="btn btn-outline-secondary btn-lg prev waves-effect">Previous</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg next waves-effect">Sumbit</button>
                </div>
            </fieldset>
            <!--End of Summary and Submit-->

          </form>
        </div>
    </div>
  </div>
</div>    
@endsection