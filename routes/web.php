<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ComprobationController;
use App\Http\Controllers\EditFormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MostrarController;
use App\Http\Controllers\UserDelete;
use App\Http\Controllers\UserEditController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/registro',function (){
   return view('registro');
})->name('registro');
Route::get('/principal',function (){
    session_start();
    $users=Client::find($_SESSION['id']);
    return view('app.principal')->with('user',$users->getUsers());
})->name('app.principal');

Route::post('/', [ClientsController::class,'store'])->name('clients.store');
Route::get('/comprobacion', [ComprobationController::class,'comprobar']);
Route::get('/check', [LoginController::class,'comprobar'])->name('login.comprobar');
Route::get('/mostrar', [MostrarController::class,'show'])->name('mostrar.show');
Route::get('/usuario/{id}', [UserEditController::class,'show'])->name('user.show');
Route::delete('/eliminar/{id}', [UserDelete::class, 'delete'])->name('user.delete');
Route::delete('/eliminar1/{id}', [UserDelete::class,'deleteNormal'])->name('user.deleteNormal');
Route::put('/actualizar/{id}', [EditFormController::class,'update'])->name('edit.update');
