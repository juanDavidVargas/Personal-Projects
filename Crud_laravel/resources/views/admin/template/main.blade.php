
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/Trumbowyg/dist/ui/trumbowyg.css')}}">
    <title>@yield('title', 'Default') | Panel de administración</title>
  </head>
  <body class="admin-body">
    @include('admin.template.partials.nav')

    <section class="section-admin">
      <div class="container">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">@yield('title')</h3>
          </div>
          <div class="panel-body">
            @include('flash::message')
            @include('admin.template.partials.errors')
            @yield('content')
          </div>
        </div>
      </div>
    </section>
    <footer class="container">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <p class="navbar-text">Todos los derechos reservados &copy; {{date('Y')}}</p>
            <p class="navbar-text navbar-right"><strong>Juan David</strong></p>
          </div>
        </div>
      </nav>
    </footer>
    <script type="text/javascript" src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/Trumbowyg/dist/trumbowyg.js')}}"></script>

    @yield('js')
  </body>
</html>
