@stack('styles')



<?php
// Data desa
$desa = [
    'nama' => 'EazyDesa',
    'kecamatan' => 'Lohbener',
    'kabupaten' => 'Indramayu',
    'provinsi' => 'Jawa Barat',
    'kodepos' => '45252',
    'telepon' => '(+62) 88-218-032-824',
    'email' => 'EazyDesa@gmail.com',
    'jam' => 'Senin - Jumat: 08:00 - 14:00'
];


// --- Visit Counter ---
$visits_file = __DIR__ . '/_visits.json';
if (!file_exists($visits_file)) {
    file_put_contents($visits_file, json_encode(['today' => 0, 'month' => 0, 'total' => 0, 'date' => date('Y-m-d')]));
}
$visits = json_decode(file_get_contents($visits_file), true);
$today = date('Y-m-d');
if ($visits['date'] !== $today) {
    $visits['today'] = 0;
    $visits['date'] = $today;
}
// Increase counts only once per session (optional)
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['visit_counted'])) {
    $visits['today']++;
    $visits['month']++;
    $visits['total']++;
    file_put_contents($visits_file, json_encode($visits));
    $_SESSION['visit_counted'] = true;
}

// --- Pengaduan Handler ---
$pengaduan_file = __DIR__ . '/_pengaduan.json';
if (!file_exists($pengaduan_file)) file_put_contents($pengaduan_file, json_encode([]));

$notif = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'kirim_pengaduan') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');
    if ($nama === '' || $email === '' || $pesan === '') {
        $notif = 'Mohon isi semua kolom pengaduan.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $notif = 'Email tidak valid.';
    } else {
        $all = json_decode(file_get_contents($pengaduan_file), true);
        $item = [
            'nama' => htmlspecialchars($nama),
            'email' => htmlspecialchars($email),
            'pesan' => htmlspecialchars($pesan),
            'tanggal' => date('Y-m-d H:i:s')
        ];
        $all[] = $item;
        file_put_contents($pengaduan_file, json_encode($all, JSON_PRETTY_PRINT));
        $notif = 'Terima kasih, pengaduan Anda telah terkirim.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $desa['nama']; ?> — EAZYDESA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
    background: #ffffff;
    border-bottom: 1px solid #e5e7eb;
}

.navbar-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
}

.navbar-brand span {
    font-size: 13px;
    font-weight: 400;
    color: #6b7280;
}

.nav-link {
    font-weight: 600;
    color: #111827 !important;
}

.nav-link.active,
.nav-link:hover {
    background: #111827;
    color: #fff !important;
    border-radius: 10px;
    padding: 8px 14px;
}

.main-content {
    padding-top: 85px;   /* tinggi navbar */
    padding-bottom: 0px; /* tinggi footer */
    min-height: 100vh;
}



.badge-role {
    background: #2563eb;
    color: #fff;
    font-size: 11px;
    padding: 4px 8px;
    border-radius: 999px;
    margin-left: 6px;
}



    .btn-logout {
    background-color: transparent;
    color: #dc3545;
    font-weight: 600;
    border: none;
    padding: 10px 15px;
    transition: all .2s ease;
}

.btn-logout:hover {
    background-color: #f8d7da;
    color: #842029;
}

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

  <style>
/* Dropdown level 2 */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-left: .1rem;
    display: none;
}

/* Hover support desktop */
.dropdown-submenu:hover > .dropdown-menu {
    display: block;
}

/* Arrow indicator */
.dropdown-submenu > a::after {
    content: "›";
    float: right;
    font-size: 18px;
    margin-top: -2px;
}
</style>

</head>


<body>

  <!-- 🔹 NAVBAR FIXED -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand" href="/">
            <img src="https://cdn-icons-png.flaticon.com/512/69/69524.png" width="36">
            <div>
                <div>Desa Lohbener</div>
                <span>Kec. Lohbener, Kab. Indramayu</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto align-items-center gap-1">

                <!-- BERANDA -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>

                <!-- PROFIL -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="/tupoksi">Tugas & Fungsi</a></li>
                        <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="/profil-pemerintahan">Profil Kepala Desa</a></li>
                        <li><a class="dropdown-item" href="/profil-desa">Profil Desa</a></li>
                        <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                        <li><hr></li>
                        <li><a class="dropdown-item" href="#">Aksi Lainnya</a></li>
                    </ul>
                </li>

                <!-- STATISTIK -->
                <li class="nav-item">
                    <a class="nav-link" href="/statistik">Statistik</a>
                </li>

                <!-- LAYANAN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan & Produk</a>
                    <ul class="dropdown-menu">

                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Pelayanan Desa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/layanan/ktp">Pengajuan KTP</a></li>
                                <li><a class="dropdown-item" href="/layanan/kk">Pengajuan KK</a></li>
                                <li><a class="dropdown-item" href="/layanan/kia">Pengajuan KIA</a></li>
                                <li><a class="dropdown-item" href="/layanan/akta-kelahiran">Akta Kelahiran</a></li>
                                <li><a class="dropdown-item" href="/layanan/akta-kematian">Akta Kematian</a></li>
                                <li><a class="dropdown-item" href="/layanan/pindah-datang">Pindah Datang</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Administrasi Kependudukan</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/adminduk/pendaftaran">Pendaftaran Penduduk</a></li>
                                <li><a class="dropdown-item" href="/adminduk/pencatatan">Pencatatan Sipil</a></li>
                                <li><a class="dropdown-item" href="/adminduk/dokumen">Dokumen Administrasi</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <!-- LAINNYA -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/kontak">Kontak Desa</a></li>
                        <li><a class="dropdown-item" href="/galeri">Galeri</a></li>
                        <li><a class="dropdown-item" href="/cek-bansos">Cek Bansos</a></li>
                    </ul>
                </li>

                <!-- LOGIN / LOGOUT -->
                        @auth('web')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    {{ auth('web')->user()->nama }}
                                    <span class="badge-role">
                                        {{ strtoupper(auth('web')->user()->role ?? 'WARGA') }}
                                    </span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item text-danger">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginRoleModal">
                                    Login / Daftar
                                </a>
                            </li>
                        @endauth

            </ul>
        </div>
    </div>
