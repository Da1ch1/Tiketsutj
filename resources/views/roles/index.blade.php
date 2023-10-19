@extends('layouts.app')

@section('title','Roles')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           @can('crear-rol')
                               <a class="btn btn-dark" href="{{route('roles.create')}}">Nuevo</a>
                           @endcan
                           <table class="table table-striped mt-2">
                            <thead style="background-color: #8b8b8b;">
                                <th style="color:#fff;">Rol</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{$role->name}}</td>
                                        <td>
                                        @can('editar-rol')
                                            <a class="btn-sm btn-info" href="{{route('roles.edit', $role->id)}}">Editar</a>
                                        @endcan    

                                        @can('borrar-rol')   
                                            {!! Form::open(['method'=>'DELETE', 'route'=> ['roles.destroy', $role->id], 'style'=>'display:inline'])!!}
                                                {!! Form::submit('Borrar', ['class'=>'btn-sm btn-danger bg-dark'])!!}
                                            {!! Form::close()!!}
                                        @endcan    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                            <div class="pagination justify-content-end">
                                {!!$roles->links()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

