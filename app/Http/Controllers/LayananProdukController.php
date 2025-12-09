<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananProdukController extends Controller
{
    public function index()
    {
        $kategori = [
            ['nama'=>'Semua','jumlah'=>12],
            ['nama'=>'Identitas Penduduk','jumlah'=>4],
            ['nama'=>'Keterangan Surat','jumlah'=>5],
            ['nama'=>'Pertanahan','jumlah'=>2],
            ['nama'=>'Usaha & Ekonomi','jumlah'=>1],
        ];

        $layanan = [
            [
                'img'=>'/img/ktp.jpg',
                'kategori'=>'Identitas Penduduk',
                'judul'=>'Pembuatan KTP (Kartu Tanda Penduduk)',
                'deskripsi'=>'Layanan pembuatan dan pembaruan KTP.',
                'views'=>1223
            ],
            [
                'img'=>'/img/kk.jpg',
                'kategori'=>'Identitas Penduduk',
                'judul'=>'Pembuatan Kartu Keluarga (KK)',
                'deskripsi'=>'Layanan perubahaan atau pembuatan KK baru.',
                'views'=>987
            ],
            [
                'img'=>'/img/surat-domisili.jpg',
                'kategori'=>'Keterangan Surat',
                'judul'=>'Surat Keterangan Domisili',
                'deskripsi'=>'Untuk keperluan sekolah, kerja, atau administrasi.',
                'views'=>756
            ],
            // Tambah sesuai kebutuhan
        ];

        return view('layananproduk', compact('kategori', 'layanan'));
    }
}
