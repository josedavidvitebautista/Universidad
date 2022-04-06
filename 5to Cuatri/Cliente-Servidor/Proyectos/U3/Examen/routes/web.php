<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Sticker', [App\Http\Controllers\ActoresController::class, 'back']);

//

Route::get('/apiview', function (){
    return view('API.ViewAPI1');
});

Route::get('apiviewreturn2', [App\Http\Controllers\APIController::class, 'returnapi'])->name('firts_api');

Route::get('LooL', [App\Http\Controllers\APIController::class, 'indexview'])->name('receptor');
