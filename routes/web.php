<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdministradorController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\FuncionarioAuthController;
use App\Http\Controllers\Admin\FuncionarioController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customize', [ProfileController::class, 'customize'])->name('customize');



// Administradores

// // Rutas de autenticación para administradores
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', function () {
        return view('admin.administradores.dashboard');
    })->name('admin.dashboard');
});


Route::get('/admin', [AdministradorController::class, 'index'])->name('admin.administradores.index');
Route::get('/adminin/create', [AdministradorController::class, 'create'])->name('admin.administradores.create');
Route::post('/admin', [AdministradorController::class, 'store'])->name('admin.administradores.store');
Route::get('/admin/{id}', [AdministradorController::class, 'show'])->name('admin.administradores.show');
Route::get('/admin/{id}/edit', [AdministradorController::class, 'edit'])->name('admin.administradores.edit');
Route::put('/admin/{id}', [AdministradorController::class, 'update'])->name('admin.administradores.update');
Route::delete('/admin/{id}', [AdministradorController::class, 'destroy'])->name('admin.administradores.destroy');


//Funcionarios

// // Rutas de autenticación para funcionarios

Route::prefix('funcionario')->middleware('funcionario')->group(function () {
    Route::get('/index', [FuncionarioController::class, 'index'])->name('funcionario.index');
    Route::get('/login', [FuncionarioAuthController::class, 'showLoginForm'])->name('funcionario.login');
    Route::post('/login', [FuncionarioAuthController::class, 'login']);
    Route::post('/logout', [FuncionarioAuthController::class, 'logout'])->name('funcionario.logout');
});












