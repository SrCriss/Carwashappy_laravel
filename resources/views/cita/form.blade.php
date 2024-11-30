<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('fecha_cita') }}</label>
    <div>
        <!--{{ Form::text('fecha_cita', $cita->fecha_cita, ['class' => 'form-control' .
        ($errors->has('fecha_cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita']) }}
        {!! $errors->first('fecha_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>fecha_cita</b> instruction.</small> -->

        <div>
            <x-flat-picker name="fecha_cita" value="{{ old('fecha_cita', $cita->fecha_cita) }}"
                class="form-control {{ $errors->has('fecha_cita') ? 'is-invalid' : '' }}" placeholder="Fecha Cita" />
            @if($errors->has('fecha_cita'))
                <div class="invalid-feedback">
                    {{ $errors->first('fecha_cita') }}
                </div>
            @endif
            <small class="form-hint">cita <b>fecha_cita</b> instruction.</small>
        </div>

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('hora_cita') }}</label>
    <div>
        {{ Form::time('hora_cita', $cita->hora_cita, [
    'class' => 'form-control' .
        ($errors->has('hora_cita') ? ' is-invalid' : ''),
    'placeholder' => 'Hora Cita'
]) }}
        {!! $errors->first('hora_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>hora_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('estado_cita') }}</label>
    <div>
        {{ Form::text('estado_cita', $cita->estado_cita, [
    'class' => 'form-control' .
        ($errors->has('estado_cita') ? ' is-invalid' : ''),
    'placeholder' => 'Estado Cita'
]) }}
        {!! $errors->first('estado_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>estado_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $cita->id_usuario, [
    'class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''),
    'placeholder' => 'Id Usuario'
]) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('id_servicio') }}</label>
    <div>
        {{ Form::text('id_servicio', $cita->id_servicio, [
    'class' => 'form-control' .
        ($errors->has('id_servicio') ? ' is-invalid' : ''),
    'placeholder' => 'Id Servicio'
]) }}
        {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cita <b>id_servicio</b> instruction.</small>
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