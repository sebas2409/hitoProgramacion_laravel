<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    public function show($id){
        $user=Client::find($id);
        return view('admin.adeditar')->with('user',$user);
    }
}
