@extends('admin.template.main')

@section('title', 'Login')

@section('content')
  {!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
  <div class="container">
      <div class="col-md-12">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*****', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
  </div>
  {!! Form::close() !!}
@endsection
