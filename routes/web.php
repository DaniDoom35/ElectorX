<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdministradorController;
use App\Http\Controllers\Auth\EmailLoginController;

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

// Login with email
Route::get('/email-login', [EmailLoginController::class, 'showLoginForm'])->name('email-login');
Route::post('/email-login', [EmailLoginController::class, 'login'])->name('email-login');


// Administradores
Route::resource('admin/administradores', AdministradorController::class);
Route::get('/admin/administradores', function () {
    return view('Admin.administradores.index');
})->name('admin.administradores.index');
Route::resource('admin/administradores', AdministradorController::class);
Route::get('/admin/administradores/create', [AdministradorController::class, 'create'])->name('administradores.create');
