<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleccionesController;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\VotantesController;
use App\Http\Controllers\VotosController;
use App\Http\Controllers\Auth\LoginController;




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/candidatos', [CandidatosController::class, 'index'])->name('candidatos');
Route::get('/ayuda', [AyudaController::class, 'index'])->name('ayuda');


// Rutas para Elecciones
Route::get('/elecciones', [EleccionesController::class, 'index'])->name('elecciones.index');
Route::get('/elecciones/create', [EleccionesController::class, 'create'])->name('elecciones.create');
Route::post('/elecciones', [EleccionesController::class, 'store'])->name('elecciones.store');
Route::get('/elecciones/{eleccion}', [EleccionesController::class, 'show'])->name('elecciones.show');
Route::get('/elecciones/{eleccion}/edit', [EleccionesController::class, 'edit'])->name('elecciones.edit');
Route::put('/elecciones/{eleccion}', [EleccionesController::class, 'update'])->name('elecciones.update');
Route::delete('/elecciones/{eleccion}', [EleccionesController::class, 'destroy'])->name('elecciones.destroy');

// Rutas para Candidatos
Route::get('/candidatos', [CandidatosController::class, 'index'])->name('candidatos.index');
Route::get('/candidatos/create', [CandidatosController::class, 'create'])->name('candidatos.create');
Route::post('/candidatos', [CandidatosController::class, 'store'])->name('candidatos.store');
Route::get('/candidatos/{candidato}', [CandidatosController::class, 'show'])->name('candidatos.show');
Route::get('/candidatos/{candidato}/edit', [CandidatosController::class, 'edit'])->name('candidatos.edit');
Route::put('/candidatos/{candidato}', [CandidatosController::class, 'update'])->name('candidatos.update');
Route::delete('/candidatos/{candidato}', [CandidatosController::class, 'destroy'])->name('candidatos.destroy');

// Rutas para Votantes
Route::get('/votantes', [VotantesController::class, 'index'])->name('votantes.index');
Route::get('/votantes/create', [VotantesController::class, 'create'])->name('votantes.create');
Route::post('/votantes', [VotantesController::class, 'store'])->name('votantes.store');
Route::get('/votantes/{votante}', [VotantesController::class, 'show'])->name('votantes.show');
Route::get('/votantes/{votante}/edit', [VotantesController::class, 'edit'])->name('votantes.edit');
Route::put('/votantes/{votante}', [VotantesController::class, 'update'])->name('votantes.update');
Route::delete('/votantes/{votante}', [VotantesController::class, 'destroy'])->name('votantes.destroy');

// Rutas para Votos
Route::get('/votos', [VotosController::class, 'index'])->name('votos.index');
Route::get('/votos/create', [VotosController::class, 'create'])->name('votos.create');
Route::post('/votos', [VotosController::class, 'store'])->name('votos.store');
Route::get('/votos/{voto}', [VotosController::class, 'show'])->name('votos.show');
Route::get('/votos/{voto}/edit', [VotosController::class, 'edit'])->name('votos.edit');
Route::put('/votos/{voto}', [VotosController::class, 'update'])->name('votos.update');
Route::delete('/votos/{voto}', [VotosController::class, 'destroy'])->name('votos.destroy');
