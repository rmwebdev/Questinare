       <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">

            <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li> 

                <li><a href="{{ route("admin.home") }}"><i class="fe-airplay"></i><span> Dashboard</span></a></li>
                @can('user_management_access')
                <li><a href="javascript: void(0);"><i class="fe-users"></i>
                <span> User Management</span>
                <span class="menu-arrow"></span>
                </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @can('permission_access')
                        <li><a href="{{ route("admin.permissions.index") }}">Permission</a></li>
                        @endcan

                        @can('role_access')
                        <li><a href="{{ route("admin.roles.index") }}">Role</a></li>
                        @endcan

                        @can('user_access')
                        <li><a href="{{ route("admin.users.index") }}">Daftar User</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan 
                @can('questionare_management_access')
                <li><a href="javascript: void(0);"><i class="fe- fe-cloud-drizzle"></i>
                    <span>Kuesioner</span>
                    <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @can('questionare_create')
                        <li><a href="{{ route("admin.questionares.index") }}">Buat Kuesioner</a></li>
                        @endcan
                        @can('view_report')
                        <li><a href="{{ route("admin.report.index") }}">Laporan Kuesioner</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
                {{-- <li class="c-sidebar-nav-item"></li> --}}
                {{-- @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
                @endif --}}
            </ul>

        </div>
            <!-- End Sidebar -->

    <div class="clearfix"></div>
    </div>
        <!-- Sidebar -left -->

</div>
    <!-- Left Sidebar End -->