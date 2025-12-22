<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class WargaController extends Controller
{
    public function index()
    {
        $warga = User::latest()->get();
        return view('admin.warga.index', compact('warga'));
    }
}
