@extends('sistema.layout')
@section('title','JAM')
@section('content')

<div class="container" style="margin-left: 15%">
         <div class="col-sm-6">
            <p class="h1 text-start" style="color: #2B1998; font-size: 100px; margin-left: 90px; margin-top: 40px; font-weight: bolder ">Adoções</p>
            <p class="h3 text-start" style="color: #656AA6; font-size: 50px;   font-style: Italic; align-Items: center "></p>
            
        </div>
        <p class="h1 text-start" style=" font-size: 20px;">Nesta seção você tem acesso aos animais que ainda estão esperando por um lar!
                Para cadastrar um animal que também está a procura de um lar ou saber mais sobre como funcionam as adoções escolha uma das opções abaixo:
                Ao adotar um bichinho, você estará salvando ele das ruas. 
            </p>

    <div style="display:flex; flex-direction: row">
        <a class="navbar-brand" href="/sobre">
            <div class="col-sm-4" id="botoes" style="display:flex; flex-direction: row">
                <p class="h4 text-start" style="color: white; margin-left: 40px">Sobre as adoções</p>
            </div>
        </a>
        <a class="navbar-brand" href="/cadastros/cadastrar">
            <div class="col-sm-4" id="botoes2" style="display:flex; flex-direction: row">
                <p class="h4 text-start" style="color: white; margin-left: 19px">Cadastrar um animal</p>
            </div>
        </a>
    </div>

    @if (count($cadastro) === 0)
    @else

    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
                        @foreach ($cadastro as $item => $value)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="/storage/{{ $value->arquivo }}" alt="Card image cap" >
                                <div class="card-body">
                                <h5>{{ $value['nome'] }}</h5>
                                <p class="card-text">{{ $value['idade'] }}</p>
                                <p class="card-text">{{ $value['raca'] }}</p>
                                <p class="card-text">{{ $value['sobre'] }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group" id="albumcachorro">
                                    <button type="button" style="color: #ffffff; font-size: 15px" class="btn btn-sm btn-outline-secondary">Quero Adotar</button>
                                    <div class="btn-group" id="botaofav">
                                    <button onclick="window.location.href='/favoritos';"  style="color: #ffffff; font-size: 15px;" type="button" class="btn btn-sm btn-outline-secondary">Favoritar</button>
                                    </div>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endif
    
@endsection