@extends('sistema.layout')
@section('title','JAMB')
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

    <div class="album py-5 bg-light" >
        <div class="container">
        @if (count($animal) == 0)
            <p style="text-align: center;">Não há PETs cadastrados</p>
            <a href="/cadastros/cadastrar" class="btn btn-success">Novo PET</a>
        @else
            <div class="card-body" style="margin-top: 50px;">
                <a href="/cadastros/cadastrar" class="btn btn-success">Novo cadastro</a>
                <table class="table table-ordered table-hover" id="tabelaCadastros">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>Idade</td>
                            <td>Espécie</td>
                            <td>Raça</td>
                            <td>Sexo</td>
                            <td>Porte</td>
                            <td>Sobre</td>
                            <td>Caminho da Imagem</td>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animal as $item => $value)
                            <tr>
                                <td>{{$value['id'] }}</td>
                                <td>{{$value['nome'] }}</td>
                                <td>{{$value['idade'] }}</td>
                                <td>{{$value['especie'] }}</td>
                                <td>{{$value['raca'] }}</td>
                                <td>{{$value['sexo'] }}</td>
                                <td>{{$value['porte'] }}</td>
                                <td>{{$value['sobre'] }}</td>
                                <td>{{$value['arquivo'] }}</td>
                                <td>
                                    <a href="/cadastros/editar/{{ $value['id'] }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <a href="/cadastros/deletar/{{ $value['id'] }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class ="text-muted">
        <div class ="container">
            <p class ="float-right ">
                <a href ="/">Voltar</a>
            </p>
            <p> ©2023 CEFET - MG Unidade Varginha </p >
            <p> Técnico em Informática </p >
            <p> Pojeto JAMB </p >
        </div>
    </footer>
    @endif
</div>

@endsection