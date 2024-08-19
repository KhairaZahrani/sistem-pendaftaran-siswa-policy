@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/siswa" class="btn btn-secondary">>>Kembali</a>
	<div class="col-md-8 col-xl-6">
		<h3>Biodata {{$data->nama}}</h3>
		<hr>
		<ul>
			<li>Nama : {{$data->nomor_induk}}</li>
			<li>Nama : {{$data->nama}}</li>
			<li>Nama : {{$data->alamat}}</li>
		</ul>
	</div>
</div>
@endsection