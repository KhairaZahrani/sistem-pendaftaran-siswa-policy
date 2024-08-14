<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<title>Data Barang</title>
</head>
<body>

	<div class="container mt-3">
		<div class="row">
			<div class="col-12">
				<div class="py-4 d-flex justify-content-between align-items-center">
					<h2>Data Barang</h2>
					<a href="{{route('barang.create')}}" class="btn btn-primary">
						Tambah Barang
					</a>
				</div>
				@if(session()->has('pesan'))
				<div class="alert alert-success" role="alert">
					{{session()->get('pesan')}}
				</div>
				@endif
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Barang</th>
							<th>Jenis Barang</th>
							<th>Harga Barang</th>
							<th colspan="3" class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse($barangs as $barang)
						<tr>
							<th>{{$loop->iteration}}</th>
							<td>{{$barang->nama_barang}}</td>
							<td>{{$barang->jenis_barang}}</td>
							<td>{{$barang->harga_barang}}</td>
							<td class="text-center actions">
								<a href="{{ route('barang.edit', ['barang' => $barang->id]) }}" class="btn btn-primary">Edit</a>
								<form method="POST" action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" style="display:inline;">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">Hapus</button>
								</form>
								<a href="{{ route('barang.show', ['barang' => $barang->id]) }}" class="btn btn-info">Detail</a>
							</td>

						</tr>
						@empty
						<td colspan="6" class="text-center">Tidak ada data...</td>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>