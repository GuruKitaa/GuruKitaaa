<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    // =====================================================
    // HALAMAN LOGIN GURU
    // =====================================================

    public function index()
    {
        return view('Auth.AuthGuru.LoginGuru');
    }

    // =====================================================
    // HALAMAN REGISTER GURU
    // =====================================================

    public function register()
    {
        return view('Auth.AuthGuru.Register');
    }

    // =====================================================
    // PROSES REGISTER GURU
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
            'role' => 'guru',
        ]);

        // SIMPAN DATA GURU
        Guru::create([
            'user_id' => $user->id,
            'bio' => 'Belum ada bio',
            'keahlian' => 'Belum diisi',
            'rating_avg' => 0,
            'saldo' => 0,
        ]);

        // REDIRECT KE LOGIN
        return redirect('/login-guru')
            ->with('success', 'Register berhasil');
    }

    // =====================================================
    // PROSES LOGIN GURU
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
        if ($user->role != 'guru') {

            return back()
                ->withErrors([
                    'email' => 'Role tidak sesuai, silakan login sebagai siswa',
                ])
                ->withInput();

        }

        // LOGINKAN USER
        Auth::login($user);

        // REGENERATE SESSION
        $request->session()->regenerate();

        // REDIRECT
        return redirect('/dashboard-guru');
    }

    // =====================================================
    // HALAMAN CARI GURU
    // =====================================================

    public function cariGuru(Request $request)
    {
        $search = $request->search;

        $gurus = Guru::with('user')

            ->when($search, function ($query) use ($search) {

                $query->whereHas('user', function ($q) use ($search) {

                    $q->where('name', 'like', '%' . $search . '%');

                });

            })

            ->get();

        return view(
            'Landing.landingSiswaCariGuru',
            compact('gurus', 'search')
        );
    }

    // =====================================================
    // DETAIL GURU
    // =====================================================

    public function detailGuru($id)
    {
        $guru = Guru::with('user')->findOrFail($id);

        return view(
            'Landing.landingdetailGuru',
            compact('guru')
        );
    }

    // =====================================================
    // LOGOUT
    // =====================================================

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login-guru');
    }

    public function bookingLes($id)
    {
        $guru = Guru::with('user')->findOrFail($id);

        return view(
            'Landing.bookingLes',
            compact('guru')
        );
    }
};