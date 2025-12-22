@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<br>

{{-- HEADER --}}
<section class="content-header">
    <div class="container-fluid">
        <br>
        <div class="row mb-3">
            <div class="col text-center">
                <br>
                <h1 class="fw-bold">Profil Desa</h1>
                <p class="text-muted">
                    Informasi lengkap tentang sejarah, pemerintahan, demografi, dan potensi desa
                </p>
                <hr style="width:100px;margin:auto;">
            </div>
        </div>
    </div>
</section>

{{-- MAIN CONTENT --}}
<section class="content">
<div class="container-fluid d-flex justify-content-center">

<div class="card shadow-sm" style="max-width:1200px;width:100%;border-radius:20px;">
<div class="card-body p-4">

{{-- TAB NAVIGATION --}}
<div class="bg-light rounded-pill p-2 mb-4 overflow-auto">
<div class="d-flex flex-nowrap">
    <button class="btn btn-white fw-semibold text-primary rounded-pill px-4 me-2 shadow-sm nav-btn active" data-target="umum">
        Umum
    </button>
    <button class="btn btn-white fw-semibold text-primary rounded-pill px-4 me-2 shadow-sm nav-btn active" data-target="pemerintahan">
        Pemerintahan
    </button>
    <button class="btn btn-white fw-semibold text-primary rounded-pill px-4 me-2 shadow-sm nav-btn active" data-target="demografi">
        Demografi
    </button>
    <button class="btn btn-white fw-semibold text-primary rounded-pill px-4 me-2 shadow-sm nav-btn active" data-target="ekonomi">
        Ekonomi
    </button>
    <button class="btn btn-white fw-semibold text-primary rounded-pill px-4 me-2 shadow-sm nav-btn active" data-target="prestasi">
        Prestasi
    </button>
</div>
</div>

{{-- ================= CONTENT WRAPPER ================= --}}
<div class="content-container">

{{-- ================= INFORMASI UMUM ================= --}}
<div id="umum" class="content-section active">
<div class="border rounded-4 p-4">

<h4 class="fw-bold mb-4 text-primary">
    <i class="fas fa-info-circle me-2"></i>
    Informasi Umum
</h4>

<div class="row g-3">
    <div class="col-md-6">
        <div class="border rounded p-3 bg-light">
            <small class="text-muted">Nama Desa</small>
            <div class="fw-bold fs-5">Desa Sejahtera Digital</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded p-3 bg-light">
            <small class="text-muted">Tahun Berdiri</small>
            <div class="fw-bold fs-5">1945</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded p-3 bg-light">
            <small class="text-muted">Luas Wilayah</small>
            <div class="fw-bold fs-5">45.2 km²</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded p-3 bg-light">
            <small class="text-muted">Ketinggian</small>
            <div class="fw-bold fs-5">245 mdpl</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded p-3 bg-light">
            <small class="text-muted">Jumlah Penduduk</small>
            <div class="fw-bold fs-5">12.345 Jiwa</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded p-3 bg-light">
            <small class="text-muted">Jumlah KK</small>
            <div class="fw-bold fs-5">3.456 KK</div>
        </div>
    </div>
</div>

</div>
</div>

{{-- ================= PEMERINTAHAN ================= --}}
<div id="pemerintahan" class="content-section">

<h4 class="fw-bold mb-4 text-primary">
    <i class="fas fa-building me-2"></i>
    Pemerintahan Desa
</h4>

<div class="row g-4 mb-4">
<div class="col-md-6">
<div class="border rounded-4 p-4 h-100">
<h6 class="fw-bold mb-3"><i class="fas fa-sitemap me-2"></i>Struktur Pemerintahan</h6>

<strong>Kepala Desa</strong><br>Budi Santoso, S.Sos<br>
<span class="badge bg-light text-dark mb-2">2019–2025</span><br>

<strong>Sekretaris Desa</strong><br>Siti Nurhaliza, S.AP<br>
<span class="badge bg-light text-dark mb-2">2020–2026</span><br>

<strong>Kaur Pemerintahan</strong><br>Ahmad Hidayat, S.H<br>
<span class="badge bg-light text-dark mb-2">2020–2026</span><br>

