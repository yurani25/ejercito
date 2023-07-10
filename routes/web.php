<?php

use App\Http\Controllers\serviciosController;
use App\Http\Controllers\soldadosController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('soldados/create', [soldadosController::class, 'create']);
Route::get('servicios/create', [serviciosController::class, 'create']);

Route::post('soldados', [soldadosController::class, 'store'])->name('soldados.store');

Route::post('servicios', [serviciosController::class, 'store'])->name('servicios.store');

Route::get('index', function () {
    return view('index');
});
Route::get('cart', function () {
    return view('cart');
});