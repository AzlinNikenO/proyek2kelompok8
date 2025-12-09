<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermohonanKTPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permohonan_ktp')->insert([
        ['nik' => '3201010101010001', 'nama' => 'Budi Santoso', 'alamat' => 'Desa Karangsari', 'tanggal_lahir' => '1990-01-01', 'status' => 'Selesai'],
        ['nik' => '3201010101010002', 'nama' => 'Siti Aminah', 'alamat' => 'Desa Mekarjaya', 'tanggal_lahir' => '1995-02-03', 'status' => 'Diproses']
    ]);
    }
}
