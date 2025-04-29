@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre a AGT - Imposto Predial (IP)')

@section('content')



    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h2 class="h5 page-title">
                                            Detalhes Sobre a AGT - Imposto Predial (IP)
                                        </h2>
                                    </div>
                                    <div class="col-auto">
                                        @isset($agt)
                                            <a type="button" class="btn btn-sm btn-primary text-white"
                                                href="{{ url("admin/agt-imposto-predial/edit/{$agt->id}") }}">
                                                <span class="fe fe-edit fe-16 mr-2"></span>Editar
                                            </a>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">


                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1 ">
                                            <b>Texto:</b><br>
                                        <div>
                                            {!! html_entity_decode($agt->body) !!}
                                        </div>
                                        </p>
                                    </div>



                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $agt->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $agt->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>




@endsection
