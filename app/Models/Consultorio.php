<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    public $table = 'consultorio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        "idConsultorio",
		"idUsuario",
		"idEspecialidad",
		"numero"
    ];

    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function especialidad(){
        return $this->hasMany('App\Models\CatEspecialidad');
    }
}
