<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanKTP extends Model
{
    use HasFactory;

    protected $table = 'ktp';
    protected $fillable = ['nama', 'nik', 'alamat', 'tanggal_lahir', 'status'];
}
