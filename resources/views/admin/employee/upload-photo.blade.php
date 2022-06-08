@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
    <ul class="progressbar">
        <li class="active"><a href="#">Employee <small>Photo</small></a></li>
        <li ><a href="#">Employee <br><small>Full Details</small></a></li>
        <li><a href="#">Emergency <small>Contact</small></a></li>
        <li><a href="#">Dependants <small>Information</small></a></li>
        <li><a href="#">Next of Kin</a></li>
        <li><a href="#">Educational <small>Information</small></a></li>
        <li><a href="#">Certifications <small>Obtained</small></a></li>
        <li><a href="#">Employment <small>History</small></a></li>
        <li><a href="#">Other <small>Details</small></a></li>
        <li><a href="#">Preview <small>Information</small></a></li>
    </ul>
  </div> 
<div class="card">
    <div class="card-body">
        <form action="{{route('employee-photo')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
            <!--Employee Photo-->
            <fieldset class="showing">
            <h5>Upload Employee Photo</h5>
            <p><small class="photo-warning text-warning">[Must be gif, png, jpg or jpeg and not more than 1MB]</small></p>
            
                
            <div class="next-prev">
                <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Upload Photo</button>
            </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection