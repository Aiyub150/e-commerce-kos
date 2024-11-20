<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input user
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Cek kredensial dan autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerasi sesi untuk keamanan
            $request->session()->regenerate();

            // Redirect ke halaman utama '/'
            return redirect()->intended('/'); // Jika berhasil login, langsung menuju halaman utama
        }

        // Jika login gagal, kembalikan ke halaman login dengan error
        return back()->withErrors([
            'name' => 'Username atau password salah.',
        ])->onlyInput('name'); // Kembalikan hanya input 'name'
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
