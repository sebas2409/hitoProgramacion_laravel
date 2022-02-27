<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;


class LoginController extends Controller
{
    #[NoReturn] public function comprobar(Request $request): Factory|View|RedirectResponse|Application
    {
        $nombre=$request->input('usuario');
        $pass=$request->input('password');
        $resultado = DB::select("select * from clients where clients.users='$nombre' and clients.password='$pass'");

        if (empty($resultado) == true){
            return redirect()->route('login')->with('error','Usuario o contraseña incorrecta');
        }else{
            return redirect()->route('app.principal');
        }








    }
}
