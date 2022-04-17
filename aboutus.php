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
		<div class = "panel panel-default" style="font-family: 'Amin';padding-left:30px;">
			<div class = "panel-body">
			<!-- title for this section -->
				<strong style="float:left"><h3 >Über uns</h3></strong>
				<!-- sub title -->
				<p style = "float:left;clear:both;"> Luxus Hotel</p>
				<!-- end subtitle -->
				<!-- end title -->

				<!-- image above page -->
				<img style = "float:left;clear:both" src = "images/about.jpg" width = "250px" height = "250px" />
				<!-- enter row -->
				<br style = "clear:both;" />
				<br />
				<br />
			<!-- draw a dotted line -->
				<hr style = "border:1px dotted #000;" />
				<br />
			<!-- end dotted line -->

			<!-- create a card for image and text information. float attribut allows images to be placed side by side. Then these cards are repeated-->

				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/1.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Standard</h4></center>
					<center><label>Einsel bett</label> <label style = "color:red;"100 EUR</label></center>
				</div>
			<!-- end card -->

			<!-- start card -->
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/2.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Doppel bett</h4></center>
					<center><label style = "color:red;">150 EUR</label></center>
				</div>

			<!-- end card -->
			
			<!-- start card -->
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/3.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Superior</h4></center>
					<center><label>1 Medium Size Bed</label> <label style = "color:red;">160 EUR </label></center>
				</div>
			<!-- end card -->
			
			<!-- enter for create another row -->

				<br style = "clear:both;"/>
				<br />

			<!-- start card -->
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/4.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Super Deluxe</h4></center>
					<center><label>2 Medium Size Bed</label> <label style = "color:red;">170 EUR </label></center>
				</div>
			<!-- end card -->

			<!-- start card -->
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/5.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Jr. Suite</h4></center>
					<center><label>Matrimonial</label> <label style = "color:red;"200 EUR </label></center>
				</div>
			<!-- end card -->

			<!-- start card -->
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "images/6.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Executive Suite</h4></center>
					<center><label>Matrimonial</label> <label style = "color:red;">250 EUR</label></center>
				</div>
			<!-- end card -->

			<!-- enter for create another row -->
				<br style = "clear:both;"/>
				<br />
				<br />
			
			<!-- title list -->
				<strong style="float:left;"><h3>Servieses</h3></strong>
			<!-- create unorder list -->
				<ul style="float:left;clear:both;text-align:left;direction:ltr">
					<li style="margin-top:15px;"><label>24 Serviece</label></li>
					<li><label>TV</label></li>
					<li><label>BadeZimmer</label></li>
					<li><label>Kühlschrank und minibar</label></li>
					<li><label>Koffe ,Tee und Shampoo,...</label></li>
					<li><label>Fön</label></li>
					<li><label>Erste Hilfe Box</label></li>
					<li><label>Waschmeischine mit Trockner</label></li>
					<li><label>Gratis WIFI</label></li>
					<li><label>Pager</label></li>
					<li><label>Sicherheitdienst</label></li>
					<li><label>Minibar</label></li>
					<li><label>Meeting Zimmer</label></li>
					<li><label>Taxi und City tour</label></li>
					<li><label>Pool</label></li>
					<li><label>Geschenk einkauf geschäft</label></li>
					<li><label>Einkaufzentrum</label></li>
					<li><label>Geratis Parking</label></li>
				</ul>
			<!-- end list -->
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:left; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label> </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>


