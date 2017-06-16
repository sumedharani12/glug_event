<!DOCTYPE HTML>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="csrf_token" content="{{csrf_token()}}">
	    <title>GLUG</title>
	    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	    <meta name="viewport" content="width=device-width" />

	    <!-- Bootstrap Core CSS -->
	    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" />

	    
	    <!-- Material Dashboard CSS -->
	    <link href="{{ URL::asset('assets/css/mycss.css') }}" rel="stylesheet" />

	    
	    <!-- Fonts And Icons -->
	    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }} " rel="stylesheet" />
	    <link href="{{ URL::asset('assets/css/matico.css') }} " rel='stylesheet' type='text/css'>

	    @yield('externcss')

	</head>
	<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">

		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#top">GNU/Linux Users' Group, NIT Durgapur </a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="/">About</a></li>
		        <li><a href="/notes">Notes</a></li>
		        <li><a href="/presentations">Presentations</a></li>
		        <li><a href="/feedback">Feedback</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
			@yield('content')


		<footer class="container-fluid text-center">
		  <a href="#top" title="To Top">
		    <span class="glyphicon glyphicon-chevron-up"></span>
		  </a>
		  <p>&copy; <script>document.write(new Date().getFullYear())</script> <a href="#">GNU Linux User's Group</a></p>
		</footer>

	</body>
	<script src="{{ URL::asset('assets/js/jquery-3.1.0.min.js') }} " type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/material.min.js') }}" type="text/javascript"></script>

    @yield('myjs')

</html>