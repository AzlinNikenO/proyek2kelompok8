@extends('adminlayout.main')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Edit Berita</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.berita.update', $berita->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ $berita->judul }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text"
                           name="kategori"
                           class="form-control"
                           value="{{ $berita->kategori }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="isi"
                              rows="6"
                              class="form-control"
                              required>{{ $berita->isi }}</textarea>
                </div>

                @if($berita->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('storage/'.$berita->gambar) }}"
                             width="200"
                             class="rounded mb-2">
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Ganti Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
