@extends('layouts.app')
@section('title', '- Album')
@section('content')
<div class="container">
	<h2 class="mt-4">Album &middot; <a class="btn btn-sm btn-primary" href="{{ url('album/create') }}"><i class="fas fa-plus"></i> Tambah Data</a></h2>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr class="table-primary">
					<th scope="col">No.</th>
					<th scope="col">Nama Album</th>
					<th scope="col">Nama Artis</th>
					<th scope="col">Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rows as $row)
				<tr>
					<th scope="row">{{ $loop->iteration }}</th>
					<td>{{ $row->nama_album }}</td>
					<td>{{ $row->artis->nama_artis }}</td>
					<td>
						<a class="btn btn-sm btn-warning" href="{{ url('album/'.$row->album_id.'/edit') }}"><i class="fas fa-pen"></i> Edit</a>
						<form method="post" action="{{ url('/album/'.$row->album_id) }}" class="d-inline">
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