<!DOCTYPE html>
<html>
<head>
	<title>Hola!!!</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	@yield('css')
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	@yield('js')
</body>
</html>