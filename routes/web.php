<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ComprobationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/registro',function (){
   return view('registro');
})->name('registro');

Route::post('/', [ClientsController::class,'store'])->name('clients.store');
Route::get('/comprobacion', [ComprobationController::class,'comprobar']);
