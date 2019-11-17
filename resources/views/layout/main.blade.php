<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->

    <title>@yield('title')</title>
  </head>
  <body>



	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
		      <a class="nav-item nav-link" href="{{ url('/JQuery') }}">JQuery</a>
		      <a class="nav-item nav-link" href="{{ url('/JavaScript') }}">JavaScript</a>
		      <a class="nav-item nav-link" href="{{ url('/About') }}">About</a>
		    </div>
		  </div>
		</div>
	</nav>

	@yield('container')

    <!-- Optional JavaScript -->    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('JS/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('JS/popper.min.js')}}"></script>
    <script src="{{asset('JS/bootstrap.min.js')}}"></script>
  </body>
</html>