<strong>Kaur Pembangunan</strong><br>Rina Wijayanti, S.T<br>
<span class="badge bg-light text-dark">2021–2027</span>
</div>
</div>

<div class="col-md-6">
<div class="border rounded-4 p-4 h-100">
<h6 class="fw-bold mb-3"><i class="fas fa-chart-line me-2"></i>Kinerja Pemerintahan</h6>
<canvas id="grafikPemerintahan"></canvas>
</div>
</div>
</div>

</div>

{{-- ================= demografi ================= --}}
<div id="demografi" class="content-section">

<h4 class="fw-bold mb-4 text-primary">
    <i class="fas fa-users me-2"></i>
    Demografi Desa
</h4>

<div class="row g-4">

    {{-- KOMPOSISI PENDUDUK --}}
    <div class="col-md-6">
        <div class="border rounded-4 p-4 h-100">
            <h6 class="fw-bold mb-4">
                <i class="fas fa-user-friends me-2"></i>
                Komposisi Penduduk
            </h6>

            <div class="d-flex justify-content-between mb-3">
                <span>Laki-laki</span>
                <span>6.234 <span class="badge bg-light text-dark">50.5%</span></span>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <span>Perempuan</span>
                <span>6.111 <span class="badge bg-light text-dark">49.5%</span></span>
            </div>

            <hr>

            <div class="d-flex justify-content-between mb-3">
                <span>Usia 0–14 tahun</span>
                <span>2.469 <span class="badge bg-light text-dark">20%</span></span>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <span>Usia 15–64 tahun</span>
                <span>8.642 <span class="badge bg-light text-dark">70%</span></span>
            </div>

            <div class="d-flex justify-content-between">
                <span>Usia 65+ tahun</span>
                <span>1.234 <span class="badge bg-light text-dark">10%</span></span>
            </div>
        </div>
    </div>

    {{-- TINGKAT PENDIDIKAN --}}
    <div class="col-md-6">
        <div class="border rounded-4 p-4 h-100">
            <h6 class="fw-bold mb-4">
                <i class="fas fa-graduation-cap me-2"></i>
                Tingkat Pendidikan
            </h6>

            {{-- ITEM --}}
            <div class="mb-4">
                <div class="d-flex justify-content-between mb-1">
                    <span>Tidak Sekolah</span>
                    <span>123 <span class="badge bg-light text-dark">1%</span></span>
                </div>
                <div class="progress" style="height:8px;">
                    <div class="progress-bar bg-dark" style="width:1%"></div>
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex justify-content-between mb-1">
                    <span>SD / Sederajat</span>
                    <span>3.456 <span class="badge bg-light text-dark">28%</span></span>
                </div>
                <div class="progress" style="height:8px;">
                    <div class="progress-bar bg-dark" style="width:28%"></div>
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex justify-content-between mb-1">
                    <span>SMP / Sederajat</span>
                    <span>2.890 <span class="badge bg-light text-dark">23.4%</span></span>
                </div>
                <div class="progress" style="height:8px;">
                    <div class="progress-bar bg-dark" style="width:23.4%"></div>
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex justify-content-between mb-1">
                    <span>SMA / Sederajat</span>
                    <span>4.321 <span class="badge bg-light text-dark">35%</span></span>
                </div>
                <div class="progress" style="height:8px;">
                    <div class="progress-bar bg-dark" style="width:35%"></div>
                </div>
            </div>

            <div>
                <div class="d-flex justify-content-between mb-1">
                    <span>Diploma / Sarjana</span>
                    <span>1.555 <span class="badge bg-light text-dark">12.6%</span></span>
                </div>
                <div class="progress" style="height:8px;">
                    <div class="progress-bar bg-dark" style="width:12.6%"></div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
{{-- ekonomi --}}
<div id="ekonomi" class="content-section">

