<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//Route::get('/login', [LoginController::class, 'index'])->name ('Login.index  ');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'tentativaDeLogin'])->name('auth');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('sugestaoS', function(){
    return view('formularioSugestao');
})->name('sugestao');

Route::get('/admin/sugestoes', function () {
    if (!auth()->user()->is_admin) {
        abort(403, 'Acesso Negado. Você não é administrador.');
    }
    return view('admin.sugestoes');
})->name('sugestoes')->middleware('auth');