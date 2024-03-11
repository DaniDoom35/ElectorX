<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the form for customizing the user's profile.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function customize()
    {
        // Aquí puedes agregar la lógica necesaria para mostrar el formulario de personalización
        return view('customize');
    }
}
