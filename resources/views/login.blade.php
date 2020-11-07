<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<title>Document</title>
</head>
<body>
	<div class="login">
		<div class="form-login">
			<h1>Log in.</h1>
			<form action="{{ route('postlogin') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="email">
			</div>
				<div class="form-group">
					<label for="username">Password</label>
					<input type="password" name="password">
			</div>
			<button class="btn-primary">
				Log in
			</button>
				
			</form>
			
		</div>
		<div class="text-login">
			<h1>Development Technology Organization</h1>
			<p>Unit kegiatan sekolah bagi siswa SMA Negeri 8 Gowa</p>
	
		</div>
	</div>
	@include('sweetalert::alert')
</body>
</html>
