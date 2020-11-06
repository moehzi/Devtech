@extends('layouts/master')
@section('content')
<div class="tabel-members">
	<h2>Members</h2>
	<table>
		<tr>
			<th>Nama</th>
			<th>Nra</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>TTL</th>
			<th>Jabatan</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		@foreach ($dataMembers as $item)
		<tr>
			<td>{{ $item->nama }}</td>
			<td>{{ $item->nra }}</td>
			<td>{{ $item->kelas }}</td>
			<td>{{ $item->jenis_kelamin }}</td>
			<td>{{ $item->ttl }}</td>
			<td>{{ $item->jabatan }}</td>
			<td>{{ $item->alamat }}</td>
			<td></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection