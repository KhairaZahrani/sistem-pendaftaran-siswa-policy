<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<title>Edit Barang</title>
</head>
<body>

	<div class="container pt-4 bg-white">
		<div class="row">
			<div class="col-md-8 col-xl-6">
				<h1>Edit Barang</h1>
				<hr>

				<form action="{{route('barang.update', ['barang' => $barang->id])}}" method="POST">
					@method('PUT')
					@csrf
					<div class="mb-3">
						<label class="form-label" for="nama">Nama Barang</label>
						<input type="text" class="form-control @error ('nama_barang') is-invalid @enderror" name="nama_barang" id="nama" value="{{old('nama_barang') ?? $barang->nama_barang}}">
						@error('nama_barang')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					
					<div class="mb-3">
						<label class="form-label" for="jenis">Jenis Barang</label>
						<input type="int" class="form-control  @error ('jenis_barang') is-invalid @enderror" name="jenis_barang" id="jenis" value="{{old('jenis_barang') ?? $barang->jenis_barang}}">
						@error('jenis_barang')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>

					<div class="mb-3">
						<label class="form-label" for="harga">harga Barang</label>
						<input type="text" class="form-control  @error ('harga_barang') is-invalid @enderror" name="harga_barang" id="harga" value="{{old('harga_barang') ?? $barang->harga_barang}}">
						@error('jenis_barang')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>

					<button type="submit" class="btn btn-primary mb-2">Update</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>