<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateUpdateRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logar(UserCreateUpdateRequest $request)
    {
        dd($request->a);
    }
}
