<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Espacio
 *
 * @property $id
 * @property $user_id
 * @property $Fecha_solicitud
 * @property $Fecha_uso
 * @property $Hora_inicio
 * @property $Hora_fin
 * @property $Propocito
 * @property $tipo_id
 * @property $Nombre_solicitante
 * @property $created_at
 * @property $updated_at
 *
 * @property Tipo $tipo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Espacio extends Model
{
    
    static $rules = [
		'Fecha_solicitud' => 'required',
		'Fecha_uso' => 'required',
		'Hora_inicio' => 'required',
		'Hora_fin' => 'required',
		'Propocito' => 'required',
		'Nombre_solicitante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','Fecha_solicitud','Fecha_uso','Hora_inicio','Hora_fin','Propocito','tipo_id','Nombre_solicitante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'tipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
