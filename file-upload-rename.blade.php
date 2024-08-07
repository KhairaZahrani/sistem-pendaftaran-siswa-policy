<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<title>File Upload</title>
</head>
<body>
	<div class="container mt-3">
		<h2>File Upload</h2>
		<hr>

		<form  action="{{url('/file-upload-rename')}}" method="POST" enctype="multipart/form-data">
			@csrf

			<div class="mb-2">
				<label for="nama_gambar" class="form-label ">Nama Gambar</label>
				<input type="text" name="nama_gambar" id="nama_gambar" class="form-control">
				@error('nama_gambar')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="gambar_profile" class="form-label">Gambar Profile</label>
				<input type="file" class="form-control" id="gambar_profile"
				name="gambar_profile">
				@error('gambar_profile')
				<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-primary my-2">Upload</button>
		</form>
	</div>
</body>
</html>