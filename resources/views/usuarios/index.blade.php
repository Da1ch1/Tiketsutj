@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Usuarios</h1>
        </div>
    </section>        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                <a class="btn btn-dark" href="{{route('usuarios.create')}}">Nuevo</a>
                                <div class="card-body">
                                    <div class="table-responsive">
                                            <table class="table table-striped mt-2">
                                                <thead style="background-color: #8b8b8b;">
                                                    <th style="display: none;">ID</th>
                                                    <th style="color:#fff;">Nombre</th>
                                                    <th style="color:#fff;">E-mail</th>
                                                    <th style="color:#fff;">Rol</th>
                                                    <th style="color:#fff;">Acciones</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($usuarios as $usuario)
                                                        <tr>
                                                            <td style="display: none">{{$usuario->id}}</td>
                                                            <td>{{$usuario->name}}</td>
                                                            <td>{{$usuario->email}}</td>
                                                            <td>
                                                                @if(!empty($usuario->getRoleNames()))
                                                                    @foreach ($usuario->getRoleNames() as $rolName)
                                                                    <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                                                    @endforeach
                                                                @endif    
                                                            </td>
                                                            <td>
                                                                <a class="btn-sm btn-info" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>

                                                                
                                                                {!! Form::open(['method'=>'DELETE', 'route'=> ['usuarios.destroy', $usuario->id], 'style'=>'display:inline'])!!}
                                                                    {!! Form::submit('Borrar', ['class'=>'btn-sm btn-danger bg-dark'])!!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                    </div>
                                </div>                
                                <div class="pagination justify-content-end">
                                    {!! $usuarios->links()!!}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

