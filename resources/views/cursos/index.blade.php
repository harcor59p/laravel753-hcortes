@extends('layouts.app')

@section('titulo', 'Listado Cursos')

@section('Contenido')

<div class="row">
    {{-- Vamos a intrerpolar la informacion de php--}}
    @foreach ( $cursito as $curso )
    <div class="col-sm">
        <div class="card">
            <img class="card-img-top" src="{{Storage::url($curso->imagen)}}" alt="" width="500" height="300">
            <div class="card-body">
                <h5 class="card-title">{{$curso->nombre}}</h5>
                <p class="card-text">{{$curso->descripcion}}</p>
                <a name="" id="" class="btn btn-danger" href="#" role="button">Ver mas</a>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection
