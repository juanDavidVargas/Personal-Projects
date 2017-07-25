@extends('template.main')

@section('title'){{'Contenido de la etiqueta | Blog'}}@endsection

@section('content')
  <div class="row-fluid" id="tag">
    <div class="blur">
      <div class="croissant" id="tagged">
            Artículos etiquetados con {{$tag}}
      </div>
    </div>
  </div>
  @foreach ($posts as $post)
    <div class="col-md-4 tgs" style="min-height:40vh; background-image: url('{{$post->photo}}'); background-size:cover; background-position:center; border-bottom:3px solid #fff;">
      <div class="blur">
        <div class="croissant" id="taggex">
          <a href="../articulos/{{$post->slug}}" style="color: #fff;">{{$post->title}}</a>
        </div>
      </div>
    </div>
  @endforeach
@stop
