@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
        <h1 class="fw-bold">Pengajuan KTP Elektronik</h1>
    </div>
</section>

<section class="content">
<div class="container-fluid">
<br>
{{-- ================= INFORMASI LAYANAN ================= --}}
<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0">
            <i class="fas fa-id-card me-2"></i>
            Informasi Layanan KTP-el
        </h5>
    </div>

    <div class="card-body">
        <p>
            <strong>Kartu Tanda Penduduk Elektronik (E-KTP)</strong> adalah identitas resmi
            penduduk yang wajib dimiliki oleh WNI berusia 17 tahun atau sudah menikah.
        </p>

        <p>
            KTP berbasis NIK ini diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil
            dengan sistem pengamanan khusus dan berlaku secara nasional.
        </p>

        <table class="table table-sm table-bordered w-75">
            <tr>
                <th width="30%">Lokasi Pelayanan</th>
                <td>Service Point Dukcapil Kelurahan / Online</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td><span class="badge bg-success">Gratis</span></td>
            </tr>
            <tr>
                <th>Waktu Proses</th>
                <td>Maksimal 14 hari kerja</td>
            </tr>
        </table>

        <hr>

        <h6 class="fw-bold">Persyaratan Pembuatan KTP-el Baru</h6>
        <ul class="small">
            <li>Fotokopi Kartu Keluarga</li>
            <li>Surat Nikah (jika di bawah 17 tahun)</li>
            <li>Dokumen pendukung perubahan biodata (jika ada)</li>
            <li>Surat kehilangan (jika KTP hilang)</li>
        </ul>

        <button class="btn btn-primary mt-3"
            onclick="document.getElementById('formPengajuan').style.display='block'">
            <i class="fas fa-paper-plane me-1"></i>
            Ajukan Pembuatan KTP
        </button>
    </div>
</div>

{{-- ================= FORM PENGAJUAN ================= --}}
<div class="card mt-4" id="formPengajuan" style="display:none">
    <div class="card-header bg-light">
        <h5 class="card-title mb-0">
            <i class="fas fa-edit me-2"></i>
            Form Pengajuan KTP-el
        </h5>
    </div>

        <form method="POST" action="{{ route('pengajuan.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="jenis_layanan" value="ktp">
        


        <div class="card-body">
        <div class="row">

            {{-- DATA USER OTOMATIS --}}
        <div class="row">

            <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
            </div>

            <div class="col-md-6">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" value="{{ Auth::user()->nik }}" readonly>
            </div>

            <div class="col-md-6 mt-3">
                <label class="form-label">No. KK</label>
                <input type="text" class="form-control" value="{{ Auth::user()->nokk }}" readonly>
            </div>

            <div class="col-md-6 mt-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
            </div>

            <div class="col-md-6 mt-3">
                <label class="form-label">Tempat / Tanggal Lahir</label>
                <input type="text" class="form-control" value="{{ Auth::user()->ttl }}" readonly>
            </div>

            <div class="col-md-6 mt-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control"
                    value="{{ Auth::user()->jk == 'Lainnya' ? Auth::user()->jk_lainnya : Auth::user()->jk }}"
                    readonly>
            </div>

            <div class="col-md-12 mt-3">
                <label class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" rows="2" readonly>{{ Auth::user()->alamat }}</textarea>
            </div>

        </div>


            {{-- DATA TAMBAHAN --}}
            <div class="col-md-6 mt-3">
                <label class="form-label">Jenis Pengajuan</label>
                <select name="jenis_pengajuan" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="baru">KTP Baru</option>
                    <option value="perubahan">Perubahan Biodata</option>
                    <option value="hilang">Hilang</option>
                    <option value="rusak">Rusak</option>
                </select>
            </div>

            <div class="col-md-6 mt-3">
                <label class="form-label">Upload Berkas (PDF/JPG)</label>
                <input type="file" name="berkas" class="form-control" required>
            </div>

            <div class="col-md-12 mt-3">
                <label class="form-label">Keterangan Tambahan</label>
                <textarea name="keterangan" class="form-control" rows="3"></textarea>
            </div>

        </div>
        </div>

        <div class="card-footer text-end">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-check-circle me-1"></i>
                Kirim Pengajuan
            </button>
        </div>
    </form>
</div>

</div>
</section>
</div>
<br>
@endsection
