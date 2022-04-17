<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Online Reservation Hotel</title>
		<meta charset = "utf-8" />
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
				<a class = "navbar-brand"  style="font-family: 'Amin';font-size: 25px;" >Online Reservation Hotel</a>
			</div>
		</div>
	</nav>
	<!-- end header -->

	<!-- create top menu -->
	<div class="container">
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

	<!-- title for this section -->
	<div style = "margin-left:0;" class = "container"  >
		<div class = "panel panel-default" style="font-family: 'Amin'">
			<div class = "panel-body" style="padding-left:50px">
				<strong style="float:left;clear:both"><h3>DATENSCHUTZ</h3></strong>
	<!-- end title -->
	<!-- enter row -->
				<br >
				<br >
				<br >
	<!-- create an order list with ol -->
				<ol style="text-align:left;">
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Price</h4></strong></li>
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Zahlung method</h4></strong></li>
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Tierebedarf</h4></strong></li>
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Checkin</h4></strong></li>
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Checkout</h4></strong></li>
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Koffer und Geld</h4></strong></li>
					<li style = "color:#ff0000;margin-top:20px;"><strong><h4 >Gefahrlische bedingung</h4></strong></li>
				</ol>
	<!-- end list -->
	
			</div>
		</div>
	</div>
	<br />
	<br />
	<!-- footer -->
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label></label>
	</div>
	<!-- end footer -->
</body>
<!-- link jquery library and bootstrap library -->
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>


