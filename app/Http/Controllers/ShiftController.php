<?php

namespace App\Http\Controllers;

use App\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function create(){
        $shiftsArray = Shift::all();

        return view("patient.shifts.create", compact('shiftsArray'));
    }

}
