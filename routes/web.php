<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

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
    return view('front.indes');
});

Route::get('/login', function () {
    return view('front.entrada');
})->name('login');

Route::get('/Mipedido', function () {
    return view('front.mi_pedido');
})->name('index');


Route::get('inicio', function () {
    return view('front.lobby');
})->name('lobby');

Route::get('inicio-articulos', function () {
    return view('front.articulos');
});

Route::get('inicio-pedidos', function () {
    return view('front.pedidos');
});

//Creacion de empleado
Route::get('/registro', [EmpleadosController::class, 'crearE'])->name('empleados_crear');
Route::post('registro', [EmpleadosController::class, 'storeE'])->name('empleados_C');
Route::post('login', [EmpleadosController::class, 'loginE'])->name('login_empleado');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

