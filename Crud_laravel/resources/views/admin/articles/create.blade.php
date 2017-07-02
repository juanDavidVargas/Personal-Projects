@extends('admin.template.main')

@section('title', 'Create Article')

@section('content')
  {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
  <div class="container">
      <div class="col-md-12">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title Article', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="form-group">
                {!! Form::label('content', 'Content') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control textarea-content']) !!}
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('tags', 'Tags') !!}
                {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group">
                {!! Form::label('images', 'Images') !!}
                {!! Form::file('images', ['class' => 'form-control'])!!}
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

@section('js')
  <script type="text/javascript">
    $('.select-tag').chosen({
        placeholder_text_multiple: 'Select an maximun of 3 tags',
        max_selected_options: 3,
        search_contains: true,
        no_results_text: "Not found tags"
    });

    $('.select-category').chosen({
        placeholder_text_single: 'Select a category',
        max_selected_options: 3,
        search_contains: true,
        no_results_text: "Not found tags"
    });

    $('.textarea-content').trumbowyg();
  </script>
@endsection
