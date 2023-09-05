@extends('sistema.layout')
@section('title','JAMB')
@section('content')


    <div class="row">
        <div class="col-sm-7">
            <img src="{{asset('storage/imagens/sobreadoc.png')}}" style="width: 1000px" />
        </div>
        <div class="col-sm-5" id="sobre">
            <div class="container">
                <p class="h4 text-center" style="color: #2B1998; margin-top: 75px; font-size: 70px"><b>Sobre as adoções</b></p>
                <p class="h1 text-start" style=" font-size: 30px; margin-left: 30px">O website JAMB é destinado para usuários que estão em busca de um novo companheiro.</p>
                <br>
                <p class="h1 text-start" style=" font-size: 40px; margin-left: 30px">O site possui uma seção para anunciar os pets que estão a espera de um lar. Caso você clique na imagem do animal, é apresentada mais informações sobre ele, além das suas características. Para adotar, basta clicar no botão de “Quero adotar” que o contato do doador estará a mostra para entrar em contato.</p>

            </div>
        </div>




@endsection