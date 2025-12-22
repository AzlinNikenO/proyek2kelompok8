@extends('adminlayout.main')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Berita Desa</h1>

    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">
        + Tambah Berita
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($beritas as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->judul }}</td>
                        <td>{{ $b->kategori }}</td>
                        <td>{{ $b->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('admin.berita.edit', $b->id) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.berita.destroy', $b->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin hapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Belum ada berita
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
