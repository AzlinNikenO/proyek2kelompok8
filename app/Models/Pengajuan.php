<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jenis_pengajuan',
        'status',
        'catatan_admin',
        'data_pengajuan',
    ];

    protected $casts = [
        'data_pengajuan' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
