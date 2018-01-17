<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEspecialidad extends Model
{
    protected $table = 'cat_especialidad';

    protected $fillable = [
        'idEspecialidad', 'especialidad'
    ];

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
}
