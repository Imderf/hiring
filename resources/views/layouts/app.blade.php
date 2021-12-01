<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts/head') 
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== 
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>   
    -->

    @yield('content')

    <!-- Bootstrap tether Core JavaScript 
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    -->
    <!-- slimscrollbar scrollbar JavaScript 
    <script src="../public/js/jquery.slimscroll.js"></script>
    -->
    <!--Wave Effects 
    <script src="../public/js/waves.js"></script>
    -->
    <!--Menu sidebar 
    <script src="../public/js/sidebarmenu.js"></script>
    -->
    <!--stickey kit 
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    -->
    <!--Custom JavaScript 
    <script src="../public/js/custom.min.js"></script>
    -->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ==============================================================
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
     -->
     @include('layouts/footer')
</body>
</html>
