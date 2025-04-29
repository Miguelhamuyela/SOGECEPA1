@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Legislação')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            
             
                    <h2 class="h5 page-title">
                        <a href="{{ route('admin.legislation.index') }}"><u>Listar Legislações</u></a> > {{ $legislation->title }}
                    </h2>
                

               
            
            


        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 col-md-6 col-lg-6 my-5">

                                <div class="col-12 mb-3">
                                    <h4 class=" page-title">Título: </h4>
                                    <h5 class="text-dark">{{ $legislation->title }}</h5>
                                </div>

                                <div class="col-12 mb-3">
                                    <h4 class="page-title">Descrição da Legislação:</h4>
                                         <p class="text-dark">
                                           {!!html_entity_decode($legislation->body)!!}
                                         </p>
                                        
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <h5 class="mb-1">
                                        <b>Arquivo:</b>
                                        
                                    </h5>

                                    <a  class="text-dark" target="_blank" href="/storage/{{$legislation->file}}">Ver Arquivo</a>
                                </div>
                            
                          
                            </div>

                     
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <hr>
                                <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $legislation->created_at }}
                                </p>
                                <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $legislation->updated_at }}
                                </p>

                            </div>
                        </div>


                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>



@endsection
