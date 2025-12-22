@extends('adminlayout.main')

@section('title', 'Detail Pengajuan')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detail Pengajuan</h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr><th>Nama</th><td>{{ $pengajuan->user->name }}</td></tr>
            <tr><th>NIK</th><td>{{ $pengajuan->user->nik }}</td></tr>
            <tr><th>No KK</th><td>{{ $pengajuan->user->nokk }}</td></tr>
            <tr><th>Alamat</th><td>{{ $pengajuan->user->alamat }}</td></tr>
            <tr><th>Status</th><td>{{ ucfirst($pengajuan->status) }}</td></tr>
        </table>

        <form method="POST" action="{{ route('admin.pengajuan.updateStatus', $pengajuan->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="menunggu">Menunggu</option>
                    <option value="diproses">Diproses</option>
                    <option value="ditolak">Ditolak</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Catatan Admin</label>
                <textarea name="catatan_admin" class="form-control"></textarea>
            </div>

            <button class="btn btn-success">Update Status</button>
        </form>
    </div>
</div>
@endsection
