@extends('sistema.layout')
@section('title','PetMatch')
@section('content')

<div class="container">
    <h1 class="py-4">Lista de PETs</h1>
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
                            <td>{{ $value['id'] }}</td>
                            <td>{{ $value['nome'] }}</td>
                            <td>{{ $value['idade'] }}</td>
                            <td>{{ $value['especie'] }}</td>
                            <td>{{ $value['raca'] }}</td>
                            <td>{{ $value['sexo'] }}</td>
                            <td>{{ $value['porte'] }}</td>
                            <td>{{ $value['sobre'] }}</td>
                            <td>{{ $value['arquivo'] }}</td>
                            <td>
                                <a href="/cadastros/editar/{{ $value['id'] }}" class="btn btn-primary">Editar</a>
                                <a href="/cadastros/deletar/{{ $value['id'] }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

@endsection