<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class EazyDesaController extends Controller
{
    public function index()
    {
        $news = Berita::where('publish', true)
                    ->latest()
                    ->take(6)
                    ->get();

        return view('eazydesa', compact('news'));
    }

    public function profil()
    {
        return view('profil'); // JANGAN return eazydesa lagi
    }
}
