<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('tipos',  App\Http\Controllers\TipoController::class)->Middleware('auth');
Route::resource('vehiculos',  App\Http\Controllers\VehiculoController::class)->Middleware('auth');
Route::resource('tarifas',  App\Http\Controllers\TarifaController::class)->Middleware('auth');
Route::resource('pagos',  App\Http\Controllers\PagoController::class)->Middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

