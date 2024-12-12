<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use App\Models\Servicio;
use Resend\Laravel\Facades\Resend;
use Illuminate\Support\Facades\Mail;

/**
 * Class CitaController
 * @package App\Http\Controllers
 */
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::paginate(10);

        return view('cita.index', compact('citas'))
            ->with('i', (request()->input('page', 1) - 1) * $citas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cita = new Cita();
        $servicios = Servicio::all();

        return view('cita.create', compact('cita', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array_merge(Cita::$rules, Cita::getDynamicRules($request)); 
        
        request()->validate($rules);

        $cita = Cita::create($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita creada con exito.');
    }

    public function storeCliente(Request $request)
    {
        $rules = array_merge(Cita::$rules, Cita::getDynamicRules($request)); 
        
        request()->validate($rules); 
        
        $cita = Cita::create($request->all());

        /* Enviar email a quien esta agendando la cita */
        
        Resend::emails()->send([
            'from' => 'Carwashappy <onboarding@resend.dev>',
            'to' => [$request->email],
            'subject' => 'Agenda de cita de Carwashappy',
            'html' => "<p>Hola que tal, has agendando una cita para el dia {{$request->fecha_cita}} a las , {{$request->hora_cita}} de nuestro servicios</p>",
        ]);
    
        return redirect()->route('cliente')
            ->with('success', 'Cita creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);

        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);

        $servicios = Servicio::all();

        return view('cita.edit', compact('cita', 'servicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        $rules = array_merge(Cita::$rules, Cita::getDynamicRules($request)); 
        
        request()->validate($rules);

        $cita->update($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita actualizada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cita = Cita::find($id)->delete();

        return redirect()->route('citas.index')
            ->with('success', 'Cita borrada con exito');
    }
}

