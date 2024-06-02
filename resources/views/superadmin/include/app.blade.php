<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('superadmin-assets/vendors/mdi/css/materialdesignicons.min.c')}}ss">
    <link rel="stylesheet" href="{{asset('superadmin-assets/vendors/css/vendor.bundle.base.c')}}ss">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('superadmin-assets/vendors/jvectormap/jquery-jvectormap.c')}}ss">
    <link rel="stylesheet" href="{{asset('superadmin-assets/vendors/flag-icon-css/css/flag-icon.min.c')}}ss">
    <link rel="stylesheet" href="{{asset('superadmin-assets/vendors/owl-carousel-2/owl.carousel.min.c')}}ss">
    <link rel="stylesheet" href="{{asset('superadmin-assets/vendors/owl-carousel-2/owl.theme.default.min.c')}}ss">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('superadmin-assets/css/style.c')}}ss">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('superadmin-assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
    
        @include('superadmin.include.header')
        @yield('content')
        @include('superadmin.include.footer')
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('superadmin-assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('superadmin-assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('superadmin-assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('superadmin-assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('superadmin-assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('superadmin-assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('superadmin-assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('superadmin-assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('superadmin-assets/js/misc.js')}}"></script>
    <script src="{{asset('superadmin-assets/js/settings.js')}}"></script>
    <script src="{{asset('superadmin-assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('superadmin-assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>