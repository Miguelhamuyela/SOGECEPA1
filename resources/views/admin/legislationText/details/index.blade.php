@extends('layouts.merge.dashboard')
@section('titulo', 'Texto Em Legislação')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            <a href="{{ route('admin.legislation.index') }}"><u>Listar Legislações</u></a> >  Texto Em Legislação
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($legislationText)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/texto-em-legislacao/edit/{$legislationText->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Texto em Legislação
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($legislationText)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">

                   

                        <div class="col-md-12 mb-2">

                            <b>Texto Em Legislação:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($legislationText->body) !!}
                            </p>
                        </div>



                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $legislationText->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $legislationText->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset





@endsection