<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicHistory extends Model
{
    protected $fillable = [
        'user_id', 'comments', 'medications', 'operations', 'diseases'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
