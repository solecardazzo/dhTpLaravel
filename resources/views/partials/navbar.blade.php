<body>
  <header class="encabezado">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="index.php"><img class="imagen-logo" src="img/logo_baja.png" alt=""></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navb" class="navbar-collapse collapse hide">
        @guest
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-user"></span> {{ __('Registrarse') }}</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><span class="fas fa-user"></span> {{ __('Iniciar Sesión') }}</a>
          </li>
        </ul>
        @else
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link text-uppercase dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }}
            </a>
            <section class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <img src={{asset(Auth::user()->avatar)}} class="avatar">
                <a class="dropdown-item" href="{{ route('profile') }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><span class="fas fa-sign-out-alt"></span>
                  {{ __('Salir') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </section>
          </li>
        </ul>
        @endguest
      </div>
    </nav>
  </header>
