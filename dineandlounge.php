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
	<div style = "margin-left:0;" class = "container" dir="rtl">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<!-- title for this section -->
				<strong><h3 style="font-family: 'Amin';float:left">Speise karte</h3></strong>
				<!-- end title -->
				<!-- create enter -->
				<br  style="clear:both">
				<br />
				<!-- create a card for image. float attribut allows images to be placed side by side. Then these cards are repeated-->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/1.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/2.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/3.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/4.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->
			
				<!-- enter for create another row -->
				<br style = "clear:both;" />
				<br />

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/5.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/6.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/7.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/8.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- enter for create another row -->
				<br style = "clear:both;" />
				<br />
				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/9.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/10.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/11.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

				<!-- start card -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/dine/12.jpg" width = "250" height = "250"/>
				</div>
				<!-- end card -->

			</div>
		</div>
	</div>
	<br />
	<br />
	<!-- footer -->
	<div style = "text-align:left; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label> </label>
	</div>
	<!-- end footer -->
</body>
<!-- link jquery library and bootstrap library -->
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>


