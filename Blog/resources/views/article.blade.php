@extends('template.main')

@section('title'){{$post->title . " | blog"}}@endsection

@section('content')
  @include('template.partials.main-nav')
  <div class="row-fluid" style="background-image:url('{{$post->photo}}'); min-height:50vh; background-size:cover; background-position:center; background-attachment:fixed;">
    <div class="blur">
      <div class="croissant white" id="artitle">
        {{$post->title}}
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md-8" align="center">
        <br>
        <?php $tags = explode(',', $post->tags);?>
        @foreach ($tags as $tag)
          <label for="" class="label label-success lb">{{$tag}}</label>
        @endforeach
          <br>
          <hr>
          <div align="justify">
            {!! $post->content !!}
          </div>
          <hr>
          <div class="fb-comments" data-href="http://localhost:8000/articulos/{{$post->slug}}" data-width="100%" data-numposts="10"></div>
          <a href="{{route('home')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp;Inicio</a>
          <br>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <br>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  @include('template.partials.footer')
@stop
