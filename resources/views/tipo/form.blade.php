<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_espacio') }}
            {{ Form::text('tipo_espacio', $tipo->tipo_espacio, ['class' => 'form-control' . ($errors->has('tipo_espacio') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Espacio']) }}
            {!! $errors->first('tipo_espacio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>