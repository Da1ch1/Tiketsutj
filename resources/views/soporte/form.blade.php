<!-- Incluir la biblioteca Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('asunto') }}
            {{ Form::text('asunto', $soporte->asunto, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
            {!! $errors->first('asunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $soporte->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $soporte->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $soporte->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Seguimiento') }}
            {{ Form::text('Seguimiento', $soporte->Seguimiento, ['class' => 'form-control' . ($errors->has('Seguimiento') ? ' is-invalid' : ''), 'placeholder' => 'Seguimiento']) }}
            {!! $errors->first('Seguimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_cierre') }}
            {{ Form::text('fecha_cierre', $soporte->fecha_cierre, ['class' => 'form-control' . ($errors->has('fecha_cierre') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cierre']) }}
            {!! $errors->first('fecha_cierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $soporte->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Usuario') }}
            {{ Form::select('user_id', $users, $soporte->user_id, ['class' => 'form-control select2' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => '--Seleccione usuario--', 'id' => 'user-select']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('Estatus') }}
            {{ Form::select('estado_id', $estado, $soporte->estado_id, ['class' => 'form-control' . ($errors->has('estado_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('estado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-3">
            {{ Form::label('prioridad_id') }}
            {{ Form::select('prioridad_id',$prioridad, $soporte->prioridad_id, ['class' => 'form-control' . ($errors->has('prioridad_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('prioridad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn bg-success btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#user-select').select2({
            placeholder: 'Buscar usuario',
            allowClear: true,
            minimumInputLength: 3, // Número mínimo de caracteres para iniciar la búsqueda
            ajax: {
                url: '/buscar-usuarios', // Ruta para obtener los usuarios según la búsqueda
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    });
</script>