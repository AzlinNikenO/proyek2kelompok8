<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan; // Import Model Pengaduan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Opsional: untuk logging

class PengaduanController extends Controller
{
    /**
     * Memproses pengiriman formulir pengaduan dari warga desa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitPengaduan(Request $request)
    {
        // 1. VALIDASI INPUT
        // Pastikan semua kolom yang diperlukan terisi dan sesuai format
        $request->validate([
            'nama' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'pesan' => 'required|string|min:10', // Pesan minimal 10 karakter
        ], [
            // Pesan error custom (Opsional)
            'nama.required' => 'Kolom Nama wajib diisi.',
            'email.required' => 'Kolom Email wajib diisi.',
            'email.email' => 'Format Email tidak valid.',
            'pesan.required' => 'Kolom Pesan/Aspirasi wajib diisi.',
            'pesan.min' => 'Pesan terlalu pendek, minimal :min karakter.',
        ]);

        try {
            // 2. SIMPAN DATA KE DATABASE
            Pengaduan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan,
                // Tambahkan kolom lain jika ada (misalnya: 'status' => 'baru')
            ]);

            // 3. LOGGING (Opsional)
            Log::info('Pengaduan baru diterima dari: ' . $request->nama);

            // 4. BERIKAN RESPON KE PENGGUNA
            // Redirect kembali ke halaman sebelumnya dengan pesan sukses
            return back()->with('success', 'Pengaduan/Aspirasi Anda berhasil dikirim! Terima kasih atas masukan Anda.');

        } catch (\Exception $e) {
            // Jika terjadi kesalahan database atau lainnya
            Log::error('Gagal menyimpan pengaduan: ' . $e->getMessage());

            return back()->withInput()->with('error', 'Terjadi kesalahan saat mengirim pengaduan. Silakan coba lagi.');
        }
    }
}
