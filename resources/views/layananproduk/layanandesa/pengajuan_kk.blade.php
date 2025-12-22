@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <!-- HEADER -->
    <section class="content-header">
        <div class="container-fluid">
            <h1>Pengajuan Kartu Keluarga (KK)</h1>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="content">
    <div class="container-fluid">

        {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- INFORMASI KK -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Informasi Layanan Kartu Keluarga</h3>
            </div>
            <div class="card-body">

                <p><strong>Kartu Keluarga</strong> adalah Kartu Identitas Keluarga yang memuat data susunan, hubungan, dan jumlah anggota keluarga. KK wajib dimiliki oleh setiap keluarga.</p>

                <ul>
                    <li><strong>Tempat Pelayanan:</strong> Service Poin Dukcapil Kelurahan atau layanan online Alpukat Betawi</li>
                    <li><strong>Tarif:</strong> Gratis</li>
                </ul>

                <hr>

                <h6><strong>Jenis Penerbitan KK:</strong></h6>
                <ol>
                    <li><strong>KK Baru</strong> (keluarga baru, ganti KK, pisah KK, pindah datang, dll)</li>
                    <li><strong>Perubahan Data</strong> (kelahiran, kematian, perkawinan, perubahan biodata, dll)</li>
                    <li><strong>Hilang / Rusak</strong></li>
                </ol>

                <h6><strong>Catatan:</strong></h6>
                <p>
                    Persyaratan dan proses penerbitan KK dilakukan bersamaan dengan penerbitan KTP-el.
                </p>

                <button class="btn btn-primary mt-3"
            onclick="document.getElementById('formPengajuan').style.display='block'">
            <i class="fas fa-paper-plane me-1"></i>
            Ajukan Pembuatan KTP
        </button>

            </div>
        </div>

        <!-- FORM PENGAJUAN -->
        <div class="card mt-4" id="formPengajuan" style="display:none">
    <div class="card-header bg-light">
        <h5 class="card-title mb-0">
            <i class="fas fa-edit me-2"></i>
            Form Pengajuan Kartu Keluarga
        </h5>
    </div>

    <input type="hidden" name="jenis_layanan" value="kk">

        @csrf

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
@endsection
