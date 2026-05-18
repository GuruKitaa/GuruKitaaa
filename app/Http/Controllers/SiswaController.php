<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    // =====================================================
    // HALAMAN LOGIN SISWA
    // =====================================================

    public function index()
    {
        return view('Auth.AuthSiswa.LoginSiswa');
    }

    // =====================================================
    // HALAMAN REGISTER SISWA
    // =====================================================

    public function register()
    {
        return view('Auth.AuthSiswa.RegisterSiswa');
    }

    // =====================================================
    // PROSES REGISTER SISWA
    // =====================================================

    public function store(Request $request)
    {
        // VALIDASI
        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:6',

            'password_confirmation' => 'required_with:password|same:password',

            ], [

            'name.required' => 'Harap isi nama anda',

            'email.required' => 'Harap isi email anda',

            'email.email' => 'Format email tidak valid',

            'email.unique' => 'Email sudah digunakan',

            'password.required' => 'Harap isi password anda',

            'password.min' => 'Password minimal 6 karakter',

            'password_confirmation.required_with' => 'Harap konfirmasi ulang password anda',

            'password_confirmation.same' => 'Konfirmasi password tidak cocok',

        ]);

        // SIMPAN USER
        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        // SIMPAN SISWA
        Siswa::create([
            'user_id' => $user->id,
        ]);

        // REDIRECT
        return redirect('/login-siswa')
            ->with('success', 'Register berhasil');
    }

    // =====================================================
    // PROSES LOGIN SISWA
    // =====================================================

    public function login(Request $request)
    {
        // VALIDASI
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // CARI USER BERDASARKAN EMAIL
        $user = User::where(
            'email',
            strtolower($request->email)
        )->first();

        // JIKA EMAIL TIDAK ADA
        if (!$user) {

            return back()
                ->withErrors([
                    'email' => 'Email tidak ditemukan',
                ])
                ->withInput();

        }

        // CEK PASSWORD
        if (!Hash::check($request->password, $user->password)) {

            return back()
                ->withErrors([
                    'email' => 'Password salah',
                ])
                ->withInput();

        }

        // CEK ROLE
        if ($user->role != 'siswa') {

            return back()
                ->withErrors([
                    'email' => 'Role tidak sesuai, silakan login sebagai guru',
                ])
                ->withInput();

        }

        // LOGINKAN USER
        Auth::login($user);

        // REGENERATE SESSION
        $request->session()->regenerate();

        // REDIRECT
        return redirect('/dashboard-siswa');
    }

    // =====================================================
    // LOGOUT SISWA
    // =====================================================

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login-siswa');
    }
}