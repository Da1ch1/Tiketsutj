@extends('layouts.app')

@section('template_title')
    {{ $espacio->name ?? "{{ __('Show') Espacio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Espacio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('espacios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $espacio->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Solicitud:</strong>
                            {{ $espacio->Fecha_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Uso:</strong>
                            {{ $espacio->Fecha_uso }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $espacio->Hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $espacio->Hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Propocito:</strong>
                            {{ $espacio->Propocito }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id:</strong>
                            {{ $espacio->tipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Solicitante:</strong>
                            {{ $espacio->Nombre_solicitante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
