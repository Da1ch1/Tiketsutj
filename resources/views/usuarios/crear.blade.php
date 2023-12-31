@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Alta de Usuarios</h1>
        </div>
    </section>        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert lert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                        @foreach ($errors->all() as $error)
                                            <span class="badge badge-danger">{{$error}}</span>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            @endif

                            {!! Form::open(array('route' => 'usuarios.store', 'method'=>'POST' )) !!}
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            {!!Form::text('name', null, array('class'=>'form-control'))!!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            {!!Form::text('email', null, array('class'=>'form-control'))!!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            {!!Form::password('password',  array('class'=>'form-control'))!!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="confirm-password">Confirmar Password</label>
                                            {!!Form::password('confirm-password', array('class'=>'form-control'))!!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Roles</label>
                                            {!!Form::select('roles[]', $roles,[], array('class'=>'form-control'))!!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn bg-primary btn-primary">Guardar</button>
                                    </div>
                                </div>

                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

