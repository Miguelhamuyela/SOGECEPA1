@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes das Imagens da Galeria')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.gallery.index') }}"><u>Listar Galerias</u></a> >

                {{ $insideGallery->category }}

            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="col-md-12">

                            <div class="row">



                                @foreach ($insideGallery->images as $item)
                                    <div class="col-md-4">


                                        <div class="card-deck mb-4">
                                            <div class="card border-0 bg-transparent">
                                                <div class="card-img-top img-fluid rounded"
                                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                                </div>

                                            </div> <!-- .card -->
                                            <div class="col-auto pr-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical text-dark"
                                                        type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-dark sr-only">Action</span>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1"
                                                        style="">
                                                        <a class="dropdown-item"
                                                            href='{{ url("admin/imagens-em-galeria/delete/$item->id") }}'>{{ $item->id }}
                                                            - Eliminar</a>

                                                            <a class="dropdown-item"
                                                            href='{{ url("admin/imagens-em-galeria/edit/$item->id") }}'>{{ $item->id }}
                                                            - Editar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .card-deck -->
                                            <div class="">
                                                <h5>{{ $item->title }}</h5>
                                            </div>
                                    </div>
                                @endforeach




                            </div>
                        </div>





                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>




@endsection
