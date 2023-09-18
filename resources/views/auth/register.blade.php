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
                     <label for="name">Nome:</label>
                </td>
                <td colspan="2">
                    <label for="sobrename">Sobrenome:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/boneco.svg')}}" /></td>
                <td><input type="text" class="form-control" name="name" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/boneco.svg')}}" /></td>
                <td><input type="text" class="form-control" name="sobrename" id="sobrenome" required></td>

            </tr>
            <tr>
                <td colspan="2">
                     <label for="email">E-mail:</label>
                </td>
                <td colspan="2">
                    <label for="telefone">Telefone/Celular:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/email.svg')}}" /></td>
                <td><input type="text" class="form-control" name="email" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/telefone.png')}}" /></td>
                <td><input type="text" class="form-control" name="telefone" id="nome" required></td>

            </tr>
            <tr>
                <td colspan="2">
                     <label for="password">Senha:</label>
                </td>
                <td colspan="2">
                    <label for="confirm-password">Confirmar senha:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/chaves.png')}}" /></td>
                <td><input type="password" class="form-control" name="senha" id="nome" required ></td>
                <td><img src="{{asset('storage/imagens/chaves.png')}}" /></td>
                <td><input type="password" class="form-control" name="confirm-password" id="nome" required></td>

            </tr>
            <tr>
                <td colspan="2">
                     <label for="CPF">CPF:</label>
                </td>
                <td colspan="2">
                    <label for="username">Nome de Usuário:</label>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('storage/imagens/cpf.png')}}" /></td>
                <td><input type="text" class="form-control"name="CPF" id="nome" required></td>
                <td><img src="{{asset('storage/imagens/arroba.png')}}" /></td>
                <td><input type="text" class="form-control" name="username" id="nome" required></td>

            </tr>
            <tr>
            <td colspan="2">
                <td><a href="/">
            <br>
            
            <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit" style="margin-right: 15px">Cadastrar</button></td>
            <!--<td><p style="color: black" id="titulo"><b>Já tem uma conta? <a style="color: black" href="{{ route('login') }}">Faça Login</a></b></p></td>-->       
            </tr>
            </form>
            </tbody>
        </table>
</div>
@endsection
@section('script')
    <script type="module">
        $().ready(function() {
            let numberMask = new Inputmask('+99(99)99999-9999')
            numberMask.mask('#telefone')
            let cpfMask = new Inputmask('999.999.999-99')
            cpfMask.mask('#CPF')
        });
    </script>
@endsection

