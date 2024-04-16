<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $usuarios = User::all();
        return view('admin.funcionarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Aquí puedes retornar la vista para crear un nuevo usuario si es necesario
        return view('admin.funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Aquí puedes implementar la lógica para almacenar un nuevo usuario
        // Ejemplo:
         User::create($request->all());
         return redirect()->route('admin.funcionarios.index')->with('success', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function show(string $id)
    {
        // Aquí puedes implementar la lógica para mostrar un usuario específico
        // Ejemplo:
         $usuario = User::findOrFail($id);
         return view('admin.funcionarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function edit(string $id)
    {
        // Aquí puedes retornar la vista para editar un usuario específico
        // Ejemplo:
         $usuario = User::findOrFail($id);
         return view('admin.funcionarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, string $id)
    {
        // Aquí puedes implementar la lógica para actualizar un usuario específico
        // Ejemplo:
         $usuario = User::findOrFail($id);
         $usuario->update($request->all());
         return redirect()->route('admin.funcionarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        // Aquí puedes implementar la lógica para eliminar un usuario específico
        // Ejemplo:
         $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('admin.funcionarios.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
