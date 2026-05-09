<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // VALIDASI
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // DATA LOGIN
        $credentials = [
            'email' => strtolower($request->email),
            'password' => $request->password,
        ];

        // LOGIN
        if (Auth::attempt($credentials)) {

            return response()->json([
                'success' => true,
                'message' => 'Login berhasil',
            ]);
        }

        // LOGIN GAGAL
        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah',
        ], 401);
    }

    public function register(Request $request)
    {
        // VALIDASI
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:guru,siswa',
        ]);

        // SIMPAN USER
        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // JIKA ROLE GURU
        if ($request->role == 'guru') {

            Guru::create([
                'user_id' => $user->id,
                'bio' => 'Belum ada bio',
                'keahlian' => 'Belum diisi',
                'rating_avg' => 0,
                'saldo' => 0,
            ]);

        }

        // JIKA ROLE SISWA
        else {

            Siswa::create([
                'user_id' => $user->id,
            ]);

        }

        // RESPONSE
        return response()->json([
            'success' => true,
            'message' => 'Register berhasil',
            'data' => $user
        ]);
    }
}