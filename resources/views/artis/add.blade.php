@extends('layouts.app')
@section('title', '- Tambah Artis')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="card my-4">
				<h4 class="card-header">Tambah Data Artis</h4>
				<div class="card-body">
					<form method="post" action="{{ url('/artis') }}">
						@csrf
						<div class="form-group">
							<label for="nama_artis">Nama artis</label>
							<input type="text" id="nama_artis" name="nama_artis" class="form-control" placeholder="Masukkan nama artis">
						</div>
						<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection