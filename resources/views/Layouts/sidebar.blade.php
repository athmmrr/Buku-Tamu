        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-brands fa-discord"></i>
                    <script src="https://kit.fontawesome.com/a7b8ecca68.js" crossorigin="anonymous"></script>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Bukutamu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!--<li class="nav-item active">
                <a class="nav-link" href="{{ url('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin-tamu')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Bukutamu</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->