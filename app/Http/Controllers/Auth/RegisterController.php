<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Seccion;
use App\Models\Distrito;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
            'curp' => ['required', 'string', 'max:255', 'unique:users'],
            'clave_elector' => ['required', 'string', 'max:255', 'unique:users'],
            'domicilio' => ['required', 'string', 'max:255'],
            'municipio' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string'],
            'distrito' => ['string', 'max:255'],
            'seccion' => ['required', 'string', 'max:255'],
            'vigencia' => ['required', 'string'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'clave_elector' => $data['clave_elector'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'curp' => $data['curp'],
            'telefono' => $data['telefono'],
            'domicilio' => $data['domicilio'],
            'municipio' => $data['municipio'],
            'estado' => $data['estado'],
            'distrito' => $data['distrito'],
            'seccion' => $data['seccion'],
            'vigencia' => $data['vigencia'],
        ]);
    }

    public function showRegistrationForm()
    {
        $estados = Estado::all();
        $municipios = Municipio::all();
        $secciones = Seccion::all();
        $distritos = Distrito::all();
        return view('auth.register', compact('estados', 'municipios', 'secciones', 'distritos'));
    }


}
