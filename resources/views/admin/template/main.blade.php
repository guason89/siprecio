<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />

	{!! Html::style('plugins/alertifyjs/css/alertify.min.css') !!} 
	{!! Html::style('plugins/alertifyjs/css/themes/default.min.css') !!} 
	@yield('css')
</head>
<body>
	@yield('body')
	@include('flash::message')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	{!! Html::script('plugins/alertifyjs/alertify.min.js') !!}
	@yield('js')
</body>
</html>