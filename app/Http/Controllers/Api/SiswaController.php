<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('user')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data siswa berhasil diambil',
            'data' => $siswas
        ]);
    }
}