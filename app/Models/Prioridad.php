<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prioridad
 *
 * @property $id
 * @property $tipo_prioridad
 * @property $created_at
 * @property $updated_at
 *
 * @property Soporte[] $soportes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prioridad extends Model
{
    
    static $rules = [
		'tipo_prioridad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_prioridad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soportes()
    {
        return $this->hasMany('App\Models\Soporte', 'prioridad_id', 'id');
    }
    

}
