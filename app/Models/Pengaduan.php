<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    // Nama tabel database
    protected $table = 'pengaduan';

    // Kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama',
        'email',
        'pesan',
    ];
}
