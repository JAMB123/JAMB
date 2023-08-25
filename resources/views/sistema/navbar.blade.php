<nav class="navbar flex-column flex-sm-row navbar-expand-lg" id="linhaca">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <hr>
    <a class="navbar-brand" href="/">
    <p class="h4 text-start" style="color: #2B1998; font-size: 80px; margin-left: 850px; margin-top: 40px; font-weight: bolder;">JAMB</p>
    </a>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
          <li class="nav-item dropdown" id="drops">
            <a class="nav-link dropdown-toggle" href="#" id="menusanduiche" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
            <ul class="dropdown-menu">
              <li><a href="{{route('login')}}">
                <button class="btn btn-primary my-2 my-sm-0"; id = "botaomenu" type="submit" style="margin-right: 15px; margin-left: 15px">Login</button>
               </a></li>
               <br>
               <li><a href="{{route('register')}}">
                <button class="btn btn-primary my-2 my-sm-0"; id = "botaomenu" type="submit" style="margin-right: 15px; margin-left: 15px">Cadastrar</button>
               </a></li>
               <br>
               <li><a href="/favoritos">
                 <button class="btn btn-primary my-2 my-sm-0"; id= "botaomenu" type="submit" style="margin-right: 15px; margin-left: 15px">Favoritos</button>
               </a></li>
               <br>
               <li><a href="/cadastros/cadastrar">
                <button class="btn btn-primary my-2 my-sm-0"; id= "botaocadanima" type="submit" style="margin-right: 15px; margin-left: 15px">Cadastrar Animal</button>
               </a></li>
               <br>
               <li><a href="/sobre">
                <button class="btn btn-primary my-2 my-sm-0"; id= "botaomenu" type="submit" style="margin-right: 15px; margin-left: 15px">Sobre</button>
               </a></li>
               <br>
               <li><a href="/cadastros/lista">
                 <button class="btn btn-primary my-2 my-sm-0"; id= "botaomenu" type="submit" style="margin-right: 15px; margin-left: 15px">Adoções</button>
               </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>       
      </div>
</nav>
   

</nav>    