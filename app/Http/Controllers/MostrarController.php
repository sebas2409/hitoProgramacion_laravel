<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MostrarController extends Controller
{
    public function show(): Factory|View|Application
    {
        session_start();
        if ($_SESSION['id']== 1){
            $users=Client::all();
            return view('app.mostrar')->with('users',$users);
        }else{
            $users=Client::find($_SESSION['id']);
            return view('admin.admostrar')->with('user',$users);
        }



    }
}
