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
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

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
</aside>
