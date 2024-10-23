<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }

    public function Register()
    {
        return view('auth.register');
    }

    public function HandleRegister(Request $request)
    {
        
        if ($request->password !== $request->validatePassword ) {
            return redirect('/auth/register');
        }

        $newUser = new User;
        $newUser->name = $request->username;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->save();

        return redirect('/auth/login');
    }

    public function HandleLogin(Request $request)
    {

        $user = User::where('email', $request->email)->first();


        if (!$user) {
            return redirect()->back();
        }

        if ($user && \Hash::check($request->password, $user->password)) {
            
            $rememberToken = \Str::random(10);

            $user->setRememberToken($rememberToken);    
            $user->save();

            \Cookie::queue('remember_token', $rememberToken, 1209600);

            
            return redirect('/dashboard');
        } else {
            return redirect()->back();
        }
    }
}