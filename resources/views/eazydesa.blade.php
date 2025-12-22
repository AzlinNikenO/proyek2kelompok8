@extends('layouts.app')
@section('content')

@php
// ================= DATA =================
$stats = [
    'penduduk' => '8,456',
    'luas' => '12.8 km²',
    'kk' => '2,345',
    'idm' => '0.718'
];
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
