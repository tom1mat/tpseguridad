<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
        'date', 'time', 'patient_id', 'doctor_id'
    ];

    public function patient(){
        return $this->belongsTo(User::class,'id', 'patient_id');
    }

    public function doctor(){
        return $this->belongsTo(User::class, 'id', 'doctor_id');
    }
}
