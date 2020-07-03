@extends('layouts.app')
@section('title', '- Tambah Track')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="card my-4">
				<h4 class="card-header">Tambah Data Track</h4>
				<div class="card-body">
					<form method="post" action="{{ url('/track') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="nama_track">Judul lagu</label>
							<input type="text" id="nama_track" name="nama_track" class="form-control" placeholder="Masukkan judul lagu">
						</div>
						<div class="form-group">
							<label for="album_id">Album artis</label>
							<select id="album_id" name="album_id" class="form-control">
								@foreach($lst as $row)
								<option value="{{ $row->album_id }}">{{ $row->nama_album }} - {{ $row->artis->nama_artis }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="file">File MP3</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="file" name="file">
									<label class="custom-file-label" for="file" aria-describedby="file">Pilih file</label>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection