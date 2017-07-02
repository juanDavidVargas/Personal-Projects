@extends('admin.template.main')

@section('title', 'Edit User ' . $user->name)

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
              <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Full Name']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
            </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'example@email.com']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                  {!! Form::label('type', 'Type') !!}
                  {!! Form::select('type', ['member' => 'Member', 'admin' => "Administrator"], $user->type, ['class' => 'form-control select-type']) !!}
              </div>
              </div>
              <div class="col-md-3"></div>
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
    $('.select-type').chosen({
        placeholder_text_single: 'Select a option'
    });
  </script>
@endsection
