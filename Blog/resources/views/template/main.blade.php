<!DOCTYPE html>
<html>
  <head lang="es">
    <meta charset="utf-8">
    <title>@yield('title', 'Blog con Laravel')</title>
    {{-- Librerías CSS --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/Trumbowyg/dist/ui/trumbowyg.min.css')}}">
  </head>
  <body>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/animatescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/Trumbowyg/dist/trumbowyg.min.js')}}"></script>
    <script type="text/javascript">
    	$(window).scroll(function(){
    		if ($(this).scrollTop() > 500) {
    			$('#navi').addClass('navbar-fixed-top');
    			$('#navi').removeClass('hide');
    		}else{
    			$('#navi').removeClass('navbar-fixed-top');
    			$('#navi').addClass('hide');
    		}
    	});
    </script>
    @yield('js')
  </body>
</html>
