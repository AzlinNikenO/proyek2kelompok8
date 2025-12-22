<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilPemerintahanController extends Controller
{
    public function index()
    {
        $struktur = [
            [
                'nama' => 'Budi Santoso, S.Sos',
                'jabatan' => 'Kepala Desa',
                'foto' => '/img/kepala-desa.jpg',
                'periode' => '2019-2025'
            ],
            [
                'nama' => 'Siti Nurhaliza, S.AP',
                'jabatan' => 'Sekretaris Desa',
                'foto' => '/img/sekdes.jpg',
                'periode' => '2020-2026'
            ],
            // Tambah lainnya sesuai kebutuhan
        ];

        $desa = [
            'nama' => 'Desa Duko',
            'kecamatan' => 'Duko',
            'kabupaten' => 'Sumenep',
            'provinsi' => 'Jawa Timur',
            'kodepos' => '69463',
            'telepon' => '0812-3456-7890',
            'email' => 'kantordesa@desa.go.id',
            'jam' => '08.00 - 16.00',
        ];

        return view('/profil/profilpemerintahan', compact('struktur'));
    }
}
