<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $nro_identificacion
 * @property $telefono
 * @property $email
 * @property $fecha_cita
 * @property $hora_cita
 * @property $id_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'nro_identificacion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'fecha_cita' => 'required',
		'hora_cita' => 'required',
		'id_servicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','nro_identificacion','telefono','email','fecha_cita','hora_cita','id_servicio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }
    
    

}
