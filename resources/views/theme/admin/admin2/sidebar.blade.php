<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

    {{-- Dashboard --}}
    <li class="nav-item start ">
        <a href="{{route('admin.admin.index')}}" class="nav-link nav-toggle">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="title">Dashboard</span>            
        </a>        
    </li>   

    {{-- User Manager --}}
    <li class="nav-item start ">
        <a href="{{route('user.admin.index')}}" class="nav-link nav-toggle">
            <i class="fa fa-users my-color" aria-hidden="true"></i>
            <span class="title">User manager</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item start ">
                <a href="{{route('user.admin.index')}}" class="nav-link ">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="title">User</span>
                    <span class="badge badge-success">10</span>
                </a>
            </li>
            <li class="nav-item start ">
                <a href="{{route('role.admin.index')}}" class="nav-link ">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span class="title">Role</span>
                    <span class="badge badge-success">5</span>
                </a>
            </li>
            <li class="nav-item start ">
                <a href="{{route('permission.admin.index')}}" class="nav-link ">
                    <i class="fa fa-life-ring" aria-hidden="true"></i>
                    <span class="title">Permission</span>
                    <span class="badge badge-success">15</span>
                </a>
            </li>
        </ul>
    </li>                          
        
</ul>