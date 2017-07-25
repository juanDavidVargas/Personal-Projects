@extends('template.main')
@section('title'){{'Nueva Publicación | ' . \Auth::user()->name}}@endsection
@section('content')
  @include('template.partials.logbar')
  <div class="row-fluid">
    <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Crear Publicación</h1>
      </div>
    </div>
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md8">
          {!! Form::open(['url' => 'admin/posts/new', 'autocomplete' => 'off']) !!}
              <fieldset>
                <input type="text" name="title" placeholder="Title" class="form-control">
                <br>
                <textarea name="content" id="editor" class="form-control" rows="10" cols="30" placeholder="Content"></textarea>
                <br>
                <input type="text" name="tags" placeholder="Tags (Separated by commas)" class="form-control">
                <br>
                <input type="text" name="photo" placeholder="Photo (link)" class="form-control">
                <br>
                <input type="submit" name="boton" value="Guardar" class="btn btn-success">
              </fieldset>
          {!! Form::close() !!}
      </div>
      <div class="container">
        <div align="center">
          <a href="{{route('adminsite')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp;Volver</a>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <br><br>
  @include('template.partials.footer')
@endsection
@section('js')
  <script type="text/javascript">
    $('#editor').trumbowyg();
  </script>
@stop
