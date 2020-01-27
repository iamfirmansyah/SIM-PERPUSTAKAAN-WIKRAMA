<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/319489147f.js"></script>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Akun</title>
  <!-- Favicon -->
  <link href="{{asset('admin/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('admin/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('admin/css/argon.css?v=1.0.0')}}" rel="stylesheet">
  <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>

</head>

<body>
  <!-- Sidenav -->
  @include('admin.layouts.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('admin.layouts.navbar')

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          @yield('cardStat')
        </div>
      </div>
    </div>
    <!-- Header -->

    <!-- Page content -->
    <div class="container-fluid mt--7">

      @yield('content')
      <!-- Footer -->
      @include('admin.layouts.footer')
    </div>
  </div>

  <script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('admin/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('admin/vendor/clipboard/dist/clipboard.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('admin/js/argon.js?v=1.0.0')}}"></script>

</html>