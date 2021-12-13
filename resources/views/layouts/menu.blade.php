<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Logout -->
    <a href="{{ url('auth/logout') }}" class="logout-btn">
        <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 4vh;"></i>
    </a>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> 
                <a href="{{ route('dashboard.index') }}"><img src="{{ URL::asset('../assets/images/icon/hiring_menu.png')}}" alt="user" /></a>
            </div>
            <!-- User profile text-->
            <!-- <div class="profile-text">
                <h5>Administrador</h5>
                <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>               
            </div> -->
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <div class='menu_nav'>
            <a class='dash item_menu col-12' href="{{ route('vaca')/* route('vacante.index') */}}">
                <img class='normal_img' src="{{ asset('assets/images/menu-nav/vac.png') }}" alt="">
                <img class='hover_img' src="{{ asset('assets/images/menu-nav/vac_hover.png') }}" alt="">
                <div class="w-100">
                    <p>Solicitar Vacante</p>
                </div>
                
                <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
            </a>
            <a class='cot item_menu col-12' href="{{ route('solicitud.index') }}">
                <img class='normal_img' src="{{ asset('assets/images/menu-nav/sol.png') }}" alt="">
                <img class='hover_img' src="{{ asset('assets/images/menu-nav/sol_hover.png') }}" alt="">
                <div class="w-100">
                    <p>Estado de mi Solicitud</p>
                </div>
                
                <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
            </a>
            <a class='prov item_menu col-12' href="{{ route('registros.index') }}">
                <img class='normal_img' src="{{ asset('assets/images/menu-nav/reg.png') }}" alt="">
                <img class='hover_img' src="{{ asset('assets/images/menu-nav/reg_hover.png') }}" alt="">
                <div class="w-100">
                    <p>Registros</p>
                </div>
                
                <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
            </a>
            <a class='prov item_menu col-12' href="{{ route('users') }}">
                <img class='normal_img' src="{{ asset('assets/images/menu-nav/users.png') }}" alt="">
                <img class='hover_img' src="{{ asset('assets/images/menu-nav/users_hover.png') }}" alt="">
                <div class="w-100">
                    <p>Usuarios</p>
                </div>
                
                <img class='select_nav' src="{{ asset('assets/images/menu-nav/select_nav.png') }}" alt="">
            </a>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->