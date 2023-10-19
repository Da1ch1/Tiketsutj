<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_prioridad') }}
            {{ Form::text('tipo_prioridad', $prioridad->tipo_prioridad, ['class' => 'form-control' . ($errors->has('tipo_prioridad') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Prioridad']) }}
            {!! $errors->first('tipo_prioridad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn bg-success btn-primary">{{ __('Submit') }}</button>
    </div>
</div>