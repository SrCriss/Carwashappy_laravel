
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $cita->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('apellido') }}</label>
    <div>
        {{ Form::text('apellido', $cita->apellido, ['class' => 'form-control' .
        ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
        {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nro_identificacion') }}</label>
    <div>
        {{ Form::text('nro_identificacion', $cita->nro_identificacion, ['class' => 'form-control' .
        ($errors->has('nro_identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Nro Identificacion']) }}
        {!! $errors->first('nro_identificacion', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $cita->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $cita->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_cita') }}</label>
    <div>
        {{ Form::date('fecha_cita', $cita->fecha_cita, ['class' => 'form-control' .
        ($errors->has('fecha_cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita']) }}
        {!! $errors->first('fecha_cita', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('hora_cita') }}</label>
    <div>
        {{ Form::time('hora_cita', $cita->hora_cita, ['class' => 'form-control' .
        ($errors->has('hora_cita') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cita']) }}
        {!! $errors->first('hora_cita', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>

<div class="form-group mb-3">
    {{ Form::label('id_servicio', 'Servicio', ['class' => 'form-label']) }}
    {{ Form::select(
        'id_servicio',
        $servicios->mapWithKeys(function ($servicio) {
            return [$servicio->id => $servicio->nombre_servicio . ' - $' . number_format($servicio->precio_servicio, 0, ',', '.')];
        }),
        $cita->id_servicio ?? null,
        ['class' => 'form-select' . ($errors->has('id_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un Servicio']
    ) }}
    {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</div>') !!}
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{Route('citas.index')}}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
