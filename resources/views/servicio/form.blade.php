
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_servicio') }}</label>
    <div>
        {{ Form::text('nombre_servicio', $servicio->nombre_servicio, ['class' => 'form-control' .
        ($errors->has('nombre_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Servicio']) }}
        {!! $errors->first('nombre_servicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">servicio <b>nombre_servicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion_servicio') }}</label>
    <div>
        {{ Form::text('descripcion_servicio', $servicio->descripcion_servicio, ['class' => 'form-control' .
        ($errors->has('descripcion_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Servicio']) }}
        {!! $errors->first('descripcion_servicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">servicio <b>descripcion_servicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_servicio') }}</label>
    <div>
        {{ Form::text('precio_servicio', $servicio->precio_servicio, ['class' => 'form-control' .
        ($errors->has('precio_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Precio Servicio']) }}
        {!! $errors->first('precio_servicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">servicio <b>precio_servicio</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{Route('servicios.index')}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
