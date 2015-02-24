<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Groupletter</title>

	<link href="{{ elixir('css/groupletter.css') }}" rel="stylesheet">

	<script src="/js/jquery.js"></script>
	<script src="{{ elixir('js/header-nav.js') }}"></script>

</head>
<body>
	<div class="app">

		<header class="centered-navigation" role="banner">
			<div class="centered-navigation-wrapper">

				<!-- slide out menu -->
				<a href="/" class="mobile-logo">
					<img src="/images/logo.svg" alt="Logo image">
				</a>
				<a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
				<!-- /slide out menu -->

				<nav role="navigation">
					<ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
						<li class="nav-link"><a href="/">Home</a></li>
						<li class="nav-link"><a href="/about">About</a></li>
						<li class="nav-link logo">
							<a href="/" class="logo">
								<img src="/images/logo.svg" alt="Logo image">
							</a>
						</li>
						@if (Auth::guest())
							<li class="nav-link"><a href="/auth/login">Login</a></li>
							<li class="nav-link"><a href="/auth/register">Register</a></li>
						@else
							<li class="nav-link"><a href="/links">Backlog</a></li>
							<li class="nav-link"><a href="/links/create">Add link</a></li>
							<li class="nav-link"><a href="/auth/logout">Logout</a></li>
						@endif
					</ul>
				</nav>
			</div>
		</header>

		<section role="main">
			@yield('content')
		</section>
	</div>

</body>
</html>
