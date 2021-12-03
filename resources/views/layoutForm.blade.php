<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts/head')
<link href="{{ asset('css') }}/mainForm.css" rel="stylesheet" />
    
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">   
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== --> 
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        {{-- @include('layouts/menu')  --}}
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        {{-- <div class="page-wrapper">            
            @if(session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif
            @if(session('warning'))
            <div class="alert alert-warning">{{session('warning')}}</div>
            @endif
            @yield('content')
        </div> --}}
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <div class="alert alert-cargam" role="alert"></div>
    
    @include('layouts/footer')
    @stack('scripts')
</body>
</html>

