@extends('admin.template.main')

@section('title', 'Edit category ' . $category->name)

@section('content')
  {!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
  <div class="container">
      <div class="col-md-12">
        <div class="pnel-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Name Category', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
  </div>
  {!! Form::close() !!}
@endsection
