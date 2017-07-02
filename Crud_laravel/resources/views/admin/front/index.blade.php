@extends('admin.front.template.main')

@section('content')
  <div class="text-right">
    <a href="{{route('admin.auth.login')}}" class="btn btn-info">Login</a>
  </div>
  <h3 class="title-front left">{{trans('app.title_last_articles')}}</h3>
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        @foreach ($articles as $article)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="{{route('admin.front.view.article', $article->slug)}}" class="thumbnail">
                  @foreach ($article->images as $image)
                    <img src="{{asset('images/articles/'.$image->name)}}" class="img-responsive img-article" alt="Image not found">
                  @endforeach
                </a>
                <a href="{{route('admin.front.view.article', $article->slug)}}">
                  <h3 class="text-center">{{$article->title}}</h3>
                </a>
                <hr>
                <i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;&nbsp;<a href="{{route('admin.front.search.category', $article->category->name)}}">{{$article->category->name}}</a>
                <div class="pull-right">
                <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;{{$article->created_at->diffForHumans()}}
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
        {!! $articles->render() !!}
      </div>
        <div class="col-md-4 aside">
          @include('admin.front.template.partials.aside')
        </div>
      </div>
@endsection
