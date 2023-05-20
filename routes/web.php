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

Route::get('/Mi pedido', function () {
    return view('front.mi_pedido');
});

//Creacion de empleado
Route::get('/registro', [EmpleadosController::class, 'crearE'])->name('empleados_crear');
Route::post('registro', [EmpleadosController::class, 'storeE'])->name('empleados_C');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Rutas de prueba
Route::post('empleados', [EmpleadosController::class, 'store']);