<style>
    .econ-card {
        border: 1px solid #eee;
        border-radius: 16px;
        padding: 24px;
        background: #fff;
    }

    .econ-item {
        border: 1px solid #eee;
        border-radius: 14px;
        padding: 20px;
        text-align: center;
        height: 100%;
    }

    .econ-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 12px;
        color: #fff;
        font-size: 18px;
    }

    .econ-progress {
        height: 6px;
        border-radius: 6px;
        background: #ddd;
        overflow: hidden;
    }

    .econ-progress span {
        display: block;
        height: 100%;
        background: #111827;
    }

    .badge-umkm {
        background: #111827;
        color: #fff;
        border-radius: 20px;
        padding: 4px 10px;
        font-size: 12px;
    }
</style>

<h4 class="fw-bold mb-4">
    <i class="fas fa-briefcase me-2"></i> Sektor Ekonomi
</h4>

<!-- BOX ATAS -->
<div class="econ-card mb-4">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="econ-item">
                <div class="econ-icon bg-success">
                    <i class="fas fa-tree"></i>
                </div>
                <div class="fw-semibold">Pertanian</div>
                <div class="fs-4 fw-bold my-2">45%</div>
                <div class="econ-progress">
                    <span style="width:45%"></span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="econ-item">
                <div class="econ-icon bg-primary">
                    <i class="fas fa-store"></i>
                </div>
                <div class="fw-semibold">Perdagangan</div>
                <div class="fs-4 fw-bold my-2">25%</div>
                <div class="econ-progress">
                    <span style="width:25%"></span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="econ-item">
                <div class="econ-icon bg-danger">
                    <i class="fas fa-industry"></i>
                </div>
                <div class="fw-semibold">Industri Kecil</div>
                <div class="fs-4 fw-bold my-2">15%</div>
                <div class="econ-progress">
                    <span style="width:15%"></span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="econ-item">
                <div class="econ-icon bg-warning">
                    <i class="fas fa-users"></i>
                </div>
                <div class="fw-semibold">Jasa</div>
                <div class="fs-4 fw-bold my-2">10%</div>
                <div class="econ-progress">
                    <span style="width:10%"></span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="econ-item">
                <div class="econ-icon bg-secondary">
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="fw-semibold">Lainnya</div>
                <div class="fs-4 fw-bold my-2">5%</div>
                <div class="econ-progress">
                    <span style="width:5%"></span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- BOX BAWAH -->
<div class="row g-4">

    <!-- POTENSI UNGGULAN -->
    <div class="col-md-6">
        <div class="econ-card h-100">
            <h6 class="fw-bold mb-3">Potensi Unggulan</h6>

            <div class="p-3 rounded mb-3" style="background:#ecfdf5">
                <div class="fw-semibold text-success">Pertanian Organik</div>
                <small>Lahan 1.200 ha dengan produksi padi organik berkualitas tinggi</small>
            </div>

            <div class="p-3 rounded mb-3" style="background:#eff6ff">
                <div class="fw-semibold text-primary">Wisata Alam</div>
                <small>Destinasi pegunungan dan air terjun alami</small>
            </div>

            <div class="p-3 rounded" style="background:#faf5ff">
                <div class="fw-semibold text-purple">Kerajinan Tradisional</div>
                <small>Anyaman bambu dan tenun pasar nasional</small>
            </div>
        </div>
    </div>

    <!-- UMKM -->
    <div class="col-md-6">
        <div class="econ-card h-100">
            <h6 class="fw-bold mb-3">UMKM Terdaftar</h6>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <span>Kuliner & Makanan</span>
                <span class="badge-umkm">89 UMKM</span>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <span>Kerajinan Tangan</span>
                <span class="badge-umkm">56 UMKM</span>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <span>Pertanian & Perkebunan</span>
                <span class="badge-umkm">45 UMKM</span>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <span>Jasa & Perdagangan</span>
                <span class="badge-umkm">44 UMKM</span>
            </div>
        </div>
    </div>

</div>

</div>

{{-- prestasi --}}
<div id="prestasi" class="content-section">

<style>
    .prestasi-card {
        border: 1px solid #eee;
        border-radius: 18px;
        padding: 24px;
        background: #fff;
    }

    .prestasi-item {
        border: 1px solid #eee;
        border-radius: 16px;
        padding: 20px;
        display: flex;
        gap: 16px;
        align-items: center;
        height: 100%;
    }

    .prestasi-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #fef9c3;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ca8a04;
        font-size: 20px;
        flex-shrink: 0;
    }

    .tag {
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 14px;
        background: #f3f4f6;
        display: inline-block;
        margin-right: 6px;
    }

    .sdgs-box {
        padding: 14px 16px;
        border-radius: 12px;
        font-size: 14px;
    }
