@extends('layouts.app')

@section('content')


<div class="container pt-3">
	<div class="col-md-8 col-xl-6">
		<h2>Daftar Siswa</h2>
		<hr>
		<form action="/siswa" method="post" enctype="multipart/form-data">
			@csrf
			<div class="mb-33">
				<label class="form-label" for="nomor_induk">Nomor Induk</label>
				<input type="text" class="form-control @error ('nomor_induk') is-invalid @enderror" id="nomor_induk" name="nomor_induk" value="{{old('nomor_induk')}}">
				@error('nomor_induk')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label class="form-label" for="nama">Nama</label>
				<input type="text" class="form-control @error ('nama') is-invalid @enderror"  id="nama" name="nama" value="{{old('nama')}}">
				@error('nama')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label class="form-label" for="alamat">Alamat</label>
				<textarea class="form-control @error ('alamat') is-invalid @enderror" name="alamat" value="{{old('alamat')}}"></textarea>
				@error('alamat')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label class="form-label" for="foto">Foto</label>
				<input type="file" class="form-control @error ('foto') is-invalid @enderror"  id="foto" name="foto" value="{{old('foto')}}">
				@error('foto')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<br>
			<div class="mb3">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>


@endsection