@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <!-- HEADER -->
    <section class="content-header">
        <div class="container-fluid">
            <h1>Pengajuan Kartu Identitas Anak (KIA)</h1>
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

        <!-- INFORMASI KIA -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Informasi Kartu Identitas Anak (KIA)</h3>
            </div>
            <div class="card-body">

                <p>
                    <strong>Kartu Identitas Anak (KIA)</strong> diterbitkan bagi anak WNI, OA, atau anak berkewarganegaraan ganda
                    yang berusia <strong>di bawah 17 tahun dan belum pernah menikah</strong>.
                </p>

                <ul>
                    <li>Masa berlaku usia &lt; 5 tahun: sampai usia 5 tahun</li>
                    <li>Masa berlaku usia &gt; 5 tahun: sampai usia 17 tahun kurang 1 hari</li>
                </ul>

                <hr>

                <h6><strong>Jenis Penerbitan KIA:</strong></h6>
                <ol>
                    <li>KIA Baru</li>
                    <li>Habis Masa Berlaku</li>
                    <li>Pindah Datang</li>
                    <li>Hilang / Rusak</li>
                </ol>

                <p class="text-muted mt-2">
                    Anak yang belum memiliki NIK dan/atau Akta Kelahiran akan diproses bersamaan
                    dengan penerbitan NIK, KK, dan Akta Kelahiran.
                </p>

            </div>
        </div>

        <!-- FORM PENGAJUAN KIA -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pengajuan KIA</h3>
            </div>

            <form action="{{ route('kia.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">

                    <!-- DATA ANAK -->
                    <h6 class="text-primary"><strong>Data Anak</strong></h6>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap Anak</label>
                                <input type="text" name="nama_anak" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK Anak (jika ada)</label>
                                <input type="text" name="nik_anak" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <hr>

                    <!-- DATA ORANG TUA -->
                    <h6 class="text-primary"><strong>Data Orang Tua / Wali</strong></h6>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Orang Tua / Wali</label>
                                <input type="text" name="nama_ortu" class="form-control"
                                       value="{{ auth()->user()->name }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK Orang Tua / Wali</label>
                                <input type="text" name="nik_ortu" class="form-control"
                                       value="{{ auth()->user()->nik }}" required>
                            </div>
                        </div>

                    </div>

                    <hr>

                    <!-- JENIS PENGAJUAN -->
                    <div class="form-group">
                        <label>Jenis Penerbitan KIA</label>
                        <select name="jenis_pengajuan" class="form-control" required>
                            <option value="">-- Pilih Jenis --</option>
                            <option value="baru">KIA Baru</option>
                            <option value="habis_masa_berlaku">Habis Masa Berlaku</option>
                            <option value="pindah_datang">Pindah Datang</option>
                            <option value="hilang_rusak">Hilang / Rusak</option>
                        </select>
                    </div>

                    <!-- UPLOAD BERKAS -->
                    <div class="form-group">
                        <label>Upload Dokumen Pendukung</label>
                        <input type="file" name="berkas" class="form-control-file" required>
                        <small class="text-muted">
                            Akta Kelahiran / KK / Surat Pindah (PDF/JPG/PNG)
                        </small>
                    </div>

                </div>

                <!-- SUBMIT -->
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Ajukan KIA
                    </button>
                </div>

            </form>
        </div>

    </div>
    </section>
</div>
@endsection
