@extends('sistema.layout')
@section('title','JAM')
@section('content')

<div class="container" style="margin-right: 120px">
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
        <div class="album py-3">
            <div class="container" style="width: 50%">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    @if (count($cadastro) != 1)
                        <div class="carousel-indicators">
                            @foreach ($cadastro as $index => $item)
                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{ $index }}"
                                    @if ($index == 0) class="active cadastro-button" aria-current="true" @else class="cadastro-button" @endif
                                    aria-label={{ 'Slide' . ($index + 1) }}></button>
                            @endforeach
                        </div>
                    @endif
                    <div class="carousel-inner">
                        @foreach ($cadastro as $item => $value)
                            <div data-bs-interval="10"
                                @if ($item == 0) class="carousel-item active" @else class="carousel-item" @endif>
                                <img src="/storage/{{ $value->arquivo }}" alt="" class="d-block w-100 cadastro-img">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $value['nome'] }}</h5>
                                    <p>{{ $value['idade'] }}</p>
                                    <p>{{ $value['especie'] }}</p>
                                    <p>{{ $value['raca'] }}</p>
                                    <p>{{ $value['sexo'] }}</p>
                                    <p>{{ $value['porte'] }}</p>
                                    <p>{{ $value['sobre'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if (count($cadastro) != 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon cadastro-left-arrow" aria-hidden="true" ></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon cadastro-right-arrow" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    @endif


        <div class="col-sm-4">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Quero adotar!</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Favoritar
                                </button>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection