@extends('layouts/master')
@section('content')
<div class="create">
	<h2>Edit anggota</h2>
	<div class="card-view">
		<form class="form-input" action="{{ url('update-member',$peg->id) }}" method="POST">
			{{ csrf_field() }}
		<label for="nama">Nama</label>
		<input type="text" name="nama" required value="{{ $peg -> nama }}">

		<label for="nra">Nra</label>
		<input type="text" name="nra" required value="{{ $peg->nra }}">

		<label for="kelas">Kelas</label>
		<input type="text" name="kelas" required value="{{ $peg->kelas }}">

		<label for="jenis_kelamin">Jenis Kelamin</label>
		<input type="text" name="jenis_kelamin" required value="{{ $peg->jenis_kelamin }}">
	
		<label for="ttl">Tempat, Tanggal Lahir</label>
		<input type="date" name="ttl" required value="{{ $peg->ttl }}">
		
		<label for="jabatan">Jabatan</label>
		<input type="text" name="jabatan" required value="{{ $peg->jabatan }}">

		<label for="alamat">Alamat</label>
		<input type="text" name="alamat" required value="{{ $peg->alamat }}">
	
			<button class="btn-primary">
				Ubah data
		</button>
	</form>
	</div>
	
</div>
@endsection