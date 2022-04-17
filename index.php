<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Online Reservation Hotel</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<!-- create link to bootstrap library.bootstrap is a library for html css and javascript -->
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<!-- link to my custom style -->
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</head>
<body>
	<!--create a header for top of page -->
	<nav style = "background-color:rgba(0, 0, 0, 0.1); " class = "navbar navbar-default " >
		<div  class = "container-fluid" >
			<div class = "navbar-header" style ="margin-left:550px"  >
				<a class = "navbar-brand"  style="font-family: 'Ariel';font-size: 25px;" >Online Reservation Hotel</a>
			</div>
		</div>
	</nav>
	<!-- end header -->
	<!-- create top menu -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				
				<ul id = "menu"  style="font-family: 'Amin';" >
					<li><a href = "index.php">Erste Seite</a></li>  |
					<li><a href = "reservation.php">Reservation</a></li>  |
					<li><a href = "dineandlounge.php">Speisekarte</a></li>  |
					<li><a href = "gallery.php">Gallery</a></li>  |
					<li><a href = "rulesandregulation.php">Datenschutz</a></li>  |
					<li><a href = "aboutus.php">Über uns</a></li>  |
					<li><a href = "contactus.php">Kontakt</a></li>  |
					<li><a href = "admin/index.php">verwaltung</a></li>

				</ul>

				</div>
			<div class="col-md-2 "></div>

	</div>
	<!-- end menu -->

	<!--create slide show with bootstrap -->
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/a.jpg" style = "width:100%; height:450px;" />
			</div>

			<div class="item">
				<img src="images/b.jpg" style = "width:100%; height:450px;"  />
			</div>

			<div class="item">
				<img src="images/c.jpg" style = "width:100%; height:450px;" />
			</div>

			<div class="item">
				<img src="images/d.jpg" style = "width:100%; height:450px;" />
			</div>

			<div class="item">
				<img src="images/e.jpg" style = "width:100%; height:450px;" />
			</div>

			<div class="item">
				<img src="images/f.jpeg" style = "width:100%; height:450px;" />
			</div>

			<div class="item">
				<img src="images/g.png" style = "width:100%; height:450px;" />
			</div>


		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- end slide show -->
	<br />
	<br />

	<!-- footer page -->
	<div style = "text-align:left; margin-left:10px;" class = "navbar navbar-default navbar-fixed-bottom" >
		<label> </label>
	</div>
	<!-- end footer -->
</body>
<!-- link jquery library and bootstrap library -->
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>


