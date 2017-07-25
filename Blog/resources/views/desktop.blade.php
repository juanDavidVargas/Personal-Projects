@extends('template.main')
@section('title'){{'Administración | Bienvenido '. \Auth::user()->name}}@endsection
@section('content')
  @include('template.partials.logbar')
  <div class="row-fluid">
    <div class="container" id="admin">
      @if (\Session::has('alert'))
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Enhorabuena!</strong> {{Session::get('alert')}}
        </div>
      @elseif (\Session::has('alert2'))
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <strong>Enhorabuena!</strong> {{Session::get('alert2')}}
        </div>
      @elseif (\Session::has('alert_delete'))
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">X</button>
          {{Session::get('alert_delete')}}
        </div>
      @endif
      <div class="container">
        <div class="jumbotron">
          <h1 class="text-center">Lista de Publicaciones</h1>
        </div>
      </div>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <th>Título</th>
          <th>Autor</th>
          <th>Fecha</th>
          <th class="foo">Opciones</th>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->slug}}</td>
              <td>{{$post->created_at}}</td>
              <td>
                  <a href="admin/posts/{{$post->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="admin/posts/{{$post->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="container">
    <div align="right">
      {!! $posts->render() !!}
    </div>
  </div>
  <br>
  @include('template.partials.footer')
@stop
