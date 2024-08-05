<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logar(LoginRequest $request)
    {
        $credencias = $request->only(['email', 'password']);

        if (Auth::attempt($credencias)) {
            $request->session()->regenerate();
            return redirect()->route('site.index');
        }

        return redirect()->back()->withErrors('Usuário ou senha incorreta!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
