@extends('layouts.app')

@section('template_title')
    {{ $prioridad->name ?? "{{ __('Show') Prioridad" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prioridad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prioridads.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Prioridad:</strong>
                            {{ $prioridad->tipo_prioridad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
