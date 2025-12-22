@extends('layouts.app')
<<<<<<< HEAD

@section('content')

<div style="max-width:1200px;margin:40px auto;padding:20px;">
    <br>
    <div style="text-align:center;margin-bottom:30px;">
        <h1 style="font-size:32px;font-weight:bold;">
            Sejarah Desa Lohbener
        </h1>
        <h3 style="font-size:14px;color:#666;margin-top:8px;">
            Kilas balik perjalanan dan perkembangan Desa Lohbener dari masa ke masa
        </h3>
    </div>

    <div style="
        background:#ffffff;
        padding:50px;
        border-radius:10px;
        box-shadow:0 6px 15px rgba(0,0,0,0.15);
        text-align:justify;
        line-height:1.7;
    ">

        <p>
            Desa Lohbener merupakan salah satu desa yang terletak di Kecamatan Lohbener,
            Kabupaten Indramayu, Provinsi Jawa Barat.
            <br>
            Sejarah Desa Lohbener erat kaitannya dengan legenda Prabu Geusan Ulun (Pangeran Angkawijaya) dari
            Kerajaan Sumedang Larang yang bertempur dan kalah di wilayah Lohbener (tepatnya di lokasi yang kini menjadi Desa Legok),
            meninggalkan situs petilasan penting di sana, menandakan jejak sejarah kuno terkait perkembangan wilayah Indramayu,
            di mana Lohbener menjadi bagian dari koridor ekonomi penting Jalur Pantura
            dan dikenal sebagai daerah agraris penghasil beras.
        </p>

        <b>Legenda dan Perkembangan Awal</b>

        <ul style="padding-left:100px; margin-top:10px;">
            <li>
                <b>Pertempuran Legok: </b> Konon, Prabu Geusan Ulun melakukan perjalanan ke Dermayu (Indramayu)
                dan dihadang di tanggul Sungai Cimanuk.
                Pertempuran terjadi, dan kekalahannya meninggalkan lokasi yang sekarang dikenal sebagai Desa Legok,
                yang terletak di dalam Kecamatan Lohbener.
            </li>
            <li>
                <b>Situs Sejarah: </b>Di Desa Legok L ohbener, terdapat situs makam petilasan
                Prabu Geusan Ulun, yang menjadi bukti sejarah penting terkait wilayah Kerajaan Sumedang Larang.
            </li>
        </ul>

        <b>Karakteristik Desa Lohbener</b>

        <ul style="padding-left:100px; margin-top:10px;">
            <li>
                <b>Lokasi Strategis:</b> Desa Lohbener berada di Kecamatan Lohbener, Kabupaten Indramayu, Jawa Barat,
                sebuah area yang dilintasi jalur Pantura yang padat,
                menjadikannya koridor transportasi dan ekonomi penting.
            </li>
            <li>
                <b>Pusat Pertanian:</b> Desa-desa di sekitar Lohbener, seperti Desa Larangan,
                dikenal sebagai penghasil beras untuk memenuhi kebutuhan masyarakat Indramayu,
                menunjukkan ketergantungan ekonomi pada sektor pertanian.
        </ul>

        <b>Inti Sejarah</b>
        <p>
            Sejarah Desa Lohbener bukan hanya tentang nama administratif,
            tetapi juga tentang jejak legenda tokoh besar seperti Prabu Geusan Ulun dan perannya dalam peta sejarah awal Indramayu,
            serta perkembangan wilayahnya yang terintegrasi dengan jalur perdagangan dan pertanian di Jawa Barat.
        </p>

    </div>

</div>

=======
{{-- Anggap ada layout utama yang digunakan --}}

