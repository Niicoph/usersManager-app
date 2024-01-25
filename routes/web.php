<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('usuario.main');
}) ->name('main');


Route::resource('/usuarios', UsuarioController::class)
        ->only(['index']);

Route::resource('/usuario', UsuarioController::class)
        ->only(['create', 'store' , 'edit']);

Route::put('/usuario/{id}', [UsuarioController::class, 'update'])
        ->name('usuario.update');

Route::get('/usuario/{id}' , [UsuarioController::class, 'show'])
        ->name('usuario.show');

Route::get('/usuario/sucess' , function() {
        return view('usuario.sucess');
});

Route::delete('usuario/delete/{id}' , [UsuarioController::class, 'destroy'])
        ->name('usuario.destroy');

Route::fallback(function() {
    return view('usuario.error');
}) ->name('error');





