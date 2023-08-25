@extends('sistema.layout')
@section('title','PetMatch')
@section('content')

<div class="card-body container">
        <h1 class="py-4">Editar Cadastro</h1>
        <form action="/cadastros/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do PET:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{$data->nome}}">
                <label for="idade">Idade do PET:</label>
                <input type="text" class="form-control" name="idade" id="idade" value="{{$data->idade}}">
                <label for="especie">Espécie do PET:</label>
                <input type="text" class="form-control" name="especie" id="especie" value="{{$data->especie}}">
                <label for="raca">Raça do PET:</label>
                <input type="text" class="form-control" name="raca" id="raca" value="{{$data->raca}}">
                <label for="sexo">Sexo do PET:</label>
                <input type="text" class="form-control" name="sexo" id="sexo" value="{{$data->sexo}}">
                <label for="porte">Porte do PET:</label>
                <input type="text" class="form-control" name="porte" id="porte" value="{{$data->porte}}">
                <label for="sobre">Descrição do PET:</label>
                <input type="text" class="form-control" name="sobre" id="sobre" value="{{$data->sobre}}">
                <label for="arquivo">Imagem da PET:</label>
                <input type="file" class="form-control" name="arquivo" id="arquivo">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </form>
    </div>

@endsection