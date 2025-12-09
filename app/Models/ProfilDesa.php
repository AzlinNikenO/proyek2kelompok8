<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    protected $table = 'profil_desa';

    protected $fillable = [
        'nama_desa',
        'tahun_berdiri',
        'luas_wilayah',
        'ketinggian',
        'jumlah_penduduk',
        'jumlah_kk',
        'sejarah',
        'visi',
        'misi'
    ];
}
