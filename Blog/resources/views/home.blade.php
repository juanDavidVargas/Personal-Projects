@extends('template.main')
@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading bold">Home</div>
				<div class="panel-body">
							Bienvenido <strong>{{\Auth::user()->name}}</strong>
				</div>
				<br><br>
				<div class="container">
					<a href="{{route('adminsite')}}" class="btn btn-primary">Listado de Publicaciones</a>
				</div>
				<br><br>
			</div>
		</div>
	</div>
</div>
<br>
@include('template.partials.footer')
@endsection
