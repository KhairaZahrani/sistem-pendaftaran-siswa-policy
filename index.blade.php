@extends('layouts.app')


@section('content')

<div class="container mt-3">
	<div class="row">
		<div class="col-12">
			<div class="py-4 d-flex justify-content-between align-items-center">
				<h1 class="h2">Tabel Data Siswa</h1>
				@can('create', App\Models\Siswa::class)
				<a href="/siswas/create" class="btn btn-primary">+ Tambah Siswa</a>
				@endcan
			</div>

			@if(session('pesan'))
			<div class="alert alert-success" role="alert">
				{{session('pesan')}}
			</div>
			@endif

			<table class="table table-striped">
				<thead>
					<tr>
						<td>#</td>
						<td>NIS</td>
						<td>Nama Siswa</td>
						<td>Alamat</td>
						<td>Tanggal Lahir</td>
					</tr>
				</thead>
				<tbody>
					@forelse($siswas as $siswa)
					<tr>
						<th>{{$loop->iteration}}</th>
						<td>
							@can('view', $siswa)
							<a href="{{url('/siswas/'.$siswa->id)}}">{{$siswa->nis}}</a>
							@endcan
							@cannot('view',$siswa)
							{{$siswa->nis}}
							@endcannot
						</td>
						<td>{{$siswa->nama}}</td>
						<td>{{$siswa->alamat}}</td>
						<td>{{$siswa->tgl_lahir}}</td>
					</tr>
					@empty
					<td colspan="6" class="text-center">Tidak ada data...</td>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection