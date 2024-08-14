<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<title>Data Barang {{$barang->nama_barang}}</title>
</head>
<body>

	<div class="container mt-3">
		<div class="row">
			<div class="col-12">
				<div class="pt=3">
					<h2 class="h2">Data {{$barang->nama_barang}}</h2>
				</div>
				<hr>

				<ul>
					<li>Nama Barang : {{$barang->nama_barang}}</li>
					<li>Jenis Barang : {{$barang->jenis_barang}}</li>
					<li>Harga Barang : {{$barang->harga_barang}}</li>
				</ul>
				<a href="{{route('barang.index')}}" class="btn btn-primary">Kembali</a>

			</div>
		</div>	
	</div>

</body>
</html>