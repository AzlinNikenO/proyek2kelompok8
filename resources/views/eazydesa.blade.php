<<<<<<< HEAD
@extends('layouts.app')
@section('content')

@php
// ================= DATA =================
=======
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

// Statistik desa
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
$stats = [
    'penduduk' => '8,456',
    'luas' => '12.8 km²',
    'kk' => '2,345',
    'idm' => '0.718'
];
<<<<<<< HEAD
@endphp

<style>
    .hero-img {
    border-radius: 22px;
    box-shadow: 0 20px 40px rgba(0,0,0,.25);
}



    .stat-box {
    border-radius: 18px;
    box-shadow:
        0 15px 30px rgba(0,0,0,.12),
        0 5px 10px rgba(0,0,0,.08);
    transition: all .25s ease;
    background: #fff;
}

.stat-box:hover {
    transform: translateY(-6px);
    box-shadow:
        0 25px 45px rgba(0,0,0,.16),
        0 10px 15px rgba(0,0,0,.10);
}

.icon-box {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

/* warna ungu custom */
.text-purple { color:#7c3aed; }
.bg-purple { background-color:#7c3aed; }

/* FOTO HERO — versi sederhana */
.hero-img {
    width: 100%;
    max-height: 300px;     /* foto diperkecil */
    object-fit: cover;
}

/* HERO padding diperpendek */
section.bg-primary {
    padding-bottom: 90px !important;  /* sebelumnya terlalu ke bawah */
}

/* Jarak aman ke box statistik */
.container.position-relative {
    margin-top: -60px !important;   /* sebelumnya -80px */
}

/* Mobile */
@media (max-width: 768px) {
    .hero-img {
        max-height: 220px;
        margin-top: 15px;
    }

    section.bg-primary {
        padding-bottom: 110px !important;
    }
}

</style>

{{-- ================= HERO ================= --}}
<section class="bg-primary text-white pt-5 pb-6">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3">
                    Selamat Datang di <br>
                    <span class="text-warning">Desa Lohbener</span>
                </h1>
                <p class="mb-4">
                    Kecamatan Lohbener, Kabupaten Indramayu, Jawa Barat<br>
                    Portal resmi Sistem Informasi Desa untuk layanan publik dan transparansi pemerintahan desa.
                </p>
                <div class="d-flex gap-3">
                    <a href="/profil-desa" class="btn btn-light btn-sm px-4">Profil Desa</a>
                    <a href="/profil-pemerintahan" class="btn btn-outline-light btn-sm px-4">Profil Pemerintahan</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">

                <img src="https://raw.githubusercontent.com/Tisa-34/midori/main/Kantor%20Kowu.jpeg"
                class="hero-img img-fluid rounded-4 shadow"
                alt="Desa Lohbener">




            </div>
        </div>
    </div>
</section>

{{-- ================= STATISTIK (OVERLAP HERO) ================= --}}
<div class="container position-relative" style="margin-top:-80px">
    <div class="row g-4">

        {{-- TOTAL PENDUDUK --}}
        <div class="col-md-3">
            <div class="card stat-box border-0 p-4 text-center h-100">
                <div class="icon-box bg-primary bg-opacity-10 text-primary mb-3">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13 7c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2z"/>
                        <path d="M6 10c-2.21 0-4 1.12-4 2.5V14h8v-1.5C10 11.12 8.21 10 6 10z"/>
                    </svg>
                </div>
                <small class="text-muted">Total Penduduk</small>
                <h4 class="fw-bold mt-2">{{ $stats['penduduk'] }}</h4>
            </div>
        </div>

        {{-- LUAS WILAYAH --}}
        <div class="col-md-3">
            <div class="card stat-box border-0 p-4 text-center h-100">
                <div class="icon-box bg-success bg-opacity-10 text-success mb-3">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M2 2h12v12H2z"/>
                    </svg>
                </div>
                <small class="text-muted">Luas Wilayah</small>
                <h4 class="fw-bold mt-2">{{ $stats['luas'] }}</h4>
            </div>
        </div>

        {{-- JUMLAH KK --}}
        <div class="col-md-3">
            <div class="card stat-box border-0 p-4 text-center h-100">
                <div class="icon-box bg-purple bg-opacity-10 text-purple mb-3">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M4 1h8v3H4z"/>
                        <path d="M2 4h12v10H2z"/>
                    </svg>
                </div>
                <small class="text-muted">Jumlah KK</small>
                <h4 class="fw-bold mt-2">{{ $stats['kk'] }}</h4>
            </div>
        </div>

        {{-- IDM SCORE --}}
        <div class="col-md-3">
            <div class="card stat-box border-0 p-4 text-center h-100">
                <div class="icon-box bg-danger bg-opacity-10 text-danger mb-3">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M2 13h2V7H2zM7 13h2V3H7zM12 13h2V9h-2z"/>
                    </svg>
                </div>
                <small class="text-muted">IDM Score</small>
                <h4 class="fw-bold mt-2">{{ $stats['idm'] }}</h4>
            </div>
        </div>

    </div>
</div>


{{-- ================= PROGRAM UNGGULAN ================= --}}
<section class="container py-5 text-center">
    <h2 class="mb-2">Program Unggulan</h2>
    <p class="text-muted mb-5">
        Inovasi digital dan program pembangunan berkelanjutan untuk kemajuan Desa Lohbener
    </p>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="border rounded-4 p-4 h-100">
                <h5>eazyDesa Platform</h5>
                <p class="text-muted mb-0">Sistem Informasi Desa Digital.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="border rounded-4 p-4 h-100">
                <h5>SDGs Desa</h5>
                <p class="text-muted mb-0">Pembangunan berkelanjutan tingkat desa.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="border rounded-4 p-4 h-100">
                <h5>Bank Data Desa</h5>
                <p class="text-muted mb-0">Pusat data dan informasi desa.</p>
            </div>
        </div>
    </div>
</section>

{{-- ================= BERITA ================= --}}
<section class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Berita Terbaru</h3>
        <a href="/berita" class="btn btn-outline-secondary btn-sm">
            📄 Lihat Semua Berita
        </a>
    </div>

    <div class="row g-4">
        @forelse($news as $n)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/'.$n->gambar) }}"
                     class="card-img-top"
                     style="height:180px;object-fit:cover">

                <div class="card-body">
                    <span class="badge bg-light text-dark mb-2">
                        {{ $n->kategori }}
                    </span>
                    <small class="text-muted d-block">
                        {{ $n->created_at->format('d M Y') }}
                    </small>

                    <h6 class="mt-2">{{ $n->judul }}</h6>

                    <p class="text-muted">
                        {{ Str::limit(strip_tags($n->isi), 100) }}
                    </p>

                    <a href="#" class="text-decoration-none fw-semibold">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-muted">Belum ada berita.</p>
        @endforelse
    </div>
</section>


{{-- ================= AKSES CEPAT (FULL WIDTH) ================= --}}
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h3 class="mb-2">Akses Cepat Layanan</h3>
        <p class="mb-4">Layanan digital terintegrasi untuk masyarakat Desa Lohbener</p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="/layanan/ktp" class="btn btn-light px-4">KTP</a>
            <a href="/layanan/kk" class="btn btn-light px-4">KK</a>
            <a href="/layanan/pindah" class="btn btn-light px-4">Pindah Datang</a>
            <a href="/layanan/lainnya" class="btn btn-light px-4">Lainnya</a>
        </div>
    </div>
</section>

@endsection
=======

// Berita terbaru
$news = [
    [
        'judul' => 'Peluncuran Program Digitalisasi Desa Lohbener',
        'kategori' => 'Pemerintahan',
        'tanggal' => '28/7/2024',
        'excerpt' => 'Desa Lohbener resmi meluncurkan sistem DIGIDES untuk meningkatkan pelayanan publik dan transparansi pemerintahan.',
        'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'judul' => 'Penyaluran Bantuan Sosial Bulan Juli 2024',
        'kategori' => 'Sosial',
        'tanggal' => '25/7/2024',
        'excerpt' => 'Distribusi bantuan sosial kepada 456 KK penerima PKH dan Bansos dilaksanakan di Balai Desa Lohbener.',
        'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'judul' => 'Pembangunan Jalan Desa Tahap II Selesai',
        'kategori' => 'Infrastruktur',
        'tanggal' => '22/7/2024',
        'excerpt' => 'Proyek pembangunan infrastruktur jalan desa sepanjang 1.5 km berhasil diselesaikan tepat waktu.',
        'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80'
    ]
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
            <li><a class="dropdown-item" href="/profil.visi-misi">Visi Misi</a></li>
            <li><a class="dropdown-item" href="/profil.tupoksi">Tugas dan Fungsi</a></li>
            <li><a class="dropdown-item" href="/profil.struktur-organisasi">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="/profil.profil-pemerintahan">Profil Kepala Desa</a></li>
            <li><a class="dropdown-item" href="/profil.profil-desa">Profil Desa</a></li>
            <li><a class="dropdown-item" href="/profil.sejarah">Sejarah</a></li>
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

<header class="hero mt-5 pt-4">
  <div class="container d-flex flex-column flex-lg-row align-items-center gap-4">
    <div class="text-white flex-grow-1">
      <h1>Selamat Datang di <span class="text-warning"><?php echo $desa['nama']; ?></span></h1>
      <p class="lead">Kecamatan <?php echo $desa['kecamatan']; ?>, Kabupaten <?php echo $desa['kabupaten']; ?>, <?php echo $desa['provinsi']; ?></p>
      <p>Portal resmi Sistem Informasi Desa (EazyDesa) yang menyajikan informasi terkini, layanan publik, dan transparansi pemerintahan desa.</p>
      <a href="/profil-pemerintahan" class="btn btn-light me-3">Profil Pemerintahan</a>
      <a href="/profil-desa" class="btn btn-light me-3">Profil Desa</a>

    </div>
    <div>
      <img src="https://pemdeslegok.id/desa/upload/artikel/sedang_1663120604_WhatsApp%20Image%202022-03-01%20at%2014.20.18.jpeg" alt="Orang sedang menggunakan mesin" style="border-radius:16px; max-width: 320px; width: 100%; height: auto; box-shadow: 0 6px 20px rgba(0,0,0,.25);">
    </div>
  </div>
</header>

<div class="container mt-n5 mb-5 d-flex justify-content-center flex-wrap gap-3" aria-label="Statistik Desa">
  <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
    <svg fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-3-3.87M7 21v-2a4 4 0 013-3.87"/><circle cx="12" cy="7" r="4"/></svg>
    <div>
      <small class="text-muted">Total Penduduk</small>
      <div class="fs-4 fw-bold"><?php echo $stats['penduduk']; ?></div>
    </div>
  </div>
  <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
    <svg fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5c0-3 3-6 5.5-6s4.5 1.5 4.5 1.5S14.76 3 16.5 3c3 0 5.5 2.42 5.5 5.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
    <div>
      <small class="text-muted">Luas Wilayah</small>
      <div class="fs-4 fw-bold"><?php echo $stats['luas']; ?></div>
    </div>
  </div>
  <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
    <svg fill="none" stroke="#9333ea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3h-8v4h8z"/></svg>
    <div>
      <small class="text-muted">Jumlah KK</small>
      <div class="fs-4 fw-bold"><?php echo $stats['kk']; ?></div>
    </div>
  </div>
  <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
    <svg fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 17 9 11 13 15 21 7"/></svg>
    <div>
      <small class="text-muted">IDM Score</small>
      <div class="fs-4 fw-bold"><?php echo $stats['idm']; ?></div>
    </div>
  </div>
</div>

<section class="container mb-5 text-center" aria-label="Program Unggulan">
  <h2 class="mb-3">Program Unggulan</h2>
  <p class="mb-4 text-muted">Inovasi digital dan program pembangunan berkelanjutan untuk kemajuan Desa Duko</p>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="p-4 border rounded h-100">
        <div class="mb-3 p-3 rounded-circle bg-primary bg-opacity-10 d-inline-block">
          <svg fill="none" stroke="#2563eb" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" height="32" width="32" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 19l9-7-9-7-9 7 9 7z"/><path d="M12 19V5"/><path d="M21 12H3"/></svg>
        </div>
        <h5 class="mb-2">eazyDesa Platform</h5>
        <p class="text-muted mb-0">Sistem Informasi Desa Digital untuk transparansi dan efisiensi pelayanan publik.</p>
      </div>
    </div>
    <div class="col">
      <div class="p-4 border rounded h-100">
        <div class="mb-3 p-3 rounded-circle bg-success bg-opacity-10 d-inline-block">
          <svg fill="none" stroke="#16a34a" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" height="32" width="32" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/></svg>
        </div>
        <h5 class="mb-2">SDGs Desa</h5>
        <p class="text-muted mb-0">Program pencapaian Tujuan Pembangunan Berkelanjutan di tingkat desa.</p>
      </div>
    </div>
    <div class="col">
      <div class="p-4 border rounded h-100">
        <div class="mb-3 p-3 rounded-circle bg-purple bg-opacity-10 d-inline-block">
          <svg fill="none" stroke="#9333ea" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" height="32" width="32" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/></svg>
        </div>
        <h5 class="mb-2">Bank Data Desa</h5>
        <p class="text-muted mb-0">Pusat data dan informasi terpadu untuk transparansi dan akuntabilitas.</p>
      </div>
    </div>
  </div>
</section>

<section class="container mb-5" aria-label="Berita Terbaru">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Berita Terbaru</h3>
    <a href="#" class="btn btn-outline-secondary btn-sm">Lihat Semua Berita</a>
  </div>
  <div class="row g-4">
    <?php foreach ($news as $n): ?>
    <article class="col-md-4 card h-100 shadow-sm">
      <img src="<?php echo $n['image']; ?>" alt="Thumbnail <?php echo htmlspecialchars($n['judul']); ?>" class="card-img-top" style="height:180px; object-fit: cover; border-radius: .375rem .375rem 0 0;">
      <div class="card-body d-flex flex-column">
        <span class="news-label <?php echo strtolower($n['kategori']); ?>"><?php echo htmlspecialchars($n['kategori']); ?></span>
        <small class="text-muted mb-2"><?php echo $n['tanggal']; ?></small>
        <h6 class="card-title"><?php echo htmlspecialchars($n['judul']); ?></h6>
        <p class="news-excerpt flex-grow-1"><?php echo htmlspecialchars($n['excerpt']); ?></p>
        <a href="#" class="mt-auto btn btn-link p-0">Baca Selengkapnya &rarr;</a>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="py-5 text-center text-white bg-primary">
  <div class="container">
    <h3>Akses Cepat Layanan</h3>
    <p class="mb-4">Layanan digital terintegrasi untuk kemudahan masyarakat Desa Lohbener</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="/login" class="btn btn-light btn-sm" style="width:140px">KTP</a>
      <a href="/login" class="btn btn-light btn-sm" style="width:140px">KK</a>
      <a href="/login" class="btn btn-light btn-sm" style="width:140px">SKTM</a>
      <a href="/login" class="btn btn-light btn-sm" style="width:140px">Lainnya</a>

    </div>
  </div>
</section>

    <footer>
    <div class="container py-5">
        <div class="row text-light">
        <div class="col-md-3 mb-4">
            <h5>Kontak Desa</h5>
            <address>
            Kantor Desa Duko<br />
            Kecamatan <?php echo $desa['kecamatan']; ?><br />
            Kabupaten <?php echo $desa['kabupaten']; ?><br />
            <?php echo $desa['provinsi']; ?> <?php echo $desa['kodepos']; ?><br />
            <br />
            <i class="bi bi-telephone-fill"></i> <?php echo $desa['telepon']; ?><br />
            <i class="bi bi-envelope-fill"></i> <?php echo $desa['email']; ?><br />
            <i class="bi bi-clock-history"></i> <?php echo $desa['jam']; ?>
            </address>
        </div>

        <div class="col-md-3 mb-4">
            <h5>Media Sosial</h5>
            <div class="d-flex gap-3 fs-4 mb-3">
            <a href="#" aria-label="Facebook" class="text-light">F</a>
            <a href="#" aria-label="Instagram" class="text-light">I</a>
            <a href="#" aria-label="Twitter" class="text-light">T</a>
            <a href="#" aria-label="YouTube" class="text-light">Y</a>
            </div>
            <h6>Kunjungan Website</h6>
            <ul class="list-unstyled small">
            <li>Hari ini: <strong><?php echo number_format($visits['today']); ?></strong></li>
            <li>Bulan ini: <strong><?php echo number_format($visits['month']); ?></strong></li>
            <li>Total: <strong><?php echo number_format($visits['total']); ?></strong></li>
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
            <?php if($notif): ?>
            <div class="alert alert-info py-1"><?php echo $notif; ?></div>
            <?php endif; ?>
            <form method="post" novalidate>
            <input type="hidden" name="action" value="kirim_pengaduan" />
            <div class="mb-2"><input type="text" name="nama" placeholder="Nama Anda" class="form-control form-control-sm" required></div>
            <div class="mb-2"><input type="email" name="email" placeholder="Email" class="form-control form-control-sm" required></div>
            <div class="mb-2"><textarea name="pesan" placeholder="Pesan pengaduan..." rows="2" class="form-control form-control-sm" required></textarea></div>
            <button type="submit" class="btn btn-primary btn-sm w-100">Kirim Pengaduan</button>
            </form>

            <button type="button" class="btn btn-link btn-sm mt-3 text-light" aria-label="Aksesibilitas">♿ Aksesibilitas</button>
        </div>
        </div>
    </div>

    <div class="text-center py-3 border-top border-light text-light small">
        &copy; 2024 <?php echo $desa['nama']; ?>. Hak Cipta Dilindungi. eazyDesa.
    </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
