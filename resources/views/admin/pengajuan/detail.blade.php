@extends('adminlayout.main')

@section('title', 'Detail Pengajuan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail Pengajuan</h3>
    </div>

    <div class="card-body">
        <p><strong>Nama:</strong> {{ $pengajuan->nama }}</p>
        <p><strong>NIK:</strong> {{ $pengajuan->nik }}</p>
        <p><strong>Jenis:</strong> {{ strtoupper($pengajuan->jenis_pengajuan) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($pengajuan->status) }}</p>

        <form method="POST"
              action="{{ route('admin.pengajuan.updateStatus', $pengajuan->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Ubah Status</label>
                <select name="status" class="form-control">
                    <option value="menunggu">Menunggu</option>
                    <option value="diproses">Diproses</option>
                    <option value="ditolak">Ditolak</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>

            <button class="btn btn-success mt-2">Update</button>
        </form>
    </div>
</div>
@endsection
