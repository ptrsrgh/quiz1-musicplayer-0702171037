@extends('layouts.app')
@section('title', '- Edit Artis')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="card my-4">
				<h4 class="card-header">Edit Data Artis</h4>
				<div class="card-body">
					<form method="post" action="{{ url('/artis/'.$row->artis_id) }}">
						<input type="hidden" name="_method" value="PATCH" class="form-control" readonly="true">
						@csrf
						<div class="form-group">
							<label for="nama_artis">Nama artis</label>
							<input type="text" id="nama_artis" name="nama_artis" class="form-control" value="{{ $row->nama_artis }}" placeholder="Masukkan nama artis">
						</div>
						<button type="submit" class="btn btn-primary"><i class="fas fa-pen"></i> Ubah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
@endsection