<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKk extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_kk';

    protected $fillable = [
        'user_id',
        'jenis_pengajuan',
        'berkas',
        'keterangan',
        'status',
    ];
}
