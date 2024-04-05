<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class EmailLoginController extends Controller
{
    /**
     * Handle an authentication attempt for administrators.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Verifica si el usuario tiene el rol de administrador
        if ($this->isAdmin($request->email, $request->password)) {
            // Si el usuario es un administrador, intenta autenticarlo
            if (Auth::attempt($request->only('email', 'password'))) {
                // Si la autenticación es exitosa, redirige al área de administrador
                return redirect()->route('admin.administradores.index');
            }
        }

        // Si la autenticación falla o el usuario no es administrador, muestra un mensaje de error
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Check if the given user has admin role.
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    protected function isAdmin($email, $password)
    {
        // Buscar al usuario por su correo electrónico en la base de datos
        $user = User::where('email', $email)->first();

        // Verificar si se encontró un usuario y si su rol es "admin"
        if ($user && $user->rol === 'admin') {
            // Si el usuario tiene el rol de administrador, retorna true
            return true;
        }

        // Si el usuario no tiene el rol de administrador, retorna false
        return false;
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.email-login');
    }

}
