@extends('sistema.layout')
@section('title','PetMatch')
@section('content')
<!doctype html>
<html lang ="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf -8">
    <meta name="csrf-token" content=" {{ csrf_token () }}" >
    @vite(['resources/js/app.js'])
    <title> Adoções </title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
            padding-top:var(--jumbotron-padding-y);
            padding-bottom: var(--jumbotron-padding-y);
            margin-bottom: 0;
            background-color: #fff;
        }
        @media (min-width: 768px) {
            .jumbotron {
                padding-top: calc(var(--jumbotron-padding-y) * 2);
                padding-bottom: calc(var(--jumbotron-padding-y) * 2);
            }
        }
        .jumbotron p:last-child {margin-bottom: 0;}
        .jumbotron-heading {font-weight: 300;}
        .jumbotron.container {max-width: 40rem;}
        .btn-card { margin: 4px;}
        .btn { margin-right: 5px;}
        footer { padding-top: 3rem ; padding-bottom: 3rem;}
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>

    <main role="main">
        
        <section class ="jumbotron text-center">
            <div class ="container">
            <h1 class ="jumbotron-heading"> Fale Aqui Sobre o Pet </h1>
            <form method ="POST" action ="/" enctype="multipart/form-data">
                @csrf
                <div class="custom-file">
                    <input type="file" class ="custom-file-input" id ="arquivo" name=" arquivo">
                    <label class="custom-file-label" id ="RotuloArquivo" for="arquivo"> Escolha um arquivo </label>
                </div>
                <div class="form-group text-left">
                    <label for="mensagem">Descrição do Pet </label>cadastro
                    <textarea class =" form - control" id =" mensagem" name ="mensagem" rows="3 " > </textarea>
                </div>
                <p>
                    <button type ="submit" class =" btn btn-primary my -2 "> Enviar </button>
                    <button type =" reset " class =" btn btn-secondary my -2"> Cancelar </button >
                </p>
            </form>
            </div>
        </section>

        <div class=" album py-5 bg-light" >
            <div class="container">
                <div class="row">
                 @foreach( $posts as $post )
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                            <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{ $post->arquivo}}">
                                <div class="card-body">
                                    <p class="card-text">{{$post->name}} </p>
                                    <p class="card-text" >{{$post->idade}} </p>
                                    <p class="card-text" >{{$post->especie}} </p>
                                    <p class="card-text" >{{$post->raca}} </p>
                                    <p class="card-text" >{{$post->sexo}} </p>
                                    <p class="card-text" >{{$post->porte}} </p>
                                    <p class="card-text" >{{$post->sobre}} </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <form method="POST" action ="/{{ $post->id }}">
                                            @csrf
                                            <input type="hidden" name="_method" value ="delete">
                                            <button type="submit" class ="btn btn-sm btn-outline-danger">Apagar</button >
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </main>
    <footer class =" text-muted ">
        <div class ="container">
            <p class ="float-right ">
                <a href ="#" >Voltar </a>
            </p>
            <p> ©2023 CEFET - MG Unidade Varginha </p >
            <p> Técnico em Informática </p >
            <p> Aplicações Web II </p >
        </div>
    </footer>
</body>
</html>
@endsection