@extends('layouts.app')
@section('title', '- Track')
@section('content')
<div class="container">
	<h2 class="mt-4">Track &middot; <a class="btn btn-sm btn-primary" href="{{ url('track/create') }}"><i class="fas fa-plus"></i> Tambah Data</a></h2>

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr class="table-primary">
					<th scope="col">No.</th>
					<th scope="col">Judul Lagu</th>
					<th scope="col">Album</th>
					<th scope="col">Lagu</th>
					<th scope="col">Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rows as $row)
				<tr>
					<th scope="row">{{ $loop->iteration }}</th>
					<td>{{ $row->nama_track }}</td>
					<td>{{ $row->album->artis->nama_artis }} - {{ $row->album->nama_album }}</td>
					<td>
						<audio controls>
							<source src="lagu/{{ $row->file }}" type="audio/mp3">
							</audio>
						</td>
						<td>
							<form method="post" action="{{ url('/track/'.$row->track_id) }}" class="d-inline">
								<input type="hidden" name="_method" value="DELETE" readonly="true">
								@csrf
								<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endsection