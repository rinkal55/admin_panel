<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('pagetitle') | Protracked</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
		<link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}" />
	</head>
	<body>
		<div class="main">
			<div class="header">
				<div class="container">
					<h1>Protracked</h1>
				</div>
			</div>
			<div class="menubar">
				<div class="container">
					<ul>
						<li><a href="{{ url('/') }}">Company</a></li>
						<li><a href="{{ url('displayemplyee') }}">Employee</a></li>
					</ul>
				</div>
			</div>
			<div class="content">
				<div class="container">
					@yield('content')
				</div>
			</div>
		</div>
	</body>
</html>