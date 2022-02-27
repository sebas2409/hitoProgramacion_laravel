<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserDelete extends Controller
{
    public function delete($id): RedirectResponse
    {
            Client::destroy($id);
            return back();

    }
    public function deleteNormal($id): Factory|View|Application
    {
        Client::destroy($id);
        return view('login');
    }
}
