<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title')
	</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<header>
					<h2>PetaniBlog</h2>
					<nav>
						<a href="/">INDEX</a>
						|
						<a href="/blog">HOME</a>
						|
						<a href="/blog/tentang">TENTANG</a>
						|
						<a href="/contact">CONTACT</a>
						|
						<a href="/siswa">SISWA</a>
						|
						<a href="/mentor">MENTOR</a>
					</nav>
				</header>
				<hr/>
				<br/>
				<br/>
			
				<!-- bagian judul halaman blog -->
				<h3> @yield('judul_halaman') </h3>
			
			
				<!-- bagian konten blog -->
				@yield('konten')
				

				@yield('sub-konten')

				<br/>
				<br/>
				<hr/>

				<footer>
					<p>&copy; <a href="https://facebook.com/">www.petaniweb.com</a> | 2019 - 2020</p>
				</footer>

			</div>
		</div>
	</div>	
</body>
</html>