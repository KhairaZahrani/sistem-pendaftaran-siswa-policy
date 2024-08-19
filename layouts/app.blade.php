<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{'/css/bootstrap.min.css'}}">
	<title>Data Siswa</title>
</head>
<body>

	<div class="container py-5">
		@if(Auth::check())
		@include('layouts.menu')
		@endif
		@yield('content')
	</div>

</body>
</html>