<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version September 7, 2017, 2:47 am UTC
 *
 * @property string nombre
 * @property string paterno
 * @property string materno
 * @property string sexo
 * @property date fechaNacimiento
 * @property string rfc
 * @property string direccion
 * @property string telefono
 * @property string celular
 * @property integer idOcupacion
 * @property integer idReligion
 * @property string email
 */
class Paciente extends Model
{
    use SoftDeletes;

    public $table = 'paciente';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idPaciente',
        'rfc',
        'nombre',
        'paterno',
        'materno',
        'sexo',
        'fechaNac',
        'telCasa',
        'telCel',
        'telRadio',
        'conExped',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    /*protected $casts = [
        'nombre' => 'string',
        'paterno' => 'string',
        'materno' => 'string',
        'sexo' => 'string',
        'fechaNacimiento' => 'date',
        'rfc' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'celular' => 'string',
        'idOcupacion' => 'integer',
        'idReligion' => 'integer',
        'email' => 'string'
    ];*/

    /**
     * Validation rules
     *
     * @var array
     */
    /*public static $rules = [
        'nombre' => 'required',
        'paterno' => 'required',
        'sexo' => 'required',
        'idOcupacion' => 'required',
        'idReligion' => 'required'
    ];*/

    
}
