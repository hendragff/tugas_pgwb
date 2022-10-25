
<?= $elementActive = "";?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hacked @yield('hacked')<sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ ($elementActive == 'dashboard') ? 'active' : ''}}" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Master Siswa -->
            <li class="nav-item">
            <a class="nav-link {{ ($elementActive == 'mastersiswa') ? 'active' : ''}}" href="/mastersiswa">
                <i class="fas fa-fw fa-solid fa-user-astronaut"></i>
                    <span>Master Siswa</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Heading -->
            <!-- Nav Item - Master Project -->
            <li class="nav-item link">
                <a class="nav-link {{ ($elementActive == 'masterproject') ? 'active' : ''}}" href="/masterproject">
                <i class="fas fa-fw fa-solid fa-copy"></i>
                    <span>Master Project</span>
                </a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item link">
                <a class="nav-link {{ ($elementActive == 'masterkontak') ? 'active' : ''}}" href="/masterkontak">
                <i class="fas fa-fw fa-solid fa-address-book"></i>
                    <span>Master Kontak</span>
                </a>
            </li>
            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
