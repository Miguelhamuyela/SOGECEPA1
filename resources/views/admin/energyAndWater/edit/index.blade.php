@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Informações Sobre Energia e Águas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Editar
                Informações Sobre Energia e Águas
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action='{{ url("admin/energia-e-aguas/update/{$energyAndWater->id}") }}' method="POST"
                enctype="multipart/form-data" class="row">
                @csrf
                @method('PUT')
                @include('forms._formEnergyAndWater.index')
                <div class="col-md-12">

                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4  btn-primary">
                            Salvar alterações
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>
            </form>


        </div>
    </div>



@endsection
