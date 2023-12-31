@extends('layouts.app')

@section('title','Editar Roles')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Rol</h3>
        </div>
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

                        {!! Form::model($role,['method'=>'PATCH','route'=>['roles.update',$role->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre del Rol</label>
                                        {!!Form::text('name', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Permisos para los Roles</label>
                                        <br/>
                                        @foreach ($permission->take(4) as $value)
                                        <label>
                                            {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                            {{ $value->name }}
                                        </label>
                                        <br/>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Permisos para este Rol de Usuario</label>
                                        <br/>
                                        @foreach ($permission->skip(4)->take(4) as $value)
                                            <label>{{Form::checkbox('permission[]',$value->id, in_array($value->id, $rolePermissions)? true : false, array('class' => 'name'))}}
                                            {{$value->name}}</label>
                                        <br/>    
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Permisos para este Rol de Departamento</label>
                                        <br/>
                                        @foreach ($permission->skip(8)->take(4) as $value)
                                            <label>{{Form::checkbox('permission[]',$value->id, in_array($value->id, $rolePermissions)? true : false, array('class' => 'name'))}}
                                            {{$value->name}}</label>
                                        <br/>    
                                        @endforeach
                                    </div>
                                </div>
                            </div>    
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                        {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

