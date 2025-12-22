<<<<<<< HEAD
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">EazyDesa Admin</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                {{-- DASHBOARD --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
=======
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CRUD LARAVEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/" class="d-block">Azlin Niken Oktivani</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ ($slug == 'dashboard') ? 'active' : '' }}">
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
<<<<<<< HEAD

                {{-- PENGAJUAN --}}
                <li class="nav-item">
                    <a href="{{ route('admin.pengajuan.filter', 'ktp') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pengajuan Layanan</p>
                    </a>
                </li>

                {{-- DATA WARGA --}}
                <li class="nav-item">
                    <a href="{{ route('admin.warga.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Warga</p>
                    </a>
                </li>

                {{-- BERITA DESA --}}
                <li class="nav-item">
                    <a href="{{ route('admin.berita.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita Desa</p>
                    </a>
                </li>

                {{-- PENGADUAN --}}
                <li class="nav-item">
                    <a href="{{ route('admin.pengaduan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>Pengaduan Warga</p>
                    </a>
                </li>

                {{-- PROFIL DESA --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Profil Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        {{-- GALERI --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.galeri.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galeri Desa</p>
                            </a>
                        </li>

                        {{-- STRUKTUR ORGANISASI --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.struktur.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Struktur Organisasi</p>
                            </a>
                        </li>

                        {{-- KONTAK --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.kontak.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kontak Desa</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
=======
                <li class="nav-item">
                    <a href="/produk" class="nav-link {{ ($slug == 'produk') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link {{ ($slug == 'mahasiswa') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/prodi" class="nav-link {{ ($slug == 'prodi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Program Studi</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
</aside>
