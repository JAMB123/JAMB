@extends('sistema.layout')
@section('content')


<div class="containerCadastro">
    <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
        <div class="container">
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastre-se </b></p>
            <form method="POST" action="{{ route('register') }}" id="bordaform">
                @csrf
                <table id="tabela2">
                    <tbody>
                    <tr>
                <td colspan="2">
                     <label for="nome">Nome:</label>
                </td>
                <td colspan="2">
                    <label for="nome">Sobrenome:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/boneco.svg')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/boneco.svg')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>

            </tr>
            <tr>
                <td colspan="2">
                     <label for="nome">E-mail:</label>
                </td>
                <td colspan="2">
                    <label for="nome">Telefone/Celular:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/email.svg')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/telefone.png')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>

            </tr>
            <tr>
                <td colspan="2">
                     <label for="nome">Senha:</label>
                </td>
                <td colspan="2">
                    <label for="nome">Confirmar senha:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/chaves.png')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/chaves.png')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>

            </tr>
            <tr>
                <td colspan="2">
                     <label for="nome">CPF:</label>
                </td>
                <td colspan="2">
                    <label for="nome">Nome de Usuário:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/cpf.png')}}" /></td>
                <td><input type="text" class="form-control"name="nome" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/arroba.png')}}" /></td>
                <td><input type="text" class="form-control" name="nome" id="nome" required></td>

            </tr>
            <tr>
            <td colspan="2">
                <td><a href="/">
            
            <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit" style="margin-right: 15px">Cadastrar</button></td>
            <!--<td><p style="color: black" id="titulo"><b>Já tem uma conta? <a style="color: black" href="{{ route('login') }}">Faça Login</a></b></p></td>-->       
            </tr>
                
     
            </form>
            </tbody>
        </table>
</div>

    
        
    
@endsection
