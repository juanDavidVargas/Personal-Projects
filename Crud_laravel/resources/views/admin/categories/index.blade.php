@extends('admin.template.main')

@section('title', 'Category List')

@section('content')
  <a href="{{route('admin.categories.create')}}" class="btn btn-info">Register new category</a>
  <hr>
  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Name</th>
      <th>Options</th>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
          <td>
            <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

            <a href="{{route('admin.categories.destroy', $category->id)}}" onclick="return confirm('Are you sure delete this category?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
          </td
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-right">
    {!! $categories->render() !!}
  </div>
@endsection
