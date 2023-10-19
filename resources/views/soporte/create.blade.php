@extends('layouts.app')

@section('title','Crear')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <span class="card-title">{{ __('Create') }} Soporte</span>
                        <div class="float-right mb-3" style="margin-right: 25px">
                            <a href="{{ route('estados.create') }}" class="btn btn-dark btn-sm float-right"  data-placement="left">
                              {{ __('Estado') }}
                            </a>
                            <a href="{{ route('prioridads.create') }}" class="btn btn-dark btn-sm mr-2 float-right"  data-placement="left">
                                {{ __('Prioridad') }}
                              </a>
                          </div>
                    </div>
                    
                    <div class="card-body ">
                        <form method="POST" action="{{ route('soportes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('soporte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
