<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TupoksiController extends Controller
{
    public function index(){
        return view('/profil/tupoksi');
    }
}
