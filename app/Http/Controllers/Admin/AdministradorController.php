<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Funcionario;

class AdministradorController extends Controller
{
    /**
     * Display the index view.
     */
    public function index()
    {
        $administradores = Admin::all();
        $funcionarios = Funcionario::all();

        return view('admin.administradores.index', compact('administradores'))
            ->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administradores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        // Create a new user with admin role
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rol' => 'admin',
        ]);

        return redirect()->route('admin.administradores.index')
            ->with('success', 'Administrador creado exitosamente.');
    }

    /**
     * Show details of a specific user by ID.
     */
    public function show($id)
    {
        $administrador = Admin::findOrFail($id);

        return view('admin.administradores.show', compact('user'));
    }
}
