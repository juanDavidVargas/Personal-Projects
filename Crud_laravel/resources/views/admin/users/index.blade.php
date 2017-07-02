@extends('admin.template.main')

@section('title', 'List Users')

@section('content')
  <a href="{{route('admin.users.create')}}" class="btn btn-info">Register New User</a>
  <hr>
  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Name</th>
      <th>Type</th>
      <th>Email</th>
      <th>Options</th>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>
            @if($user->type == "Admin")
              <span class="label label-danger">  {{$user->type}}</span>
            @else
              <span class="label label-primary">  {{$user->type}}</span>
            @endif
          </td>
          <td>{{$user->email}}</td>
          <td>
            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

            <a href="{{route('admin.users.destroy', $user->id)}}" onclick="return confirm('Are you sure delete this user?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-right">
    {!! $users->render() !!}
  </div>
@endsection
