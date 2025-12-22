<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusPengajuanMail;

class PengajuanController extends Controller
{
    public function index($jenis)
    {
        $pengajuans = Pengajuan::with('user')
            ->where('jenis_pengajuan', $jenis)
            ->latest()
            ->get();

        return view('admin.pengajuan.index', compact('pengajuans', 'jenis'));
    }

    public function show($id)
    {
        $pengajuan = Pengajuan::with('user')->findOrFail($id);
        return view('admin.pengajuan.show', compact('pengajuan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:menunggu,diproses,ditolak,selesai',
        ]);

        // 🔑 SIMPAN OBJEKNYA
        $pengajuan = Pengajuan::with('user')->findOrFail($id);

        $pengajuan->update([
            'status' => $request->status,
            'catatan_admin' => $request->catatan_admin,
        ]);

        // 🔔 KIRIM EMAIL JIKA SELESAI
        if ($request->status === 'selesai') {
            Mail::to($pengajuan->user->email)
                ->send(new StatusPengajuanMail($pengajuan));
        }

        return back()->with('success', 'Status diperbarui');
    }
}
