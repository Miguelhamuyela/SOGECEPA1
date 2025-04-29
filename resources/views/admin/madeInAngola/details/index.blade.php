@extends('layouts.merge.dashboard')
@section('titulo', 'Ver Detalhes Sobre Feito em Angola')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Detalhes Sobre Feito em Angola
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($madeInAngola)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/feito-em-angola/edit/{$madeInAngola->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>
    @isset($madeInAngola)


        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">
                        
                     
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 ">
                                <b>Texto:</b><br>
                                <div>
                                    {!!html_entity_decode($madeInAngola->body)!!}
                                </div>
                            </p>
                        </div>

                        <div class="col-md-12 my-3">
                            

                                <img class="img-fluid" src="/storage/{{$madeInAngola->image}}" alt="">


                        </div>

                     
                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 "><b>Data de Cadastro:</b> {{ $madeInAngola->created_at }}
                            </p>
                            <p class="mb-1 "><b>Última Actualização:</b> {{ $madeInAngola->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection
