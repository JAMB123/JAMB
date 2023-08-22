@extends('sistema.layout')
@section('content')


<div class="containerCadastro">
    <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
        <div class="container">
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastre-se </b></p>
            <form method="POST" action="{{ route('register') }}" id="bordaform">
                @csrf
                <div class="row g-5">
                    <div class="col-md-6" id="bloco1">
                        <div style="margin-top: 30px">
                            <label for="nome">Nome:</label>
                            <input id="nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="sobrenome">Sobrenome:</label>
                            <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="name" autofocus placeholder="Sobrenome">
                            @error('sobrenome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="Telefone">Telefone/Celular:</label>
                            <input id="Telefone" type="text" class="form-control @error('Telefone/Celular') is-invalid @enderror" name="Telefone/Celular" value="{{ old('Telefone/Celular') }}" required autocomplete="name" autofocus placeholder="Telefone/Celular">
                            @error('Telefone/Celular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="CPF">CPF:</label>
                            <input id="CPF" type="text" class="form-control @error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" required autocomplete="name" autofocus placeholder="CPF">
                            @error('CPF')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="col-md-6" id="bloco2">
                        <div style="margin-top: 30px">
                        <label for="nome">Nome:</label>
                            <input id="nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="sobrenome">Sobrenome:</label>
                            <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="name" autofocus placeholder="Sobrenome">
                            @error('sobrenome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="Telefone">Telefone/Celular:</label>
                            <input id="Telefone" type="text" class="form-control @error('Telefone/Celular') is-invalid @enderror" name="Telefone/Celular" value="{{ old('Telefone/Celular') }}" required autocomplete="name" autofocus placeholder="Telefone/Celular">
                            @error('Telefone/Celular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="Telefone">Telefone/Celular:</label>
                            <input id="Telefone" type="text" class="form-control @error('Telefone/Celular') is-invalid @enderror" name="Telefone/Celular" value="{{ old('Telefone/Celular') }}" required autocomplete="name" autofocus placeholder="Telefone/Celular">
                            @error('Telefone/Celular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                        </div>      
                    <div class="h5 text-center">
                        <p style="color: black" id="titulo"><b>Já tem uma conta? <a style="color: black" href="{{ route('login') }}">Faça Login</a></b></p>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary my-2 my-sm-0" id="Botaocad">
                            {{ __('Cadastrar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    
        
    
@endsection
