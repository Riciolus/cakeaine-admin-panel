<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        return view('Auth.login');
    }

    public function Register()
    {
        return view('Auth.register');
    }
}