<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ check_file(auth()->user()->image,'user') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="">
                <a href="javascript:void(0);" class="user-name h5 mt-2 mb-1 d-block" aria-expanded="false">{{ auth()->user()->full_name }}</a>
            </div>
            <p class="text-muted">{{ ucfirst(auth()->user()->user_type) }}</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navigation</li>
                {{-- @can('dashboard-read') --}}
                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('user-read') --}}
                <li>
                    <a href="{{ route('admin.users') }}">
                        <i class="fa fa-users"></i>
                        <span> Users </span>
                    </a>
                </li>
                {{-- @endcan --}}

                {{-- @can('user-read') --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-blog"></i>
                        <span> Blog </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('admin.blog.add') }}">Add Blog</a></li>
                        <li><a href="{{ route('admin.blogs') }}">All Blog</a></li>
                    </ul>
                </li>
                {{-- @endcan --}}

                <!-- <li>
                    <a href="{{ route('admin.permissions') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Permission </span>
                    </a>
                </li> -->

                @can('role-read')
                <li>
                    <a href="{{ route('admin.roles') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Roles </span>
                    </a>
                </li>
                @endcan

                @can('staff-read')
                <li>
                    <a href="{{ route('admin.staff') }}">
                        <i class="fa fa-user"></i>
                        <span> Staff Management </span>
                    </a>
                </li>
                @endcan

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
