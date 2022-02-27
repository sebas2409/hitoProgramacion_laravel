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
            $users=Client::all();
            return view('app.mostrar')->with('users',$users);
    }
}
