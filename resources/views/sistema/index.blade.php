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

    <div class="col-sm-4">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Quero adotar!</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Favoritar</button>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Quero adotar!</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Favoritar</button>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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