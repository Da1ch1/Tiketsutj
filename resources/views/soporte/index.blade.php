@extends('layouts.app')

@section('title','Soporte')

@section('content')
<section class="section">
    <div class="section-header">
        <h1 class="page__heading">Soporte Técnico</h1>
    </div>
</section>
    <div class="section-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="float-rigth  " style="margin-left: 25px">
                            <a href="{{ route('soportes.create') }}" class="btn btn-dark btn-sm float-right"  data-placement="right">
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
                            <table class="table table-striped table-hover  nowrap"   id="example">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Asunto</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Nombre</th>
										<th>Seguimiento</th>
										<th>Fecha Cierre</th>
										<th>Comentarios</th>
										<th>Atendio</th>
										<th>Estado</th>
										<th>Prioridad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($soportes as $soporte)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $soporte->asunto }}</td>
											<td>{{ $soporte->descripcion }}</td>
											<td>{{ $soporte->fecha }}</td>
											<td>{{ $soporte->nombre_cliente }}</td>
											<td>{{ $soporte->Seguimiento }}</td>
											<td>{{ $soporte->fecha_cierre }}</td>
											<td>{{ $soporte->comentarios }}</td>
											<td>{{ $soporte->user->name ?? 'Usuario eliminado' }}</td>
											<td>{{ $soporte->estado->estado}}</td>
											<td>{{ $soporte->prioridad->tipo_prioridad }}</td>
                                            <td></td>
                                            <td>
                                                <form action="{{ route('soportes.destroy',$soporte->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('soportes.show',$soporte->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('soportes.edit',$soporte->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger bg-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                    {!! $soportes->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
