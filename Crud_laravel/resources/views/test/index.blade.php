<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$article->title}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css')}}">
  </head>
  <body>
    <h2>{{$article->title}}</h2>
    <hr>
    {{$article->content}}
    <hr>
    {{$article->user->name}} | {{$article->category->name}} |
    @foreach($article->tags as $tag)
      {{$tag->name}}
    @endforeach
  </body>
</html>
