
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_usuario') }}</label>
    <div>
        {{ Form::text('nombre_usuario', $usuario->nombre_usuario, ['class' => 'form-control' .
        ($errors->has('nombre_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Usuario']) }}
        {!! $errors->first('nombre_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>nombre_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('correo') }}</label>
    <div>
        {{ Form::text('correo', $usuario->correo, ['class' => 'form-control' .
        ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
        {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>correo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('contraseña') }}</label>
    <div>
        {{ Form::text('contraseña', $usuario->contraseña, ['class' => 'form-control' .
        ($errors->has('contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
        {!! $errors->first('contraseña', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>contraseña</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $usuario->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('placa_vehiculo') }}</label>
    <div>
        {{ Form::text('placa_vehiculo', $usuario->placa_vehiculo, ['class' => 'form-control' .
        ($errors->has('placa_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Placa Vehiculo']) }}
        {!! $errors->first('placa_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>placa_vehiculo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_vehiculo') }}</label>
    <div>
        {{ Form::text('tipo_vehiculo', $usuario->tipo_vehiculo, ['class' => 'form-control' .
        ($errors->has('tipo_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Vehiculo']) }}
        {!! $errors->first('tipo_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>tipo_vehiculo</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
