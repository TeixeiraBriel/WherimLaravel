@extends('layout')

@section('viewBag')
    Rotas
@endsection

@section('cabecalho')
    <div >
        <div>
                Rotas            
        </div>
        <a href="/"><button class="btn btn-outline-danger mt-2">voltar</button></a>            
    </div>
@endsection

@section('body')
    <div class="row">
        <div class="col">
        <input id="atual" type="text" class="form-control" placeholder="Local de Partida">
        </div>
        <div class="col">
        <input id="destino" type="text" class="form-control" placeholder="Destino">
        </div>
        <button class="btn btn-secondary mr-2" onclick="caminhoNovo()">Traçar Rota</button>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resetar
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" onclick="resetTerceiro()" href="#">3º Andar</a>
            <a class="dropdown-item" onclick="resetQuarto()" href="#">4º Andar</a>
        </div>
    </div>
    <div class="row">
        <div class="row">
                <img id="img" src='img/MapaBranco3.jpg' class="img-fluid mx-auto d-block" >

        </div>
    </div>
@endsection

@section('script')
    <script>
        function resetTerceiro() {
            var pa = document.querySelector("#atual").value;
            var dest = document.querySelector("#destino").value;
            var final = "img/MapaBranco3.jpg";
            document.querySelector("#atual").value = "";
            document.querySelector("#destino").value = "";
            //document.querySelector("#ultimoAtual").value = "sem buscas";
            //document.querySelector("#ultimoDestino").value = "sem buscas";
            document.querySelector("#img").src = final;
        }

        function resetQuarto() {
            var pa = document.querySelector("#atual").value;
            var dest = document.querySelector("#destino").value;
            var final = "img/MapaBranco4.png";
            document.querySelector("#atual").value = "";
            document.querySelector("#destino").value = "";
            //document.querySelector("#ultimoAtual").value = "sem buscas";
            //document.querySelector("#ultimoDestino").value = "sem buscas";
            document.querySelector("#img").src = final;
        }

        function caminhoNovo() {
            var pa = document.querySelector("#atual").value;
            var dest = document.querySelector("#destino").value;
            var final = "img/" + pa + dest + ".jpg";
            //document.querySelector("#ultimoAtual").value = pa;
            //document.querySelector("#ultimoDestino").value = dest;

            document.querySelector("#atual").value = "";
            document.querySelector("#destino").value = "";
            document.querySelector("#img").src = final;
        }
    </script>
@endsection