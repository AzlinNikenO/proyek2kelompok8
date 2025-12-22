<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanKk;
use Illuminate\Support\Facades\Auth;

class KkController extends Controller
{
    /**
     * Simpan pengajuan Kartu Keluarga
     */
    public function store(Request $request)
    {
        // VALIDASI INPUT
        $request->validate([
            'jenis_pengajuan' => 'required|in:baru,perubahan,hilang',
            'berkas' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'keterangan' => 'nullable|string|max:500',
        ]);

        // UPLOAD FILE
        $file = $request->file('berkas');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/kk'), $fileName);

        // SIMPAN KE DATABASE
        PengajuanKk::create([
            'user_id' => Auth::id(),
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'berkas' => $fileName,
            'keterangan' => $request->keterangan,
            'status' => 'menunggu',
        ]);

        return redirect()->back()->with('success', 'Pengajuan KK berhasil dikirim.');
    }
}
