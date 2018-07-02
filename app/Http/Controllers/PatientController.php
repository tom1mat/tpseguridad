<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index(){
        $patient =  Auth::user();
        $shiftsArray =  $patient->patientShifts;

        return view("patient.shifts.index", compact('shiftsArray', 'patient'));
    }

    // Obtener el día de la semana a traves de una fecha: date("w",strtotime(fecha_que_quieras))
}
