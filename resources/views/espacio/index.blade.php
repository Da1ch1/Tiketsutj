@extends('layouts.app')

@section('title','Espacio')



@section('content')
<section class="section">
    <div class="section-header">
        <h1 class="page__heading">Espacios y Aulas</h1>
    </div>
</section>  
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-left mb-3 " style="margin-left: 25px">
                            <a href="{{ route('espacios.create') }}" class="btn btn-dark btn-sm float-right"  data-placement="left">
                            {{ __('Crear Nuevo') }}
                            </a>
                        </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Atendio</th>
										<th>Fecha Solicitud</th>
										<th>Fecha Uso</th>
										<th>Hora Inicio</th>
										<th>Hora Fin</th>
										<th>Propocito</th>
										<th>Tipo de espacio</th>
										<th>Nombre Solicitante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($espacios as $espacio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $espacio->user->name ?? 'Usuario eliminado' }}</td>
											<td>{{ $espacio->Fecha_solicitud }}</td>
											<td>{{ $espacio->Fecha_uso }}</td>
											<td>{{ $espacio->Hora_inicio }}</td>
											<td>{{ $espacio->Hora_fin }}</td>
											<td>{{ $espacio->Propocito }}</td>
											<td>{{ $espacio->tipo_id }}</td>
											<td>{{ $espacio->Nombre_solicitante }}</td>

                                            <td>
                                                <form action="{{ route('espacios.destroy',$espacio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('espacios.show',$espacio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('espacios.edit',$espacio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                                  {!! $espacios->links() !!}
                   </div>
                </div>

            </div>
        </div>
    </div>
@endsection
