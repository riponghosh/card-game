<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>	
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="/frontend/css/home/style.css">
	    <link rel="stylesheet" type="text/css" href="/frontend/css/play/play.css">
	    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
		@yield('styles')

	</head>
	<body style='background-image: url("/frontend/image/body.jpg");'>
		<div id="app">
			<!-- start nav menu -->
			<main_nav></main_nav>
		  <!-- end nav menu --> 

		  <!-- start card -->
			@yield('content')
		  <!-- end card -->


		  <!-- footer start -->
		  <div class="container-fluid" style="padding: 0px;margin: 6% 0px 0px 0px;">
				<div class="row" style="padding: 0px;margin: 0px;">
					<nav class="navbar navbar-inverse" style="padding: 0px;margin: 0px;background-color: transparent;border: 0px;">
					  <div class="container-fluid">
					    <ul class="nav navbar-nav col-md-10">
					      <!-- <li class="col-md-1.5"><a href="#">Page 2</a></li> -->
					      <li class="col-md-1.5 col-md-offset-6"><a href="#">Game</a></li>
					      <li><a href="#" style="background-color: #000;border-radius: 10px;">Contact: info@ripon.com</a></li>
					      <!-- <li><a href="#">Page 3</a></li> -->
					    </ul>
					  </div>
					</nav>
				</div>
				 
			</div>
			<!-- footer end -->


		<!-- all modal -->

		<modal></modal>

	<!-- all modal end -->
		</div>
		
		<!-- Vendor -->
		@yield('app')
		
		@yield('scripts')

	</body>
</html>
