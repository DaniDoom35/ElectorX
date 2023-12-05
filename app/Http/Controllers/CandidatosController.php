<?php

namespace App\Http\Controllers;

use App\Models\Candidatos;

class CandidatosController extends Controller
{
    public function index()
    {
        $candidatos = Candidatos::all();
        return view('candidatos.index', compact('candidatos'));
    }

    // Resto de métodos como create, store, show, edit, update, destroy
}


