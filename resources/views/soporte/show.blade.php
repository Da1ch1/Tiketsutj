@extends('layouts.app')

@section('template_title')
    {{ $soporte->name ?? "{{ __('Show') Soporte" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Soporte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('soportes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $soporte->asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $soporte->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $soporte->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $soporte->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Seguimiento:</strong>
                            {{ $soporte->Seguimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Cierre:</strong>
                            {{ $soporte->fecha_cierre }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $soporte->comentarios }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $soporte->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Id:</strong>
                            {{ $soporte->estado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Prioridad Id:</strong>
                            {{ $soporte->prioridad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
