@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
    <ul class="progressbar d-sm-flex justify-content-center">
        <li class="active"><a href="#">Employee <small>Photo</small></a></li>
        <li><a href="#">Employee <small>Full Details</small></a></li>
        <li><a href="#">Emergency <small>Contact</small></a></li>
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
        <form action="{{route('employee-photo')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
            @csrf
            <!--Employee Photo-->
            <fieldset class="showing">
            <h4>Upload Employee Photo</h4>
            <p><small class="photo-warning text-warning">[Must be gif, png, jpg or jpeg and not more than 1MB]</small></p>
                <div class="row">
                <div class="col-md-6">
                    <div class="mb-2" style="text-align: left;">
                    <label>Passport Photo</label>
                    </div>
                    <div class="photo-frame mb-2 p-2">
                        <img src="../../assets/images/default-placeholder.jpg" alt="preview image" width="147" height="147">
                    </div>
                    <div class="form-group" style="width: 70%">
                    <input type="file" class="form-control validate p-input" name="photo" id="photo" required>
                    </div>
                </div>
                </div>
                
            <div class="next-prev">
                <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Upload Photo</button>
            </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection