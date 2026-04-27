<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
       return view('Auth.AuthGuru.LoginGuru');
    }

    public function register(){
        return view('Auth.AuthGuru.Register');
    }
}
