<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> chirpion </title>
	<link href='//fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
	<link href='../public/main.css' rel='stylesheet' type='text/css'>

</head>

<body>

	<header id='main-nav' class='nav nav-main'>
		<ul class='nav-horizontal container'>
			<li class='nav-item nav-item-left'><img src='../resources/assets/logo.png' class='nav-logo'/></li>
			<li class='nav-item nav-item-right text-primary'>Sign in with Twitter</li>
		</ul>
	</header>

	<div class='app'>
		@yield('content')
	</div>


	<footer id='main-footer'>
	</footer>
	
	@yield('footer')
</body>
</html>