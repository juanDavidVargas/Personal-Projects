@extends('admin.template.main')


@section('title')
  Home
@endsection

@section('content')
  <h1>Hola Bienvenido...</h1>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
     exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
     dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
     anim id est laborum.</p>
  <hr>
  <a href="{{route('admin.auth.login')}}" class="btn btn-primary">Iniciar Sesión</a>
@endsection
