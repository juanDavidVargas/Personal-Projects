<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{route('home')}}" class="navbar-brand croissant">Blog</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <p class="navbar-text">
          <span class="white croissant">by Juan David</span>
        </p>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="menu-item"><a href="{{route('register')}}"><i class="fa fa-pencil white"></i>&nbsp;<span class="white">Registrarse</span></a></li>
        <li class="menu-item"><a href="{{route('login')}}"><i class="fa fa-user-circle white" aria-hidden="true"></i>&nbsp;<span class="white">Login</span></a></li>
      </ul>
    </div>
  </div>
</nav>
