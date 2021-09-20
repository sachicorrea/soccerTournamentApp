<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Tournament</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Teams
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../equipos">Show teams</a></li>
                <li><a class="dropdown-item" href="../equipos/create">New team</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Players
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../jugadores">Show players</a></li>
                <li><a class="dropdown-item" href="../jugadores/create">New player</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cities
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../municipios">Show city</a></li>
                <li><a class="dropdown-item" href="../municipios/create">New city</a></li>
            </ul>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Positions
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../posiciones">Show position</a></li>
                <li><a class="dropdown-item" href="../posiciones/create">New position</a></li>
            </ul>
        </li>  

        <a class="nav-link disabled" href="#">{{ Auth::user()->name }}</a>
        <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar Sesión</button>
        </form>
    </div>
  </div>

</nav>