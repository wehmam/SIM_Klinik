<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link @yield('pendaftaran')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Pendaftaran Pasien 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                            <a href="{{ route('pendaftaran.index') }}" class="nav-link @yield('pendaftaran')">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Pendaftaran
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link @yield('master')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                            <a href="{{ route('pasien.index') }}" class="nav-link @yield('pasien')">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Pasien
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dokter.index') }}" class="nav-link @yield('dokter')">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Daftar Dokter
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('poli.index') }}" class="nav-link @yield('poli')">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Daftar Poli
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
