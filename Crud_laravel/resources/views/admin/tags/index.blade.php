@extends('admin.template.main')

@section('title', 'List Tags')

@section('content')
  <a href="{{route('admin.tags.create')}}" class="btn btn-info">Register new tag</a>
  <!--Buscador de tags-->
    {!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Search...', 'aria-describedby' => 'Search']) !!}
          <span class="input-group-addon" id="Search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <hr>
  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Name</th>
      <th>Options</th>
    </thead>
    <tbody>
      @foreach ($tags as $tag)
        <tr>
          <td>{{$tag->id}}</td>
          <td>{{$tag->name}}</td>
          <td>
            <a href="{{route('admin.tags.edit', $tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

            <a href="{{route('admin.tags.destroy', $tag->id)}}" onclick="return confirm('Are you sure delete this tag?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
          </td
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-right">
    {!! $tags->render() !!}
  </div>
@endsection
