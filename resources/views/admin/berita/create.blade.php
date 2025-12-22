@extends('adminlayout.main')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Tambah Berita</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="isi" rows="6" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
