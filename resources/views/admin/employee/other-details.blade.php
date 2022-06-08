@extends('layouts.dashboard')
@section('page-main', 'Employee')
@section('page-sub', ' / Add Employee')
@section('content')
<div class="progressbar-container">
  <ul class="progressbar d-sm-flex justify-content-center">
      <li class="active done"><a href="#">Employee <small>Full Details</small></a></li>
      <li class="active done"><a href="#">Emergency <small>Contact</small></a></li>
      <li class="active done"><a href="#">Dependants <small>Information</small></a></li>
      <li class="active done"><a href="#">Next <small>of Kins</small></a></li>
      <li class="active done"><a href="#">Educational <small>Information</small></a></li>
      <li class="active done"><a href="#">Certifications <small>Obtained</small></a></li>
      <li class="active done"><a href="#">Employment History</a></li>
      <li class="active done"><a href="#">Other <small>Details</small></a></li>
      <li><a href="#">Preview <small>Information</small></a></li>
  </ul>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('other-details')}}" method="post">
            @csrf
            <fieldset>
                <h5>Other Details</h5>
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6">
                       
                    </div>
                </div>
                <div class="next-prev">
                    <a href="{{route('employment-history')}}" class="btn btn-outline-secondary btn-lg waves-effect">Previous</a>
                    <button type="submit" class="btn btn-outline-secondary btn-lg waves-effect">Next</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection