<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKtp extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_ktp';

    protected $fillable = [
        'user_id',
        'jenis_pengajuan',
        'berkas',
        'keterangan',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
