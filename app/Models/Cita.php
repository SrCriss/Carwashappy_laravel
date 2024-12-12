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
    
     /* static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'nro_identificacion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'fecha_cita' => 'required',
		'hora_cita' => 'required',
		'id_servicio' => 'required',
  ];  */



    static $rules = [
        'nombre' => 'required|string|regex:/^[a-zA-Z\s]+$/',
        'apellido' => 'required|string|regex:/^[a-zA-Z\s]+$/',
        'telefono' => 'required|digits:10',
        'correo' => 'required|email',
        'fecha_cita' => [
            'required',
            'date',
            'after_or_equal:today',
        ],
        'hora_cita' => [
            'required',
            'date_format:H:i',
        ],
    ];

    public static function getDynamicRules($request)
    {
        return [
            'hora_cita' => [
                function ($attribute, $value, $fail) use ($request) {
                    $fecha = $request->fecha_cita;
                    // Valida que la hora no haya pasado
                    if ($fecha === date('Y-m-d') && $value < date('H:i')) {
                        $fail('La hora seleccionada ya pasó.');
                    }

                    // Valida que no exista una cita a la misma fecha y hora
                    if (Cita::where('fecha_cita', $fecha)->where('hora_cita', $value)->exists()) {
                        $fail('Ya existe una cita para esta fecha y hora.');
                    }
                },
            ],
        ];
    }




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
