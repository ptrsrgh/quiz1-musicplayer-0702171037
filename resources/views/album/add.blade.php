@extends('layouts.app')
@section('title', '- Tambah Album')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="card my-4">
				<h4 class="card-header">Tambah Data Album</h4>
				<div class="card-body">
					<form method="post" action="{{ url('/album') }}">
						@csrf
						<div class="form-group">
							<label for="nama_album">Nama album</label>
							<input type="text" id="nama_album" name="nama_album" class="form-control" placeholder="Masukkan nama album">
						</div>
						<div class="form-group">
							<label for="artis">Nama artis</label>
							<select id="artis_id" name="artis_id" class="form-control">
								@foreach($lst as $row)
								<option value="{{ $row->artis_id }}">{{ $row->nama_artis }}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection