<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaUserController extends Controller
{
    public function index()
    {
        $news = Berita::where('publish', true)->latest()->paginate(6);
        return view('berita.index', compact('news'));
    }

}
