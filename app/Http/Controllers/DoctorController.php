<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index(){
        $doctor = Auth::user();
        $users = User::all()->where('role_id', 1);

        return view("doctor.users.index", compact('users', 'doctor'));
    }
}
