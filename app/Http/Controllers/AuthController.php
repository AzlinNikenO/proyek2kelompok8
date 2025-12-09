<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function daftar() {
        return view('auth.daftar');
    }

    public function daftarProcess(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'nik' => 'required|string|unique:users,nik',
            'nokk' => 'required|string',
            'ttl' => 'required|string',
            'jk' => 'required|string',
            'jk_lainnya' => 'nullable|string',
            'alamat' => 'required|string',
            'agama' => 'required|string|max:50',
            'hp' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'photo' => 'required|file|mimes:jpg,jpeg,png,mp4,mov|max:10240', // max 10MB
        ]);

        // Upload file foto/video
        $photoPath = $request->file('photo')->store('photos', 'public');


        // Simpan data ke database
        $user = User::create([
            'name' => $request->nama,
            'nik' => $request->nik,
            'nokk' => $request->nokk,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'jk_lainnya' => $request->jk_lainnya,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'hp' => $request->hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $photoPath,
        ]);

        // Auto login setelah register (opsional)
        auth()->login($user);

        return redirect('/login')->with('success', 'Pendaftaran berhasil!');
    }

    public function login() {
        return view('auth.login');
    }
    /**
     * Proses Login
     */
    public function loginProcess(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Ambil data login
        $credentials = $request->only('email', 'password');

        // Proses login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Arahkan ke dashboard default
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil!');
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password tidak cocok.',
        ])->withInput();
    }


    /**
     * Logout User
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}



