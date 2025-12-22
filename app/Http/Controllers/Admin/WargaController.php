<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class WargaController extends Controller
{
    public function index()
    {
        return view('admin.warga.index');
    }
}
