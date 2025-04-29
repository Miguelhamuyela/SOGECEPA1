@extends('layouts.merge.dashboard')
@section('titulo', 'Corridor do Lobito')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Corridor do Lobito
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($lobitoCorridor)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/corredor-do-lobito/edit/{$lobitoCorridor->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Texto Sobre Corridor do Lobito
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($lobitoCorridor)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">



                        <div class="col-md-12 mb-2">

                            <b>Corridor do Lobito:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($lobitoCorridor->body) !!}
                            </p>
                        </div>



                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $lobitoCorridor->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $lobitoCorridor->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset





@endsection
