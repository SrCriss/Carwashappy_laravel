<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $fecha_cita
 * @property $hora_cita
 * @property $estado_cita
 * @property $id_usuario
 * @property $id_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio $servicio
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'fecha_cita' => 'required',
		'hora_cita' => 'required',
		'estado_cita' => 'required',
		'id_usuario' => 'required',
		'id_servicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_cita','hora_cita','estado_cita','id_usuario','id_servicio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
    

}
