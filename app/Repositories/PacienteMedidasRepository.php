<?php

namespace App\Repositories;

use App\Models\PacienteMedidas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PacienteMedidasRepository
 * @package App\Repositories
 * @version September 7, 2017, 4:05 am UTC
 *
 * @method PacienteMedidas findWithoutFail($id, $columns = ['*'])
 * @method PacienteMedidas find($id, $columns = ['*'])
 * @method PacienteMedidas first($columns = ['*'])
*/
class PacienteMedidasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return PacienteMedidas::class;
    }
}
