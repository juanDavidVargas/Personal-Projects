@extends('admin.template.main')

@section('title', 'Add new tag')

@section('content')
  {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
    <div class="container">
        <div class="col-md-12">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="form-group">
                  {!! Form::label('name', 'Name') !!}
                  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Tag', 'required']) !!}
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="form-group">
                  {!! Form::submit('Register', ['class' => 'btn btn-success']) !!}
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
    </div>
  {!! Form::close() !!}
@endsection
