@extends('layouts/master')
@section('content')
<div class="create">
	<h2>Tambahkan anggota baru</h2>
	<div class="card-view">
		<form class="form-input" action="{{ route('simpan-member') }}" method="POST">
			{{ csrf_field() }}
		<label for="nama">Nama</label>
		<input type="text" name="nama" required>

		<label for="nra">Nra</label>
		<input type="text" name="nra" required>

		<label for="kelas">Kelas</label>
		<input type="text" name="kelas" required>

		<label for="jenis_kelamin">Jenis Kelamin</label>
		<input type="text" name="jenis_kelamin" required>
	
		<label for="ttl">Tempat, Tanggal Lahir</label>
		<input type="date" name="ttl" required>
		
		<label for="jabatan">Jabatan</label>
		<input type="text" name="jabatan" required>

		<label for="alamat">Alamat</label>
		<input type="text" name="alamat" required>
	
			<button class="btn-primary">
				Submit
		</button>
	</form>
	</div>
	
</div>
@endsection