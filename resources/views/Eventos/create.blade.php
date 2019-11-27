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

<div class="container ">
        <form method="post">
        @csrf
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Nome" name="nome">
                </div>
            </div>
            <div class="row justify-content-md-center mt-2">
                <div class="col-md-6">
                    <input type="date" class="form-control" placeholder="Data" name="data">
                </div>
            </div>              
            <div class="row justify-content-md-center mt-2">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Responsavel" name="responsavel" id="responsavel">
                </div>
            </div>        
            <div class="row justify-content-md-center mt-2">
                <button type="submit" class="btn btn-primary">Adicionar</button>    
            </div>

            

        </form>    
    </div>
    
@endsection    