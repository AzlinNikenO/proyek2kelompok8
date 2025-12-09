<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang bisa diisi massal
     */
    protected $fillable = [
        'name',
        'nik',
        'nokk',
        'ttl',
        'jk',
        'jk_lainnya',
        'alamat',
        'agama',
        'hp',
        'email',
        'password',
        'photo',
    ];

    /**
     * Kolom yang disembunyikan saat serialisasi
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Cast kolom tertentu
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
