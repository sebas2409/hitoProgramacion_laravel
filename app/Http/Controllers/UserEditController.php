<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    public function show($id): Factory|View|Application
    {
        $user=Client::find($id);
        return view('admin.adeditar')->with('user',$user);
    }
}
