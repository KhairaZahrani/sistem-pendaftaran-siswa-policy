@extends('layouts.app')

@section('content')

<div class="w-50 text-center border rounded px-3 py-3 mx-auto">
	<h1>Selamat Datang</h1>
	<p>Silahkan login atau register untuk masuk ke aplikasi</p>
	<a href="/siswa" class="btn btn-primary btn-lg">LOGIN</a>
	<a href="/siswa/register" class="btn btn-success btn-lg">REGISTER</a>
</div>

@endsection