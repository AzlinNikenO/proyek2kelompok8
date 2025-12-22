<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'kategori',
        'gambar',
        'isi',
        'publish',
    ];

    protected $casts = [
        'publish' => 'boolean',
    ];

    /**
     * Scope untuk berita yang ditampilkan ke user
     */
    public function scopePublished($query)
    {
        return $query->where('publish', true);
    }
}