@section('content')
<div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    {{-- Header/Navbar Atas --}}
    <header class="bg-white shadow-lg border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-10v10a1 1 0 001 1h3m-3-10l-7-7-7 7m12-7V4a1 1 0 00-1-1h-2a1 1 0 00-1 1v3m-2 7h2m-2 0h2"></path>
                </svg>
                <div>
                    <span class="text-xl font-bold text-gray-800">Desa Duko</span>
                    <span class="block text-sm text-gray-500">Kec. Rubaru, Kab. Sumenep</span>
                </div>
            </div>
            {{-- Mobile Menu Button --}}
            <button class="md:hidden p-2 rounded-md text-gray-600 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500" onclick="toggleMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        {{-- Judul Halaman --}}
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Bank Data Desa</h1>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Pusat data dan laporan umum yang dapat diakses masyarakat untuk transparansi dan akuntabilitas pemerintahan desa</p>
        </div>

        {{-- BARIS PERTAMA: 4 Kolom (Data Statistik) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            {{-- Kolom 1: Laporan Keuangan Desa --}}
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300 transform">
                <div class="flex items-start justify-between">
                    <div class="p-3 rounded-full bg-blue-200">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6m4 0a2 2 0 002 2h2a2 2 0 002-2M9 19V7a2 2 0 012-2h2a2 2 0 012 2v12m-4 0a2 2 0 002 2h2a2 2 0 002-2"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-gray-700">Laporan Keuangan Desa</h3>
                <p class="text-4xl font-bold text-gray-900 mt-2">12</p>
                <p class="text-sm text-gray-500">Dokumen tersedia</p>
                <button class="mt-4 w-full py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">Lihat Dokumen</button>
            </div>

            {{-- Kolom 2: Data Kependudukan --}}
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300 transform">
                <div class="flex items-start justify-between">
                    <div class="p-3 rounded-full bg-green-200">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2a3 3 0 015.356-1.857M7 20h10m0 0H7"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a4 4 0 11-8 0 4 4 0 018 0zm-8 7h2m-2 0h2"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-gray-700">Data Kependudukan</h3>
                <p class="text-4xl font-bold text-gray-900 mt-2">8</p>
                <p class="text-sm text-gray-500">Dokumen tersedia</p>
                <button class="mt-4 w-full py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition">Lihat Dokumen</button>
            </div>

            {{-- Kolom 3: Dokumen Perencanaan (Diperbaiki & Dilengkapi) --}}
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300 transform">
                <div class="flex items-start justify-between">
                    <div class="p-3 rounded-full bg-purple-200">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-gray-700">Dokumen Perencanaan</h3>
                <p class="text-4xl font-bold text-gray-900 mt-2">10</p>
                <p class="text-sm text-gray-500">Dokumen tersedia</p>
                <button class="mt-4 w-full py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg transition">Lihat Dokumen</button>
            </div>

            {{-- Kolom 4: Laporan Pembangunan --}}
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300 transform">
                <div class="flex items-start justify-between">
                    <div class="p-3 rounded-full bg-orange-200">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-gray-700">Laporan Pembangunan</h3>
                <p class="text-4xl font-bold text-gray-900 mt-2">6</p>
                <p class="text-sm text-gray-500">Dokumen tersedia</p>
                <button class="mt-4 w-full py-2 bg-orange-600 hover:bg-orange-700 text-white rounded-lg transition">Lihat Dokumen</button>
            </div>
        </div>

        {{-- BARIS KEDUA: 1 Kolom (Laporan dan Dokumen Publik) --}}
        <div class="bg-white p-6 rounded-xl shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Laporan dan Dokumen Publik
            </h2>
            <p class="text-gray-600 mb-4">Akses berbagai laporan dan dokumen publik untuk transparansi. Klik tombol "Unduh" untuk mengunduh file.</p>
            {{-- Tabel Interaktif dengan Data Dummy --}}
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama Dokumen</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Kategori</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Tanggal Upload</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Data Dummy; Ganti dengan @foreach dari database --}}
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-300 px-4 py-2">Laporan Keuangan 2023</td>
                            <td class="border border-gray-300 px-4 py-2">Keuangan</td>
                            <td class="border border-gray-300 px-4 py-2">15 Jan 2024</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded transition">Unduh</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-300 px-4 py-2">Data Penduduk Desa</td>
                            <td class="border border-gray-300 px-4 py-2">Kependudukan</td>
                            <td class="border border-gray-300 px-4 py-2">20 Feb 2024</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded transition">Unduh</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-300 px-4 py-2">Rencana Pembangunan 2024</td>
                            <td class="border border-gray-300 px-4 py-2">Perencanaan</td>
                            <td class="border border-gray-300 px-4 py-2">10 Mar 2024</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded transition">Unduh</button>
                            </td>
                        </tr>
                        {{-- Tambahkan lebih banyak baris jika diperlukan --}}
                    </tbody>
                </table>
            </div>
            <div class="mt-6 text-center">
                <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-lg font-semibold transition shadow-lg">Muat Lebih Banyak</button>
            </div>
        </div>
    </main>

    {{-- Footer Bawah --}}
    <footer class="bg-gray-800 text-white mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">
            {{-- Kolom 1: Kontak Desa --}}
            <div>
                <h4 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Kontak Desa</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mr-2 mt-1 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        Kantor Desa Duko, Kecamatan Rubaru, Kabupaten Sumenep, Kode Pos: 69453
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74A1 1 0 0118 16.847V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        (0328) 123 4567
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        desa.duko@sumenepkab.go.id
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        Senin - Jumat: 08:00 - 14:00
                    </li>
                </ul>
            </div>

            {{-- Kolom 2: Media Sosial (Kode yang terulang dihapus) --}}
            <div>
                <h4 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Media Sosial</h4>
                <div class="flex space-x-3 mb-4">
                    <a href="#" class="p-2 rounded-full bg-gray-700 hover:bg-blue-600 hover:scale-110 transition duration-200" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 2h-3.984c-2.825 0-4.016 1.76-4.016 3.996v2.004H6v4h4v10h4V12h3l1-4h-4V6c0-1.333.667-2 2-2h2V2z"/>
                        </svg>
                    </a>
                    <a href="#" class="p-2 rounded-full bg-gray-700 hover:bg-black hover:scale-110 transition duration-200" aria-label="X (Twitter)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.954 4.569a10 10 0 01-2.825.775 5 5 0 002.163-2.723 10.05 10.05 0 01-3.141 1.205 5.003 5.003 0 00-8.54 4.542 14.043 14.043 0 01-10.29-5.228 5.003 5.003 0 001.566 6.621 4.982 4.982 0 01-2.296-.64v.064a5.003 5.003 0 004.01 4.918 5 5 0 01-2.234.08 5.008 5.008 0 004.662 3.447 10.057 10.057 0 01-6.101 2.102c-.39-.023-.778-.046-1.17-.074A14.02 14.02 0 0015.356 22c6.452 0 9.988-5.321 9.988-9.988 0-.15-.003-.3-.007-.45a7.03 7.03 0 002.163-2.257z"/>
                        </svg>
                    </a>
                    <a href="#" class="p-2 rounded-full bg-gray-700 hover:bg-pink-600 hover:scale-110 transition duration-200" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="p-2 rounded-full bg-gray-700 hover:bg-red-600 hover:scale-110 transition duration-200" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
                <div class="space-y-1 text-sm text-gray-300">
                    <p>Hari ini: <span class="font-bold float-right">1.156</span></p>
                    <p>Bulan ini: <span class="font-bold float-right">34.567</span></p>
                    <p>Total: <span class="font-bold float-right">287.456</span></p>
                </div>
            </div>

            {{-- Kolom 3: Jelajahi --}}
            <div>
                <h4 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Jelajahi</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>Kementerian PDTT</li>
                    <li>Kabupaten Sumenep</li>
                    <li>Provinsi Jawa Timur</li>
                    <li>DIGIDES Platform</li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="#" class="hover:text-blue-400 transition">Galeri Desa</a>
                    </li>
                </ul>
                <button class="mt-4 w-full py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-sm font-semibold transition shadow-lg">
                    Lihat Galeri Lengkap
                </button>
            </div>

            {{-- Kolom 4: Pengaduan --}}
            <div>
                <h4 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Pengaduan</h4>
                <form class="space-y-3" action="{{ route('submit-pengaduan') }}" method="POST">
                    @csrf
                    <input type="text" name="nama" placeholder="Nama Anda" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:border-blue-500 focus:ring-blue-500 text-sm" required>
                    <input type="email" name="email" placeholder="Email" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:border-blue-500 focus:ring-blue-500 text-sm" required>
                    <textarea name="pesan" placeholder="Pesan pengaduan..." rows="3" class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:border-blue-500 focus:ring-blue-500 text-sm" required></textarea>
                    <button type="submit" class="w-full py-2 bg-red-600 hover:bg-red-700 rounded-lg text-sm font-semibold transition shadow-lg">
                        Kirim Pengaduan
                    </button>
                </form>
                <button class="mt-4 w-full py-2 bg-gray-600 hover:bg-gray-700 rounded-lg text-sm font-semibold flex justify-center items-center space-x-2 transition shadow-lg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101M16.172 10.172l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                    <span>Aksesibilitas</span>
                </button>
            </div>
        </div>

        {{-- Copyright Bar --}}
        <div class="border-t border-gray-700 pt-5 mt-5 text-center text-xs text-gray-500">
            &copy; 2024 Desa Duko. Hak Cipta Dilindungi. Sistem Informasi Desa (DIGIDES).
        </div>
    </footer>

    {{-- Script untuk Toggle Menu Mobile --}}
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</div>
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
@endsection
