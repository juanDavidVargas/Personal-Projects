<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso Restringido</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/error.css')}}">
  </head>
  <body>
    <div class="box-admin">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="panel-title">
              Acceso Restringido
            </div>
          </div>
          <div class="panel-body">
            <img class="img-responsive center-block" src="{{asset('images/error.png')}}" alt="Image not found"></img>
            <hr>
            <strong class="text-center">
              <p class="text-center">You can not access this zone</p>
              <p>
                <a href="{{route('front.index')}}">Back</a>
              </p>
            </strong>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
