<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.administradores.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->route('admin.dashboard');
        } else {
            // Autenticación fallida
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}


