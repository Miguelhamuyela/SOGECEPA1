@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Legislações')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h5 page-title">
                        Lista de Legislações
                    </h2>
                </div>

                <div class="col-md-6">
                    <a class="btn btn-primary btn-sm float-right" href="{{route('admin.legislationText.show')}}">Ver Texto em Legislação</a>
                    
                </div>
            </div>
           
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>TÍTULO</th>
                        <th>ARQUIVO</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($legislation as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td class="text-left">{{ $item->title }} </td>
                            <td> <a target="_blank" href="/storage/{{$item->file}}">Ver Arquivo</a> </td>
                            

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/legislacao/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/legislacao/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>

                                        <a  href='{{ url("admin/legislacao/delete/{$item->id}") }}' class="dropdown-item">
                                            Eliminar
                                        </a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

   

@endsection
