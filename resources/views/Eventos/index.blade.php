@extends('layout')

@section('viewBag')
Eventos
@endsection

@section('cabecalho')
    <div >
        <div>
                Eventos            
        </div>
        <a href="/eventos/create"><button class="btn btn-success mt-2">Novo Evento</button></a>  
        <a href="/"><button class="btn btn-outline-danger mt-2">voltar</button></a>            
    </div>
@endsection

@section('body')
    <div class="card-columns ">
        @foreach($eventos as $evento)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$evento->nome}}</h5>
                        <p class="card-text">{{$evento->data}}</p>
                        <p class="card-text">{{$evento->responsavel}}</p>          
                    </div>
                </div>
        @endforeach
    </div>
@endsection    
    
