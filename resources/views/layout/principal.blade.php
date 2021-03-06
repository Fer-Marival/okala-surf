<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Okala Surf School</title>
	<link rel="apple-touch-icon" sizes="57x57" href="favi/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favi/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favi/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favi/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favi/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favi/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favi/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favi/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favi/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favi/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favi/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favi/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favi/favicon-16x16.png">
	<link rel="manifest" href="favi/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favi/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
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