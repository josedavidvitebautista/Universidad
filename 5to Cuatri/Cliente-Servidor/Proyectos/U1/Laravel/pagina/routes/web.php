<?php

use Illuminate\Support\Facades\Route;
use App\Models\datos;

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

Route::get('/inicio', function () {
    $info= new datos();
    $info ->nombre = "José David";
    $info ->apellido = "Vite Bautista";
    $info ->grupo ="3522IS";
    return view ('home', ['info' => $info]);
})-> name('inicio');

Route::get('/informacion', function () {
    $info= new datos();
    $info ->nombre = "José David";
    $info ->apellido = "Vite Bautista";
    $info ->grupo ="3522IS";
    return view('generic', ['info' => $info]);
})-> name('informacion');

Route::get('/movies', function () {
    $info= new datos();
    $info ->nombre = "José David";
    $info ->apellido = "Vite Bautista";
    $info ->grupo ="3522IS";
    return view('elements', ['info' => $info] );
})-> name('movies');
