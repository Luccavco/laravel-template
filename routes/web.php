<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/cursos/{id}', [App\Http\Controllers\CursosController::class, 'show']);

Route::get('/perfil/{id}', [App\Http\Controllers\UserControllers::class, 'show']);

Route::get('/zas/{id}', [App\Http\Controllers\CursosController::class, 'zas']);

Route::get('/contact', [App\Http\Controllers\CursosController::class, 'contact']);


Route::get('/aluno', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/cursos/join/{id}',[App\Http\Controllers\CursosController::class, 'join'])->middleware('auth');
