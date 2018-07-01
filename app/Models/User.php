<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dni', 'prepaid_id', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->hasOne(Role::class,'id', 'role_id');
    }

    public function isAllowed($roleId){
        if($roleId == $this->role->id)
            return true;
        else
            return false;
    }

    public function getDoctors(){

    }

    public function getUserRoleId(){
        return $this->role->id;
    }

    public function patientShifts(){
        return $this->hasMany(Shift::class, 'patient_id');
    }

    public function doctorShifts(){
        return $this->hasMany(Shift::class, 'doctor_id');
    }

    public function prepaid(){
        return $this->hasOne(Prepaid::class, 'id', 'prepaidId');
    }

}
