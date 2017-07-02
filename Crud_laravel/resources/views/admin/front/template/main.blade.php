<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home') | Blog</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/journal/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
  </head>
  <body>
    <header>
      @include('admin.front.template.partials.header')
    </header>
    <div class="container">
      @yield('content')
      <footer>
        <hr>
        Todos los derechos reservados &copy; {{date('Y')}}
        <div class="pull-right">
          Juan David
        </div>
      </footer>
    </div>

    <script type="text/javascript" src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
  </body>
</html>
