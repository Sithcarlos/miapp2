<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'InicioController@index')->name('raiz');

// Rutas del grupo de acceso
Auth::routes(['verify' => true, 'register' => true]);

// Pagina inicial de sesion
Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth', 'verified']);

/**
 * Escribir rutas desde aqui
 */
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios')->middleware(['auth', 'verified']);
Route::post('/usuarios/editar', 'UsuariosController@editar')->name('editar')->middleware(['auth', 'verified']);
Route::get('/usuarios/{id}', 'UsuariosController@verUno')->middleware(['auth', 'verified']);
