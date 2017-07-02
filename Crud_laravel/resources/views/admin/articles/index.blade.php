@extends('admin.template.main')

@section('title', "List Articles")

@section('content')
  <a href="{{route('admin.articles.create')}}" class="btn btn-info">Register new article</a>
  <!--Buscador de articles-->
    {!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Search...', 'aria-describedby' => 'Search']) !!}
          <span class="input-group-addon" id="Search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <hr>
  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Title</th>
      <th>Category</th>
      <th>User</th>
      <th>Options</th>
    </thead>
    <tbody>
      @foreach ($articles as $article)
        <tr>
          <td>{{$article->id}}</td>
          <td>{{$article->title}}</td>
          <td>{{$article->category->name}}</td>
          <td>{{$article->user->name}}</td>
          <td>
            <a href="{{route('admin.articles.edit', $article->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

            <a href="{{route('admin.articles.destroy', $article->id)}}" onclick="return confirm('Are you sure delete this article?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
          </td
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-right">
    {!! $articles->render() !!}
  </div>
@endsection
