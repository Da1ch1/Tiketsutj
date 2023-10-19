<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo
 *
 * @property $id
 * @property $tipo_espacio
 * @property $created_at
 * @property $updated_at
 *
 * @property Espacio[] $espacios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipo extends Model
{
    
    static $rules = [
		'tipo_espacio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_espacio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function espacios()
    {
        return $this->hasMany('App\Models\Espacio', 'tipo_id', 'id');
    }
    

}
