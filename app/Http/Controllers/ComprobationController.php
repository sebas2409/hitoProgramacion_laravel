<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class ComprobationController extends Controller
{
    public function comprobar(): Collection
    {
        return Client::all();
    }
}
