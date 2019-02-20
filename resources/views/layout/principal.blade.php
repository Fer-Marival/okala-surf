<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{!!asset('css/app.css')!!}">
</head>
<body>
		@yield('content')
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>