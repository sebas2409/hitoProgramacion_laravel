<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

        $nuevoCliente = new Client();
        $nuevoCliente->users=$request->usuario;
        $nuevoCliente->email=$request->email;
        $nuevoCliente->password=$request->password;
        $nuevoCliente->link=$request->link;
        $nuevoCliente->save();

        return redirect()->route('login');
    }
}
