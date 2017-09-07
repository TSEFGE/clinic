<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PacienteMedidas
 * @package App\Models
 * @version September 7, 2017, 4:05 am UTC
 *
 * @property integer idPaciente
 * @property date fecha
 * @property string peso
 * @property string cuello
 * @property string pecho
 * @property string ca
 * @property string cm
 * @property string cb
 * @property string cadera
 * @property string muslo
 * @property string pantorrilla
 * @property string tobillo
 * @property string brazo
 * @property string munieca
 * @property string talla
 * @property string imc
 */
class PacienteMedidas extends Model
{
    use SoftDeletes;

    public $table = 'paciente_medidas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idPaciente',
        'fecha',
        'peso',
        'cuello',
        'pecho',
        'ca',
        'cm',
        'cb',
        'cadera',
        'muslo',
        'pantorrilla',
        'tobillo',
        'brazo',
        'munieca',
        'talla',
        'imc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idPaciente' => 'integer',
        'fecha' => 'date',
        'peso' => 'string',
        'cuello' => 'string',
        'pecho' => 'string',
        'ca' => 'string',
        'cm' => 'string',
        'cb' => 'string',
        'cadera' => 'string',
        'muslo' => 'string',
        'pantorrilla' => 'string',
        'tobillo' => 'string',
        'brazo' => 'string',
        'munieca' => 'string',
        'talla' => 'string',
        'imc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idPaciente' => 'required',
        'fecha' => 'required',
        'peso' => 'required'
    ];

    
}
