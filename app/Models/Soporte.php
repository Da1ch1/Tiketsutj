<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Soporte
 *
 * @property $id
 * @property $asunto
 * @property $descripcion
 * @property $fecha
 * @property $nombre_cliente
 * @property $Seguimiento
 * @property $fecha_cierre
 * @property $comentarios
 * @property $user_id
 * @property $estado_id
 * @property $prioridad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Prioridad $prioridad
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Soporte extends Model
{
    
    static $rules = [
		'asunto' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
		'nombre_cliente' => 'required',
		'Seguimiento' => 'required',
		'comentarios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['asunto','descripcion','fecha','nombre_cliente','Seguimiento','fecha_cierre','comentarios','user_id','estado_id','prioridad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prioridad()
    {
        return $this->hasOne('App\Models\Prioridad', 'id', 'prioridad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
