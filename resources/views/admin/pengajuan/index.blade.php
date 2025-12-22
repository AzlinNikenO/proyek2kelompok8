@extends('adminlayout.main')

@section('title', 'Pengajuan ' . strtoupper($jenis))

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Daftar Pengajuan {{ strtoupper($jenis) }}
        </h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemohon</th>
                    <th>NIK</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengajuans as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $p->user->name }}</td>
                    <td>{{ $p->user->nik }}</td>

                    <td>
                        <span class="badge badge-info">
                            {{ ucfirst($p->status) }}
                        </span>
                    </td>
                    <td>{{ $p->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('admin.pengajuan.detail', $p->id) }}"
                        class="btn btn-sm btn-primary">
                        Detail
                        </a>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">
                        Tidak ada pengajuan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
