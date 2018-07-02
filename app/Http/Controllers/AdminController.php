<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $usersArray = User::all();

        return view('admin.users.index', compact('usersArray'));
    }

    public function createUser(){
        return view ('admin.users.create');
    }

    public function editUser($id){
        $user = User::find($id);

        if($user)
            return view ('admin.users.edit');
        else
            return redirect()->back()->withErrors("Error, no existe el usuario $id");
    }
}
