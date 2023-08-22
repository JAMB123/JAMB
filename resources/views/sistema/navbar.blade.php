<nav class="navbar flex-column flex-sm-row navbar-expand-lg" id="linhaca">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <hr>
    <a class="navbar-brand" href="/">
    <p class="h4 text-start" style="color: #2B1998; font-size: 80px; margin-left: 850px; margin-top: 40px; font-weight: bolder;">JAMB</p>
    </a>       
    <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto flex-column flex-sm-row">
        </ul>
        <a href="{{route('login')}}">
            <button class="btn btn-primary my-2 my-sm-0"; id = "meu-botao" type="submit" style="margin-right: 15px; margin-left: 15px">Login</button>
        </a>
        <a href="{{route('register')}}">
            <button class="btn btn-primary my-2 my-sm-0"; id = "meu-botao" type="submit" style="margin-right: 15px; margin-left: 15px">Cadastrar</button>
        </a>
        <a href="/favoritos">
          <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Favoritos</button>
        </a>
        <a href="/cadastros/cadastrar">
          <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Cadastro de Animais</button>
        </a>
        <a href="/sobre">
          <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Sobre</button>
        </a>
      </div>
   

</nav>    