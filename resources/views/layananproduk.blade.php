@extends('layouts.app')
@section('content')

<style>
    .hero-card img { height: 260px; object-fit: cover; }
    .service-card img { height: 180px; object-fit: cover; }
    .tab-active { background: #2563eb; color: white; }
</style>

<div class="w-full bg-white py-10">
    <h1 class="text-3xl font-bold text-center">Layanan dan Produk Desa</h1>
    <p class="text-center text-gray-600 mt-2">Layanan pengurusan dokumen dan surat menyurat untuk kebutuhan masyarakat desa</p>

    <!-- HEADER IMAGE SECTION -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">

        <!-- HERO LEFT -->
        <div class="lg:col-span-2 bg-white shadow rounded-xl overflow-hidden hero-card">
            <img src="https://images.pexels.com/photos/3782239/pexels-photo-3782239.jpeg" class="w-full">
            <div class="p-6">
                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Layanan Utama</span>
                <h2 class="text-xl font-bold mt-3 leading-tight">Pengurusan Dokumen Kependudukan: KTP, KK, dan Surat Keterangan</h2>
                <p class="mt-2 text-gray-600">Layanan prioritas desa untuk membantu masyarakat dalam pengurusan dokumen administrasi dengan cepat dan mudah.</p>
                <a href="#" class="inline-block mt-4 text-blue-600 font-semibold">Ajukan Layanan →</a>
            </div>
        </div>

        <!-- SIDEBAR KATEGORI -->
        <div class="bg-white shadow rounded-xl p-6 h-max">
            <h3 class="font-bold mb-4">Kategori Layanan</h3>

            @php
                $kategori = [
                    ['nama'=>'Semua','jumlah'=>12],
                    ['nama'=>'Identitas Penduduk','jumlah'=>4],
                    ['nama'=>'Keterangan Surat','jumlah'=>5],
                    ['nama'=>'Pertanahan','jumlah'=>2],
                    ['nama'=>'Usaha & Ekonomi','jumlah'=>1],
                ];
            @endphp

            <div class="space-y-2 text-sm">
                @foreach($kategori as $k)
                <div class="flex justify-between p-2 rounded-lg hover:bg-gray-100 cursor-pointer {{ $loop->first ? 'bg-blue-50 text-blue-600' : '' }}">
                    <span>{{ $k['nama'] }}</span>
                    <span>{{ $k['jumlah'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SEARCH BAR -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-10">
        <input type="text" placeholder="Cari layanan..." class="border rounded-xl p-3 w-full">
        <select class="border rounded-xl p-3 w-full lg:col-span-1">
            <option>Semua Layanan</option>
        </select>
    </div>

    <!-- LIST LAYANAN -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">

        @php
            $layanan = [
                ['img'=>'https://images.pexels.com/photos/532792/pexels-photo-532792.jpeg','kategori'=>'Identitas Penduduk','judul'=>'Pembuatan KTP (Kartu Tanda Penduduk)','deskripsi'=>'Layanan untuk penerbitan KTP baru atau perubahan data.','views'=>1223],
                ['img'=>'https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg','kategori'=>'Identitas Penduduk','judul'=>'Pembuatan Kartu Keluarga (KK)','deskripsi'=>'Pengurusan KK bagi keluarga baru maupun perubahan data anggota keluarga.','views'=>987],
                ['img'=>'https://images.pexels.com/photos/3183186/pexels-photo-3183186.jpeg','kategori'=>'Keterangan Surat','judul'=>'Surat Keterangan Domisili','deskripsi'=>'Layanan penerbitan surat domisili untuk berbagai keperluan administratif.','views'=>756],
                ['img'=>'https://images.pexels.com/photos/4391470/pexels-photo-4391470.jpeg','kategori'=>'Keterangan Surat','judul'=>'Surat Keterangan Tidak Mampu (SKTM)','deskripsi'=>'Layanan pengajuan SKTM untuk pendidikan, kesehatan, dan bantuan sosial.','views'=>843],
                ['img'=>'https://images.pexels.com/photos/4246120/pexels-photo-4246120.jpeg','kategori'=>'Usaha & Ekonomi','judul'=>'Surat Keterangan Usaha (SKU)','deskripsi'=>'Dokumen resmi untuk keperluan legalitas usaha masyarakat.','views'=>665],
                ['img'=>'https://images.pexels.com/photos/753626/pexels-photo-753626.jpeg','kategori'=>'Pertanahan','judul'=>'Surat Keterangan Kepemilikan Tanah','deskripsi'=>'Layanan validasi dan penerbitan surat terkait status lahan.','views'=>512],
            ];
        @endphp

        @foreach($layanan as $l)
        <div class="bg-white shadow rounded-xl overflow-hidden service-card">
            <img src="{{ $l['img'] }}" class="w-full">
            <div class="p-5">
                <span class="text-sm text-blue-600 bg-blue-100 px-3 py-1 rounded-full">{{ $l['kategori'] }}</span>
                <h3 class="font-bold text-lg mt-3 leading-tight">{{ $l['judul'] }}</h3>
                <p class="text-gray-600 mt-2 text-sm">{{ $l['deskripsi'] }}</p>

                <div class="flex justify-between items-center text-gray-500 text-sm mt-3">
                    <span><i class="fa fa-eye mr-1"></i> {{ $l['views'] }}</span>
                </div>

                <a href="#" class="inline-block mt-4 text-blue-600 font-semibold">Ajukan Layanan →</a>
            </div>
        </div>
        @endforeach

    </div>

    <!-- BUTTON -->
    <div class="text-center mt-10">
        <button class="px-6 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg">Tampilkan Lebih Banyak</button>
    </div>
</div>

@endsection
