<<<<<<< HEAD
@extends('layouts.app')

@section('content')

<div class="container my-4">


    {{-- ================= HEADER ================= --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold">Infografis Desa</h2>
        <p class="text-muted">
            Visualisasi data terkini tentang kependudukan Desa Lohbener
        </p>
    </div>

    {{-- ================= INFO BOX ================= --}}
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-4 h-100">
                <div class="fs-2 text-primary">👥</div>
                <small class="text-muted">Total Penduduk</small>
                <h4 class="fw-bold mt-2">12.567</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-4 h-100">
                <div class="fs-2 text-success">📈</div>
                <small class="text-muted">Pertumbuhan</small>
                <h4 class="fw-bold mt-2">1.8%</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-4 h-100">
                <div class="fs-2 text-purple">🏠</div>
                <small class="text-muted">Jumlah KK</small>
                <h4 class="fw-bold mt-2">3.456</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-4 h-100">
                <div class="fs-2 text-danger">📊</div>
                <small class="text-muted">Kepadatan</small>
                <h4 class="fw-bold mt-2">278 / km²</h4>
            </div>
        </div>
    </div>

    {{-- ================= GRAFIK PERTUMBUHAN ================= --}}
    <div class="card shadow-sm border-0 mb-5">
        <div class="card-body">
            <h5 class="mb-3">Pertumbuhan Penduduk</h5>
            <canvas id="growthChart" height="90"></canvas>
        </div>
    </div>

    {{-- ================= PIRAMIDA PENDUDUK ================= --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="mb-3">Piramida Penduduk Berdasarkan Usia</h5>
            <canvas id="pyramidChart" height="120"></canvas>
        </div>
    </div>

</div>

{{-- ================= CHART.JS ================= --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
/* ===== Line Chart Pertumbuhan ===== */
new Chart(document.getElementById('growthChart'), {
    type: 'line',
    data: {
        labels: ['2019','2020','2021','2022','2023','2024'],
        datasets: [{
            label: 'Jumlah Penduduk',
            data: [10800, 11050, 11300, 11550, 11800, 12050],
            borderColor: '#2563eb',
            backgroundColor: 'rgba(37,99,235,.1)',
            tension: .4,
            fill: true
        }]
    },
    options: {
        plugins: { legend: { display: false } },
        scales: {
            y: { grid: { borderDash: [4,4] } },
            x: { grid: { display: false } }
        }
    }
});

/* ===== Piramida Penduduk ===== */
new Chart(document.getElementById('pyramidChart'), {
    type: 'bar',
    data: {
        labels: ['65+', '55–64', '45–54', '35–44', '25–34', '15–24', '0–14'],
        datasets: [
            {
                label: 'Laki-laki',
                data: [-4, -6, -8, -10, -12, -9, -7],
                backgroundColor: '#3b82f6'
            },
            {
                label: 'Perempuan',
                data: [5, 7, 9, 11, 13, 10, 8],
                backgroundColor: '#ec4899'
            }
        ]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                ticks: {
                    callback: value => Math.abs(value)
                }
            }
        }
    }
});
</script>

@endsection
=======

   @extends('layouts.app') {{-- Asumsikan Anda punya layout utama; jika tidak, hapus ini dan tambahkan <html>, <head>, dll. seperti di beranda --}}

   @section('content')
   {{-- Data statistik (mirip dengan beranda; sebaiknya dipass dari controller) --}}
   @php
   $stats = [
       'penduduk' => '8,456',
       'luas' => '12.8 km²',
       'kk' => '2,345',
       'idm' => '0.718'
   ];
   @endphp

<header class="hero mt-5 pt-4">
  <div class="container d-flex flex-column flex-lg-row align-items-center gap-4">
    <div class="text-white flex-grow-1">
      <h1>Data Statistik <span class="text-warning"><?php echo $desa['nama']; ?></span></h1>
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
         <div class="fs-4 fw-bold">{{ $stats['penduduk'] }}</div>
       </div>
     </div>
     <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
       <svg fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5c0-3 3-6 5.5-6s4.5 1.5 4.5 1.5S14.76 3 16.5 3c3 0 5.5 2.42 5.5 5.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
       <div>
         <small class="text-muted">Luas Wilayah</small>
         <div class="fs-4 fw-bold">{{ $stats['luas'] }}</div>
       </div>
     </div>
     <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
       <svg fill="none" stroke="#9333ea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3h-8v4h8z"/></svg>
       <div>
         <small class="text-muted">Jumlah KK</small>
         <div class="fs-4 fw-bold">{{ $stats['kk'] }}</div>
       </div>
     </div>
     <div class="stat-card d-flex align-items-center gap-3 flex-fill" style="min-width:170px; max-width:220px;">
       <svg fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="36" width="36" viewBox="0 0 24 24" aria-hidden="true"><polyline points="3 17 9 11 13 15 21 7"/></svg>
       <div>
         <small class="text-muted">IDM Score</small>
         <div class="fs-4 fw-bold">{{ $stats['idm'] }}</div>
       </div>
     </div>
   </div>

   {{-- Tabel Detail Statistik (Penambahan baru untuk halaman ini) --}}
   <section class="container mb-5">
     <h2 class="text-center mb-4">Detail Statistik Desa</h2>
     <table class="table table-striped table-bordered">
       <thead class="table-dark">
         <tr>
           <th>Kategori</th>
           <th>Nilai</th>
           <th>Deskripsi</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>Total Penduduk</td>
           <td>{{ $stats['penduduk'] }}</td>
           <td>Jumlah total penduduk desa berdasarkan data terbaru.</td>
         </tr>
         <tr>
           <td>Luas Wilayah</td>
           <td>{{ $stats['luas'] }}</td>
           <td>Luas total wilayah desa dalam kilometer persegi.</td>
         </tr>
         <tr>
           <td>Jumlah KK</td>
           <td>{{ $stats['kk'] }}</td>
           <td>Jumlah Kepala Keluarga (KK) terdaftar.</td>
         </tr>
         <tr>
           <td>IDM Score</td>
           <td>{{ $stats['idm'] }}</td>
           <td>Indeks Desa Membangun (IDM) sebagai indikator pembangunan.</td>
         </tr>
       </tbody>
     </table>
     {{-- Placeholder untuk grafik (opsional: gunakan Chart.js jika diperlukan) --}}
     <div class="mt-4">
       <h5>Grafik Statistik (Placeholder)</h5>
       <canvas id="statsChart" width="400" height="200"></canvas>
       <p class="text-muted">Grafik akan ditampilkan di sini jika data dinamis ditambahkan.</p>
     </div>
   </section>

   {{-- Script untuk Bootstrap --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   {{-- Script untuk Chart.js (opsional) --}}
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>
     // Contoh script untuk grafik (jika diperlukan)
     const ctx = document.getElementById('statsChart').getContext('2d');
     new Chart(ctx, {
       type: 'bar',
       data: {
         labels: ['Penduduk', 'Luas', 'KK', 'IDM'],
         datasets: [{
           label: 'Statistik Desa',
           data: [8456, 12.8, 2345, 0.718], // Data statis; ganti dengan dinamis jika perlu
           backgroundColor: ['#2563eb', '#16a34a', '#9333ea', '#ef4444']
         }]
       }
     });
   </script>
   @endsection
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
