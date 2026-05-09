<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::with('user')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data guru berhasil diambil',
            'data' => $gurus
        ]);
    }

    public function show($id)
    {
        $guru = Guru::with('user')->find($id);

        // JIKA TIDAK ADA
        if (!$guru) {

            return response()->json([
                'success' => false,
                'message' => 'Guru tidak ditemukan'
            ], 404);

        }

        // JIKA ADA
        return response()->json([
            'success' => true,
            'message' => 'Detail guru berhasil diambil',
            'data' => $guru
        ]);
    }
}
