@extends('layouts.app')

@section('content')

<div class="container mt-3">
	<div class="row">
		<div class="col-12">
			<div class="pt-4 d-flex justify-content-between align-items-center">
				<h2>Info Siswa {{$siswa->nama}}</h2>
				<div class="d-flex">
					<a href="{{url('/siswas/'.$siswa->id.'/edit')}}" class="btn btn-primary">Edit</a>
					@can('delete',$siswa)
					<form action="{{url('/siswas/'.$siswa->id)}}" method="post">
						@method('DELETE')
						<button type="submit" class="btn btn-danger ms-3">Hapus</button>
						@csrf
					</form>
					@endcan
				</div>
			</div>
			<hr>

			@if(session('pesan'))
			<div class="alert alert-success">{{session('pesan')}}</div>
			@endif


			<ul>
				<li>NIS : {{$siswa->nis}}</li>
				<li>Nama Siswa : {{$siswa->nama}}</li>
				<li>Tanggal Lahir : {{$siswa->tgl_lahir}}</li>
				<li>Alamat : {{$siswa->alamat}}</li>
			</ul>
		</div>
	</div>
</div>

@endsection