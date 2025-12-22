<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $informasi = [
            'nama_desa' => 'Desa Sejahtera Digital',
            'tahun_berdiri' => 1945,
            'luas' => '45.2 km²',
            'ketinggian' => '245 m dpl',
            'penduduk' => 12345,
            'kk' => 3456
        ];

        $infrastruktur = [
            ['label' => 'Jalan Beraspal', 'value' => '85km'],
            ['label' => 'Listrik PLN', 'value' => '98%'],
            ['label' => 'Air Bersih', 'value' => '92%'],
            ['label' => 'Internet 4G', 'value' => '78%'],
            ['label' => 'Sanitasi Layak', 'value' => '88%'],
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

        $visits = [
            'today' => 134,
            'month' => 4532,
            'total' => 85433
        ];

        $notif = null;

<<<<<<< HEAD
        return view('/profil/profildesa', compact('informasi','infrastruktur','desa','visits','notif'));
=======
        return view('profil.profildesa', compact('informasi','infrastruktur','desa','visits','notif'));
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
    }
}
