@extends('layouts.app')

@section('title','Prioridad')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prioridad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('prioridads.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
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
                                        
										<th>Tipo Prioridad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prioridads as $prioridad)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $prioridad->tipo_prioridad }}</td>

                                            <td>
                                                <form action="{{ route('prioridads.destroy',$prioridad->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('prioridads.show',$prioridad->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('prioridads.edit',$prioridad->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn bg-danger btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $prioridads->links() !!}
            </div>
        </div>
    </div>
@endsection
