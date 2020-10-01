<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" /> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Puninar Group , etc." name="description" />
    <meta content="puninar" name="sysdev" />

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- C3 Chart css -->
    <link href="{{ asset('assets/libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('toastr/bootoast.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('toastr/bootoast.css') }}" rel="stylesheet" type="text/css">



  

<style>

    body{
        font-family: 'Rubik', sans-serif !important;
        
    }
.left-side-menu {
/* background-color: #64c5b1 !important; */
}

#sidebar-menu>ul>li>a.active {
    background-color:  grey !important;
}

</style>
    @yield('styles')
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                        {{ auth()->user()->name }}  <i class="mdi mdi-chevron-down"></i> 
                            </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        {{-- <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div> --}}

                        <!-- item-->
                        <a href="{{ route('profile.password.edit') }}" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Ganti Password</span>
                        </a>

                        <!-- item-->
                       {{--  <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a> --}}

                        <div class="dropdown-divider"></div>

                        <button href="#" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </button>
                    </div>
                </li>
            </ul>
            <!-- LOGO -->
            <div class="logo-box">
                <a href="/" class="logo text-center">
                    <span class="logo-lg">
                            {{-- <img src="" alt="" height="25"> --}}
                            <h3 style="color :white; margin-top:25px;"> CMS KUESIONER</h3>
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-sm">
                        {{-- <span class="logo-sm-text-dark">U</span>  --}}
                       <h3 style="color :white;margin-top:25px;"> CMS</h3>
                    {{-- <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="28"> --}}
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->
        @include('partials.menu')

<div class="content-page">
    <div class="content">
        @if(session('message'))
            <div class="row mb-2">
                  <div class="col-lg-12">
                      <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                  </div>
              </div>
          @endif
          @if($errors->count() > 0)
              <div class="alert alert-danger">
                  <ul class="list-unstyled">
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          @yield('content')



    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
    </div>
    <!-- end content -->
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   {{-- 2020 &copy; Puninar Logistict <a href="#"></a> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- END wrapper -->




<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!--C3 Chart-->
{{-- <script src="{{ asset('assets/libs/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/libs/c3/c3.min.js') }}"></script>

<script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }} "></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }} "></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }} "></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }} "></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }} "></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }} "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


{{-- <script src="//code.jquery.com/jquery.min.js"></script> --}}
<script src="{{ asset('toastr/bootoast.js') }}"></script>
<!-- Datatables init -->

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<script>


</script>



@yield('scripts')

</body>

</html>