</style>

<!-- =================== BOX ATAS =================== -->
<h5 class="fw-bold mb-3">
    <i class="fas fa-award me-2"></i> Prestasi & Penghargaan
</h5>

<div class="prestasi-card mb-4">
    <div class="row g-4">

        <div class="col-md-6">
            <div class="prestasi-item">
                <div class="prestasi-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <div>
                    <div class="fw-semibold">Desa Terbaik Tingkat Kabupaten</div>
                    <div class="mt-2">
                        <span class="tag">2023</span>
                        <span class="tag">Pemerintahan</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="prestasi-item">
                <div class="prestasi-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div>
                    <div class="fw-semibold">Juara 1 Lomba Desa Digital</div>
                    <div class="mt-2">
                        <span class="tag">2023</span>
                        <span class="tag">Teknologi</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="prestasi-item">
                <div class="prestasi-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div>
                    <div class="fw-semibold">Penghargaan Desa Sehat</div>
                    <div class="mt-2">
                        <span class="tag">2022</span>
                        <span class="tag">Kesehatan</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="prestasi-item">
                <div class="prestasi-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <div>
                    <div class="fw-semibold">Desa Wisata Terfavorit</div>
                    <div class="mt-2">
                        <span class="tag">2022</span>
                        <span class="tag">Pariwisata</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- =================== BOX BAWAH =================== -->
<h5 class="fw-bold mb-3">
    <i class="fas fa-chart-line me-2"></i> Target & Rencana Pembangunan
</h5>

<div class="prestasi-card">

    <h6 class="fw-semibold mb-3">Rencana Jangka Menengah (2024–2026)</h6>
    <ul class="mb-4">
        <li>Peningkatan cakupan internet 4G menjadi 95%</li>
        <li>Pembangunan pasar tradisional modern</li>
        <li>Pengembangan 3 destinasi wisata baru</li>
        <li>Program pelatihan digital untuk 500 UMKM</li>
    </ul>

    <h6 class="fw-semibold mb-3">Target SDGs Desa</h6>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="sdgs-box" style="background:#eff6ff;color:#1d4ed8">
                Angka stunting di bawah 5% pada 2025
            </div>
        </div>

        <div class="col-md-6">
            <div class="sdgs-box" style="background:#ecfdf5;color:#047857">
                100% akses air bersih pada 2024
            </div>
        </div>

        <div class="col-md-6">
            <div class="sdgs-box" style="background:#faf5ff;color:#7e22ce">
                Peningkatan pendapatan UMKM 25%
            </div>
        </div>

        <div class="col-md-6">
            <div class="sdgs-box" style="background:#fff7ed;color:#c2410c">
                Sertifikasi organik 80% lahan pertanian
            </div>
        </div>
    </div>

</div>

</div>


</div>
{{-- ================================================= --}}

</div>
</div>

</div>
</section>
</div>

{{-- ================= STYLE & SCRIPT ================= --}}
<style>
.content-section { display:none; }
.content-section.active { display:block; }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.querySelectorAll('.nav-btn').forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active','btn-white','text-primary','shadow-sm'));
        this.classList.add('active','btn-white','text-primary','shadow-sm');

        document.querySelectorAll('.content-section').forEach(c => c.classList.remove('active'));
        document.getElementById(this.dataset.target).classList.add('active');
    });
});

new Chart(document.getElementById('grafikPemerintahan'), {
    type: 'line',
    data: {
        labels: ['Pelayanan','Administrasi','Pembangunan','Transparansi','Digitalisasi'],
        datasets: [{
            data: [85,78,90,88,92],
            borderColor: '#0d6efd',
            backgroundColor: 'rgba(13,110,253,0.1)',
            fill: true,
            tension: 0.4
        }]
    },
    options: { plugins:{legend:{display:false}}, scales:{y:{max:100}} }
});
</script>
@endsection
