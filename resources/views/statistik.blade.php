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
