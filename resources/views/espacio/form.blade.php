<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $espacio->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_solicitud') }}
            {{ Form::text('Fecha_solicitud', $espacio->Fecha_solicitud, ['class' => 'form-control' . ($errors->has('Fecha_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Solicitud']) }}
            {!! $errors->first('Fecha_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_uso') }}
            {{ Form::text('Fecha_uso', $espacio->Fecha_uso, ['class' => 'form-control' . ($errors->has('Fecha_uso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Uso']) }}
            {!! $errors->first('Fecha_uso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_inicio') }}
            {{ Form::text('Hora_inicio', $espacio->Hora_inicio, ['class' => 'form-control' . ($errors->has('Hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('Hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_fin') }}
            {{ Form::text('Hora_fin', $espacio->Hora_fin, ['class' => 'form-control' . ($errors->has('Hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('Hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Propocito') }}
            {{ Form::text('Propocito', $espacio->Propocito, ['class' => 'form-control' . ($errors->has('Propocito') ? ' is-invalid' : ''), 'placeholder' => 'Propocito']) }}
            {!! $errors->first('Propocito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_id') }}
            {{ Form::text('tipo_id', $espacio->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_solicitante') }}
            {{ Form::text('Nombre_solicitante', $espacio->Nombre_solicitante, ['class' => 'form-control' . ($errors->has('Nombre_solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Solicitante']) }}
            {!! $errors->first('Nombre_solicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>