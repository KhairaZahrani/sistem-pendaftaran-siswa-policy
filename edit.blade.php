@extends('layouts.app')

@section('content')

<div class="container mt-3">
	<div class="row">
		<div class="col-sm-8 col-md-6">
			<h1 class="h2 pt-4">Edit Siswa</h1>
			<hr>

			<form action="{{url('/siswas/'.$siswa->id)}}" method="POST">
				@method('PUT')
				@csrf
				<div class="mb-3">
					<label class="form-label" for="nis">NIS</label>
					<input class="form-control @error('nis') is-invalid @enderror" type="text" name="nis" id="nis" class="form-control" value="{{old('nis')??$siswa->nis}}">
					@error('nis')
					<div class="text-danger">{{$message}}</div>
					@enderror
				</div>
				
				<div class="mb-3">
					<label  class="form-label" for="nama">Nama</label>
					<input  class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" class="form-control" value="{{$siswa->nama}}">
					@error('nama')
					<div class="text-danger">{{$message}}</div>
					@enderror
				</div>
				
				<div class="mb-3">
					<label  class="form-label" for="tgl_lahir">Tanggal Lahir</label>
					<input  class="form-control @error('tgl_lahir') is-invalid @enderror" type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{$siswa->tgl_lahir}}">
					@error('tgl_lahir')
					<div class="text-danger">{{$message}}</div>
					@enderror
				</div>

				<div class="mb-3">
					<label  class="form-label" for="alamat">Alamat</label>
					<textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{$siswa->alamat}}</textarea>
					@error('alamat')
					<div class="text-danger">{{$message}}</div>
					@enderror
				</div>


				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
</div>

@endsection