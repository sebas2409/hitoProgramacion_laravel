<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class EditFormController extends Controller
{
    public function update(Request $request,$id){

        $user=Client::find($id);
        $user->setUsers($request->input('usuario'));
        $user->setEmail($request->input('email'));
        $user->setPass($request->input('pass'));
        $user->setLink($request->input('link'));
        $user->save();
        return redirect()->route('mostrar.show');
    }
}
