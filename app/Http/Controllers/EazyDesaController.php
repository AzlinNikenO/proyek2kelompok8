<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
use Illuminate\Http\Request;

class EazyDesaController extends Controller
{
    public function profil() {
        return view('eazydesa');
    }

    public function index(){
        return view('eazydesa');
    }
}

>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
