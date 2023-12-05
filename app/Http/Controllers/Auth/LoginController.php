<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/inicio'; // Ruta a la que se redirige después de iniciar sesión

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
