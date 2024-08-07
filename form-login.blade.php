<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<title>Sistem Informasi Mahasiswa</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbara">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="{{url('/daftar-mahasiswa')}}" class="nav-link">Daftar Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a href="{{url('/tabel-mahasiswa')}}" class="nav-link">Tabel Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a href="{{url('/blog-mahasiswa')}}" class="nav-link">Blog Mahasiswa</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<h2 class="my-4">Form Login</h2>
		<hr>

		@if(session()->has('pesan'))
		<div class="alert alert-info w-50">
			{{ session()->get('pesan') }}
		</div>
		@endif

		<form action="{{ url('/login') }}" method="POST">
			@csrf
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control w-50" id="username" name="username" value="{{old('username')}}">
				@error('username')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary my-2">Login</button>
		</form>
	</div>

	<script type="/js/bootstrap.bundle.min.js"></script>
</body>
</html>