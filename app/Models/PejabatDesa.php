<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PejabatDesa extends Model
{
    protected $table = 'pejabat_desa';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
        'periode',
        'no_hp',
        'alamat'
    ];
}
