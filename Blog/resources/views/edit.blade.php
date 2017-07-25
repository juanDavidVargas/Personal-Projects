@extends('template.main')
@section('title'){{'Edición de Post | ' . $posts->title}}@endsection
@section('content')
  @include('template.partials.logbar')
  <div class="row-fluid">
    <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Editar Publicación</h1>
      </div>
    </div>
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md8">
          {!! Form::open(['url' => 'admin/posts/' . $posts->id . '/refresh', 'autocomplete' => 'off']) !!}
              <fieldset>
                <input type="text" name="title" value="{{$posts->title}}" class="form-control">
                <br>
                <textarea name="content" id="editor" class="form-control" rows="10" cols="30">{{$posts->content}}</textarea>
                <br>
                <input type="text" name="tags" value="{{$posts->tags}}" class="form-control">
                <br>
                <input type="text" name="photo" value="{{$posts->photo}}" class="form-control">
                <br>
                <input type="submit" name="boton" value="Actualizar" class="btn btn-success">
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
