<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FuncionarioAuthController extends Controller
{
    //

    public function showLoginForm()
    {
        return  view('admin.funcionarios.auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('funcionario')->attempt($credentials)) {
        // Autenticación exitosa
        return redirect()->route('funcionario.index'); // Redirige a la ruta funcionario.index
    } else {
        // Autenticación fallida
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }
}

public function logout()
{
    Auth::guard('funcionario')->logout();
    return redirect()->route('funcionario.login');

}

}
