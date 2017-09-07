<?php

namespace App\Repositories;

use App\Models\Paciente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PacienteRepository
 * @package App\Repositories
 * @version September 7, 2017, 2:47 am UTC
 *
 * @method Paciente findWithoutFail($id, $columns = ['*'])
 * @method Paciente find($id, $columns = ['*'])
 * @method Paciente first($columns = ['*'])
*/
class PacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'paterno',
        'materno',
        'sexo',
        'fechaNacimiento',
        'rfc',
        'direccion',
        'telefono',
        'celular',
        'idOcupacion',
        'idReligion',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paciente::class;
    }
}
