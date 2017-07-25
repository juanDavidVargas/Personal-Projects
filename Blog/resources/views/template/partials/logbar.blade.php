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
          <i class="fa fa-dashboard white"></i>&nbsp;<span class="white bold">Admin Panel</span>
        </p>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('nuevo')}}"><i class="fa fa-plus white"></i>&nbsp;<span class="white bold">Crear Publicación</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user white"></i> <span class="white bold">{{Auth::user()->name}}<b class="caret"></b></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('logout')}}" class="bold"><i class="fa fa-sign-out"></i>&nbsp;<span class="bold">Logout</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
