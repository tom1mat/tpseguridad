<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecretaryController extends Controller
{
    public function index(){
        $secretary = Auth::user();
        $users = User::all()->where('role_id', 1);

        return view("secretary.users.index", compact('users', 'secretary'));
    }

    public function edit($id){
        $user = User::find($id);

        if($user)
            return view ('secretary.users.edit');
        else
            return redirect()->back()->withErrors("Error, no existe el usuario $id");
    }
}
