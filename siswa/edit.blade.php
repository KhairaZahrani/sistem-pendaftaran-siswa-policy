@extends('layouts.app')

@section('content')

<a href="/siswa" class="btn btn-secondary">Kembali</a>

<div class="container pt-4">
	<div class="col-md-8 col-xl-6">
		<h2>Edit Data Siswa</h2>
		<hr>
		<form action="{{'/siswa/'.$data->nomor_induk}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div>
				<p>Nomor induk : {{$data->nomor_induk}}</p>
			</div>
			<div class="mb3">
				<label class="form-label" for="nama">Nama</label>
				<input type="text" class="form-control"  id="nama" name="nama"  value="{{$data->nama}}">
				@error('nama')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<div class="mb3">
				<label class="form-label" for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" value="{{old('alamat')}}">{{$data->alamat}}</textarea>
			</div>
			@if($data->foto)
			<div class="mb-3">
				<img style="max-width: 50px;max-height: 50px; margin-top: 10px" src="{{url('foto'). '/' .$data->foto}}"/>
			</div>
			@endif
			<div class="mb-3">
				<label class="form-label" for="foto">Foto</label>
				<input type="file" class="form-control" id="foto" name="foto">
			</div>
			<br>
			<div class="mb3">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
</div>


@endsection