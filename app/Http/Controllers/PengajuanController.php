<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan' => 'required|in:ktp,kk',
            'berkas'        => 'required|file',
            'keterangan'    => 'nullable|string',
        ]);

        $file = $request->file('berkas')
            ->store('berkas_pengajuan', 'public');

        Pengajuan::create([
            'user_id'         => Auth::id(),
            'jenis_pengajuan' => $request->jenis_layanan, // ← INI KUNCI
            'status'          => 'menunggu',
            'data_pengajuan'  => json_encode([
                'nik'        => Auth::user()->nik,
                'nokk'       => Auth::user()->nokk,
                'keterangan' => $request->keterangan,
                'berkas'     => $file,
            ]),
        ]);

        return redirect()
            ->route('layanan.' . $request->jenis_layanan)
            ->with('success', 'Pengajuan berhasil dikirim');
    }
}
