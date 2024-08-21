@extends('layouts.app')

@section('content')

@if(session('pesan'))
<div class="alert alert-success">
	{{ session('pesan') }}
</div>
@endif

<div class="w-50 center border rounded px-3 py-3 mx-auto">
	<h1>Register</h1>
	<form action="/sesi/create" method="POST">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Nama</label>
			<input type="name" name="name" class="form-control" value="{{Session::get('name')}}">
			@error('name')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" name="email" class="form-control" value="{{Session::get('email')}}">
			@error('email')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" >
			@error('password')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-3 d-grid">
			<button type="submit" class="btn btn-primary">Register</button>
		</div>
	</form>
</div>

@endsection