</nav>


  <!-- 🔹 KONTEN HALAMAN -->
<main class="main-content">
    @yield('content')
</main>


  <!-- 🔹 FOOTER -->
<footer class="bg-gray-900 text-gray-200 mt-10 pt-10">
<div class="container py-5">
<div class="row">

<!-- ================= KONTAK ================= -->
<div class="col-md-3 mb-4">
    <h5>Kontak Desa</h5>
    <address class="small">
        Kantor Desa Lohbener<br>
        Kecamatan {{ $desa['kecamatan'] }}<br>
        Kabupaten {{ $desa['kabupaten'] }}<br>
        {{ $desa['provinsi'] }} {{ $desa['kodepos'] }}<br><br>
        <i class="bi bi-telephone-fill"></i> {{ $desa['telepon'] }}<br>
        <i class="bi bi-envelope-fill"></i> {{ $desa['email'] }}<br>
        <i class="bi bi-clock-history"></i> {{ $desa['jam'] }}
    </address>
</div>

<!-- ================= MEDIA SOSIAL ================= -->
<div class="col-md-3 mb-4">
    <h5>Media Sosial</h5>
    <div class="d-flex gap-3 fs-4 mb-3">
        <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-light"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
    </div>

    <h6 class="mt-3">Kunjungan Website</h6>
    <ul class="list-unstyled small">
        <li>Hari ini: <strong>{{ number_format($visits['today']) }}</strong></li>
        <li>Bulan ini: <strong>{{ number_format($visits['month']) }}</strong></li>
        <li>Total: <strong>{{ number_format($visits['total']) }}</strong></li>
    </ul>
</div>

<!-- ================= JELAJAHI ================= -->
<div class="col-md-3 mb-4">
    <h5>Jelajahi</h5>
    <ul class="list-unstyled small">
        <li><a href="#" class="text-light">Kementerian Desa PDTT</a></li>
        <li><a href="#" class="text-light">Kabupaten Sumenep</a></li>
        <li><a href="#" class="text-light">Provinsi Jawa Timur</a></li>
        <li><a href="#" class="text-light">DIGIDES Platform</a></li>
    </ul>
</div>

<!-- ================= PENGADUAN ================= -->
<div class="col-md-3">
    <h5>Pengaduan</h5>

    <form method="POST" action="/submit-pengaduan" >
    @csrf
        <div class="mb-2">
            <input type="text" name="nama" class="form-control form-control-sm"
                placeholder="Nama Anda" required>
        </div>

        <div class="mb-2">
            <input type="email" name="email" class="form-control form-control-sm"
                placeholder="Email" required>
        </div>

        <div class="mb-2">
            <textarea name="pesan" class="form-control form-control-sm"
                placeholder="Pesan pengaduan..." rows="2" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-sm w-100">
            Kirim Pengaduan
        </button>
    </form>

    <button type="button" class="btn btn-link btn-sm mt-3 text-light">
        ♿ Aksesibilitas
    </button>
</div>

</div>
</div>

<div class="text-center py-3 border-top border-secondary small">
    © 2024 {{ $desa['nama'] }}. Hak Cipta Dilindungi. eazyDesa.
</div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Tangani dropdown bertingkat (khusus mobile & tablet)
    document.querySelectorAll('.dropdown-submenu > a').forEach(function (submenuToggle) {

        submenuToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const submenu = this.nextElementSibling;

            // Tutup submenu lain di level yang sama
            const parentMenu = this.closest('.dropdown-menu');
            parentMenu.querySelectorAll('.dropdown-menu').forEach(function (menu) {
                if (menu !== submenu) {
                    menu.style.display = 'none';
                }
            });

            // Toggle submenu aktif
            submenu.style.display = submenu.style.display === 'block'
                ? 'none'
                : 'block';
        });

    });

    // Tutup semua submenu saat dropdown utama ditutup
    document.querySelectorAll('.dropdown').forEach(function (dropdown) {
        dropdown.addEventListener('hidden.bs.dropdown', function () {
            this.querySelectorAll('.dropdown-menu .dropdown-menu').forEach(function (submenu) {
                submenu.style.display = 'none';
            });
        });
    });

});
</script>

@if(session('success'))
    <div class="alert alert-success small mt-2">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger small mt-2">
        {{ $errors->first() }}
    </div>
@endif

<div class="modal fade" id="loginRoleModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <h5 class="mb-3">Masuk sebagai</h5>
      <div class="d-flex gap-3">
        <a href="/admin/login" class="btn btn-dark w-50">Admin Desa</a>
        <a href="/login" class="btn btn-primary w-50">Warga</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
