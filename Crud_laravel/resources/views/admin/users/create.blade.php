@extends('admin.template.main')

@section('title', 'Create User')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
              <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Full Name']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
            </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'example@email.com']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                  {!! Form::label('type', 'Type') !!}
                  {!! Form::select('type', ['member' => 'Member', 'admin' => "Administrator"], null, ['class' => 'form-control select-types']) !!}
              </div>
              </div>
              <div clas?"col-md-3"></div>
            </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="form-group">
                  {!! Form::submit("Register", ['class' => 'btn btn-success']) !!}
                </div>
              </div>
              <div clas="col-md-3"></div>
            </div>
                {!! Form::close() !!}
              </div>
        </div>
      </div>
@endsection

@section('js')
  <script type="text/javascript">
    $('.select-types').chosen({
        placeholder_text_single: 'Select a option'
    });
  </script>
@endsection
