<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanKtp;
use Illuminate\Support\Facades\Auth;

class KtpController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'jenis_pengajuan' => 'required',
            'berkas' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('berkas');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads/ktp'), $fileName);

        PengajuanKtp::create([
            'user_id' => Auth::id(),
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'berkas' => $fileName,
            'keterangan' => $request->keterangan,
            'status' => 'menunggu'
        ]);

        return redirect()->back()->with('success', 'Pengajuan KTP berhasil dikirim');
    }
}
