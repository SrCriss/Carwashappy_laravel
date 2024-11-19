<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre_usuario
 * @property $correo
 * @property $contraseña
 * @property $telefono
 * @property $placa_vehiculo
 * @property $tipo_vehiculo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita[] $citas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre_usuario' => 'required',
		'correo' => 'required',
		'contraseña' => 'required',
		'telefono' => 'required',
		'placa_vehiculo' => 'required',
		'tipo_vehiculo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_usuario','correo','contraseña','telefono','placa_vehiculo','tipo_vehiculo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'id_usuario', 'id');
    }
    

}
