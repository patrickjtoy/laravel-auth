<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Authentication App With Laravel</title>
		{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('css/main.css') }}
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="container">
					<ul class="nav navbar-nav">
						<li class="active">{{ HTML::link('users/register', 'Register') }}</li>
						<li>{{ HTML::link('users/login', 'Login') }}</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			@if(Session::has('message'))
				<p class="alert">{{ Session::get('message') }}</p>
			@endif

			{{ $content }}
		</div>
	</body>
</html>