<?php

namespace App\Http\Controllers;

use App\Models\Auth\AuthGuru\Login;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.AuthSiswa.LoginSiswa');
    }

    public function register()
    {
        return view('Auth.AuthSiswa.RegisterSiswa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

}
