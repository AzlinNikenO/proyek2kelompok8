<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $desa['nama']; ?> — EAZYDESA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {background:#2563eb; color:#fff; padding:60px 20px; border-radius:0 0 24px 24px;}
    .stat-card {border-radius:.75rem; box-shadow:0 4px 10px rgba(0,0,0,.1); background:#fff; padding:20px;}
    .news-excerpt {font-size:.95rem;}
    .btn-outline-primary:hover {color:#fff; background:#2563eb; border-color:#2563eb;}
    footer {background:#102451; color:#cbd5e1; padding:40px 20px;}
    footer a {color:#cbd5e1; text-decoration:none;}
    footer a:hover {text-decoration:underline;}
    .news-label {
      font-size:12px; font-weight:600; padding:3px 10px; border-radius:14px;
      text-transform:capitalize; display:inline-block; margin-bottom:6px;
    }
    .news-label.pemerintahan {background:#cbe4ff; color:#2563eb;}
    .news-label.sosial {background:#bbf7d0; color:#15803d;}
    .news-label.infrastruktur {background:#e9d5ff; color:#7c3aed;}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"><?php echo $desa['nama']; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="/eazydesa">Beranda</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profil-pemerintahan">Profil Pemerintahan</a></li>
            <li><a class="dropdown-item" href="/profil-desa">Profil Desa</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="/statistik">Statistik</a></li>
        <li class="nav-item"><a class="nav-link" href="/layanan">Layanan & Produk</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Lainnya</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/datadiri">Isi Data Diri</a></li>
            <li><a class="dropdown-item" href="/berita">Berita</a></li>
            <li><a class="dropdown-item" href="/login">Masuk Akun</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<body>

  <!-- 🔹 NAVBAR FIXED -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">eazyDesa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profil-pemerintahan">Profil Pemerintahan</a></li>
            <li><a class="dropdown-item" href="/profil-desa">Profil Desa</a></li>
          </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('statistik') ? 'active' : '' }}"
            href="{{ route('statistik') }}">
            Statistik
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('layanan') ? 'active' : '' }}"
            href="{{ route('layanan') }}">
            Layanan Desa
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Lainnya</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kontak Desa</a></li>
            <li><a class="dropdown-item" href="#">Galeri</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ route('logout') }}">
            Logout
            </a>
        </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- 🔹 KONTEN HALAMAN -->
  <main>
    @yield('content')
  </main>

  <!-- 🔹 FOOTER -->
    <footer class="bg-gray-900 text-gray-200 mt-10 pt-10">
    <div class="container py-5">
        <div class="row">

        <div class="col-md-3 mb-4">
            <h5>Kontak Desa</h5>
            <address>
            Kantor Desa Duko<br />
            Kecamatan {{ $desa['kecamatan'] }} <br />
            Kabupaten {{ $desa['kabupaten'] }}<br />
            {{ $desa['provinsi'] }} {{ $desa['kodepos'] }}<br /><br />
            <i class="bi bi-telephone-fill"></i> {{ $desa['telepon'] }}<br />
            <i class="bi bi-envelope-fill"></i> {{ $desa['email'] }}<br />
            <i class="bi bi-clock-history"></i> {{ $desa['jam'] }}
            </address>
        </div>

        <div class="col-md-3 mb-4">
            <h5>Media Sosial</h5>
            <div class="d-flex gap-3 fs-4 mb-3">
            <a href="#" class="text-light">F</a>
            <a href="#" class="text-light">I</a>
            <a href="#" class="text-light">T</a>
            <a href="#" class="text-light">Y</a>
            </div>
            <h6>Kunjungan Website</h6>
            <ul class="list-unstyled small">
            <li>Hari ini: <strong>{{ number_format($visits['today']) }}</strong></li>
            <li>Bulan ini: <strong>{{ number_format($visits['month']) }}</strong></li>
            <li>Total: <strong>{{ number_format($visits['total']) }}</strong></li>
            </ul>
        </div>

        <div class="col-md-3 mb-4">
            <h5>Jelajahi</h5>
            <ul class="list-unstyled">
            <li><a href="#" class="text-light">Kementerian Desa PDTT</a></li>
            <li><a href="#" class="text-light">Kabupaten Sumenep</a></li>
            <li><a href="#" class="text-light">Provinsi Jawa Timur</a></li>
            <li><a href="#" class="text-light">DIGIDES Platform</a></li>
            <li><a href="#galeri" class="btn btn-outline-light btn-sm mt-2">Lihat Galeri Lengkap</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <h5>Pengaduan</h5>

            @if($notif)
            <div class="alert alert-info py-1">{{ $notif }}</div>
            @endif

            <form method="post" novalidate>
            <input type="hidden" name="action" value="kirim_pengaduan" />
            <div class="mb-2"><input type="text" name="nama" placeholder="Nama Anda" class="form-control form-control-sm" required></div>
            <div class="mb-2"><input type="email" name="email" placeholder="Email" class="form-control form-control-sm" required></div>
            <div class="mb-2"><textarea name="pesan" placeholder="Pesan pengaduan..." rows="2" class="form-control form-control-sm" required></textarea></div>
            <button type="submit" class="btn btn-primary btn-sm w-100">Kirim Pengaduan</button>
            </form>

            <button type="button" class="btn btn-link btn-sm mt-3 text-light">♿ Aksesibilitas</button>
        </div>

        </div>
    </div>

    <div class="text-center py-3 border-top border-light small">
        &copy; 2024 {{ $desa['nama'] }}. Hak Cipta Dilindungi. eazyDesa.
    </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
