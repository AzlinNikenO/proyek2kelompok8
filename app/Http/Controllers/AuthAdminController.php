<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    /**
     * TAMPILKAN FORM LOGIN ADMIN
     */
    public function showLogin()
    {
        // captcha angka sederhana
        session(['captcha_admin' => rand(1000, 9999)]);

        return view('admin.login');
    }

    /**
     * PROSES LOGIN ADMIN
     */
    public function loginProcess(Request $request)
    {
        $request->validate([
            'login'    => 'required',   // username atau email
            'password' => 'required',
            'captcha'  => 'required'
        ]);

        // VALIDASI CAPTCHA
        if ($request->captcha != session('captcha_admin')) {
            return back()->withErrors([
                'captcha' => 'Captcha salah'
            ]);
        }

        // LOGIN DENGAN USERNAME ATAU EMAIL
        $credentials = [
            'password' => $request->password
        ];

        if (filter_var($request->login, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $request->login;
        } else {
            $credentials['username'] = $request->login;
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'login' => 'Username / email atau password salah'
        ]);
    }

    /**
     * LOGOUT ADMIN
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
