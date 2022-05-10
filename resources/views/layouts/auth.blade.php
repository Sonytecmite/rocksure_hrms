<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rocksure HRMS - Login</title>
    <!-- plugins:css -->
    @include('partials.styles')
    <style>
        .card {
            border-radius: 1.25rem !important;
        }
        .btn-block{
            display: block !important;
            width: 100%;
            padding: 1em 0; 
        }
        .form-control, .btn-block {
            border-radius: 3rem;
        }
        .form-control{
            padding: 1.5rem;
            padding-left: 20px;
            color: rgba(255, 255, 255, 0.8) !important;
        }
        .mb{
            margin-bottom: 20px;
        }
        .text-danger {
            font-size: small;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg row">
              <div class="card col-md-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <div class="card-title text-center" style="margin-bottom: 20px;">
                            <img src="../../assets/images/rocksure-logo.webp" alt="">
                        </div>
                        @yield('content')
                    </div>
                </div>
                <p class="footer text-center">©2022 Rocksure International.</p>
            </div>
          <!-- content-wrapper ends -->

        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('partials.js')
  </body>
</html>