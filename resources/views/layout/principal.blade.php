<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{!!asset('css/app.css')!!}">
</head>
<body>
		@include('components.header')
		@yield('content')
		@include('components.footer')
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
	<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool 
  page_id="526939231128929">
</div>
</body>
</html>