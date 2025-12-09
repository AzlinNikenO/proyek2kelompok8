<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        // Data statistik desa (bisa kamu ganti jadi data dari Database)
        $stats = [
            'penduduk' => 8456,
            'luas'     => 12.8,
            'kk'       => 2345,
            'idm'      => 0.718
        ];

        // Data tambahan jika ingin ditampilkan dalam tabel
        $detailStats = [
            [
                'kategori'   => 'Total Penduduk',
                'nilai'      => $stats['penduduk'],
                'deskripsi'  => 'Jumlah total penduduk desa berdasarkan data terbaru.'
            ],
            [
                'kategori'   => 'Luas Wilayah',
                'nilai'      => $stats['luas'] . ' km²',
                'deskripsi'  => 'Luas total wilayah desa dalam kilometer persegi.'
            ],
            [
                'kategori'   => 'Jumlah KK',
                'nilai'      => $stats['kk'],
                'deskripsi'  => 'Jumlah Kepala Keluarga (KK) terdaftar.'
            ],
            [
                'kategori'   => 'IDM Score',
                'nilai'      => $stats['idm'],
                'deskripsi'  => 'Indeks Desa Membangun (IDM) sebagai indikator pembangunan.'
            ],
        ];

        return view('statistik', compact('stats', 'detailStats'));
    }
}
