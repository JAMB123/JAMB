@extends('sistema.layout')
@section('content')



    <div class="row">
        <div class="col-sm-5">
            <img src="{{asset('storage/imagens/coleira.png')}}" style="width: 950px" />
        </div>
        <div class="col-sm-7">
            <div class="container">
            <p class="h4 text-center" style="color: #2B1998; margin-top: 75px; font-size: 70px"><b>Login</b></p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">        
                    <div class="row mb-3" style="margin-top: 50px">
                            <label for="email" class="col-md-4 col-form-label text-md-end">         
                            </label>
                            
                      <div class="col-md-4" id="LinhaE">
                                <table id="tabela">
                                    <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <label for="nome" style="color: black; font-size: 18px"class="">E-mail:</label>
                                        </td>
                                    </tr>
                                        <tr>
                                            <td><img src="{{asset('storage/imagens/email.svg')}}" /> </td>
                                            <td><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required placeholder="Email"></td>
                                        </tr>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                    </div>
                            <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">
                                    </label>

                                    <div class="col-md-4">
                                        <tr>
                                            <td colspan="2">
                                                <label for="nome" style="color: black; font-size: 18px"class="">Senha:</label>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><img src="{{asset('storage/imagens/chaves.png')}}" /> </td>
                                        <td><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                                        </tr>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                            <div class="col-md-6 offset-md-4">
                                <div>
                                <tr><td colspan="2">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black; font-size: 20px; margin-top: 10px">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif
                                    </td></tr>
                                </div>
                            </div>
                        </div>
                        </tbody>
                    </table>
                    </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="color: black">
                                        {{ __('Me mantenha Logado(a)') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="h5 text-center">
                                <p style="color: black" id="titulo"><b>Ainda não tem uma conta? <a style="color: black;" href="{{route('register')}}">Cadastre-se</a></b></p>
                            </div>

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary my-2 my-sm-0" id ="meu-botao" style="padding-left: 30px; padding-right: 30px; font-size: 15px">
                                    {{ __('Entrar') }}
                                </button>
                            </div>
            </div>
        </div>
    </div>
@endsection
