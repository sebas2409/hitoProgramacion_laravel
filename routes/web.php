<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ComprobationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MostrarController;
use App\Http\Controllers\UserEditController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/registro',function (){
   return view('registro');
})->name('registro');

Route::post('/', [ClientsController::class,'store'])->name('clients.store');
Route::get('/comprobacion', [ComprobationController::class,'comprobar']);
Route::get('/check', [LoginController::class,'comprobar'])->name('login.comprobar');
Route::get('/principal',function (){
    return view('app.principal');
})->name('app.principal');

Route::get('/mostrar', [MostrarController::class,'show'])->name('mostrar.show');
Route::get('/usuario/{id}', [UserEditController::class,'show'])->name('user.show');
