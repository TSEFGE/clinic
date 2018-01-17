<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public $table = 'cita';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        "idCita",
		"idConsultorio",
		"idPaciente",
		"idUsuario",
		"fecha",
		"horaIni",
		"horaFin",
		"status",
		"nota"
    ];

    public function consultorio(){
        return $this->hasMany('App\Models\Consultorio');
    }

    public function paciente(){
        return $this->hasOne('App\Models\Paciente');
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
