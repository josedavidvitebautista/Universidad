<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::get('inicio',[ApiController::class, 'inicio'])->name('inicio');
Route::get('/', function (){
    return view('hola');
});
Route::get('personaje/{id}',[ApiController::class, 'detallePersonaje'])->name('detalle.personaje');
Route::get('blog.principal1',[ApiController::class, 'inicio'])->name('principal1');
Route::get('inicio1',[ApiController::class, 'inicio1'])->name('inicio1');
Route::get('inicio2',[ApiController::class, 'inicio2'])->name('inicio2');
//Route::get('inicio3',[ApiController::class, 'inicio3'])->name('inicio3');
Route::get('inicio4',[ApiController::class, 'inicio4'])->name('inicio4');
Route::get('inicio5',[ApiController::class, 'inicio5'])->name('inicio5');
