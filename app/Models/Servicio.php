<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre_servicio
 * @property $descripcion_servicio
 * @property $precio_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita[] $citas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'nombre_servicio' => 'required',
		'descripcion_servicio' => 'required',
		'precio_servicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_servicio','descripcion_servicio','precio_servicio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'id_servicio', 'id');
    }
    

}
