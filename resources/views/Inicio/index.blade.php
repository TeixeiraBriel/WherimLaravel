@extends('layout')

@section('viewBag')
    Inicio
@endsection

@section('cabecalho')
    Inicio
@endsection

@section('body')
    <div class="d-flex justify-content-center">
        <div class="list-group col-8 text-center">
            <a href="/eventos" class="list-group-item list-group-item-action">Eventos</a>
            <a href="/rotas" class="list-group-item list-group-item-action">Rotas</a>
        </div>
    </div>    
@endsection