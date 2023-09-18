@extends('sistema.layout')
@section('title','JAMB')
@section('content')

<div class="cadastroanimal">
    <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
        <div>
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Editar animal</b></p>
    <div class="card-body container formdiv">

<div class="card-body container">
        <form action="/cadastros/{{$data->id}}" method="POST" id="bordaanimal" enctype="multipart/form-data">
            @csrf
            <table id="tabela">
            <tbody>
            <tr>
                <td colspan="2">
                     <label for="nome">Nome:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/pata.png')}}" /></td>
                <td><input type="text" name="nome" id="nome" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="idade">Idade:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/osso.png')}}" /></td>
                <td> <input type="number" name="idade" id="idade" min="0" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="especie">Espécie:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/catioro.png')}}" /></td>
                <td> <select name="especie" id="especie">
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Pássaro">Pássaro</option>
            </select></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="raca">Raça:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/pata.png')}}" /></td>
                <td> <input type="text" name="raca" id="raca"></td>
            </tr>
            <br>
            <br>
            <tr>
                <td colspan="2">
                <label for="sexo">Sexo:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/sexos .png')}}" /></td>
                <td> <select name="sexo" id="sexo">
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select></td>
            </tr>
            <tr>
                <td colspan="2">
                     <label for="porte">Porte:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/pata.png')}}" /></td>
                <td><select name="porte" id="porte">
                <option value="Pequeno">Pequeno</option>
                <option value="Médio">Médio</option>
                <option value="Grande">Grande</option>
            </select></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="sobre">Sobre:</label>
                </td>
            </tr>
            <tr>
            <td><img src="{{asset('storage/imagens/sobre.png')}}" /></td>
            <td><textarea name="sobre" id="sobre" max="255" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="arquivo">Imagem:</label>
                </td>
            </tr>
            <tr>
            <td><img src="{{asset('storage/imagens/pata.png')}}" /></td>
            <td><input type="file" name="arquivo" id="arquivo"></td>
            </tr>
            <tr>
            <td colspan="2">
                <td><a href="/">
          <button onclick="window.location.href='/';" class="btn btn-primary my-2 my-sm-0"; id= "botaocads" type="button" style="margin-right: 15px">Cancelar</button>
        </a>
    </td>
                </td>
            <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit" style="margin-right: 15px">Salvar</button></td>
            </tr>
        </form>
    </div>
@endsection
