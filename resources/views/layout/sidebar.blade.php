<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://dipanegara.ac.id/" class="brand-link navbar-warning navbar-light" target="_blank">
        <img src="{{ asset('admin/assets/dist/img/logo-dipa.png')}}" alt="Dipanegara Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SIAKA DIPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block" style="margin-left: 70px">{{auth()->user()->username}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('jurusan')}}" class="nav-link  {{ Request::is('jurusan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Jurusan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('matakuliah')}}" class="nav-link  {{ Request::is('matakuliah') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            Matakuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dosen')}}" class="nav-link  {{ Request::is('dosen') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Dosen
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('mahasiswa')}}" class="nav-link  {{ Request::is('mahasiswa') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Mahasiswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('landing')}}" class="nav-link  {{ Request::is('logout') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
