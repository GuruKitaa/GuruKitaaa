<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;

class AuthController extends Controller
{
    /**
     * Proses Login untuk Guru maupun Siswa
     */
    public function loginProcess(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Coba autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerate session untuk menghindari fixation attack
            $request->session()->regenerate();

            // 3. Cek role untuk menentukan arah redirect
            if (Auth::user()->isGuru()) {
                return redirect()->intended('/guru'); // Dashboard Guru
            } elseif (Auth::user()->isSiswa()) {
                return redirect()->intended('/siswa'); // Dashboard Siswa
            }

            return redirect()->intended('/');
        }

        // 4. Jika gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    /**
     * Proses Registrasi Siswa
     */
    public function registerSiswaProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8', // Bisa tambah 'confirmed' jika ada field password_confirmation
        ]);

        DB::beginTransaction();
        try {
            // 1. Buat User baru dengan role siswa
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'siswa',
            ]);

            // 2. Buat relasi Profil Siswa
            Siswa::create([
                'user_id' => $user->id,
            ]);

            DB::commit();

            // 3. Auto Login setelah daftar
            Auth::login($user);

            // 4. Redirect ke halaman siswa
            return redirect('/siswa')->with('success', 'Registrasi Siswa Berhasil!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Proses Registrasi Guru
     */
    public function registerGuruProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8', // Bisa tambah 'confirmed'
            'keahlian' => 'required|string|max:255', // Wajib karena di migration gurus tidak nullable
        ]);

        DB::beginTransaction();
        try {
            // 1. Buat User baru dengan role guru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'guru',
            ]);

            // 2. Buat relasi Profil Guru
            Guru::create([
                'user_id' => $user->id,
                'keahlian' => $request->keahlian,
                'bio' => null, // Optional, user bisa update di dashboard nanti
            ]);

            DB::commit();

            // 3. Auto Login setelah daftar
            Auth::login($user);

            // 4. Redirect ke halaman guru
            return redirect('/guru')->with('success', 'Registrasi Guru Berhasil!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Proses Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus dan reset session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Kembali ke landing page utama
    }
}
