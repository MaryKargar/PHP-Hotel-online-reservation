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
	
		<div  class = "container-fluid"  style = "background-color:rgba(0, 0, 0, 0.1); ">

			<div class="row"><div class="col-md-12"><br></div></div>


				<div class="row">
					<div class="col-md-3 col-xs-3"></div>
					<div class="col-md-6 col-xs-7">
						<a   style="font-family: 'Amin';font-size: 4vw;padding-left:2vw" >Online Reservation Hotel</a>
					</div>
					<div class="col-md-3 col-xs-2"></div>
				</div>

				<div class="row"><div class="col-md-12"><br></div></div>

		</div>
		<!-- end header -->

	<!-- create top menu -->
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-0"></div>
			<div class="col-md-10 col-xs-12">
				
				<ul id = "menu"  style="font-family: 'Amin'; font-size:3vh;" >

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
			<div class="col-md-0 col-xs-0"></div>

	</div>
	<!-- end menu -->

	</div>
	<div  class = "container " style="clear:both" dir="rtl">
		<!-- title for this section -->
		<div class = "panel panel-default" dir="rtl">
			<div class = "panel-body">
				<strong><h2 style="font-family: 'Amin'; float: left;">Reserivieren </h2></strong>
				<br>
		<!-- end title -->
				<?php
					// require_once Open another php file and run. Here we want to open the connect.php file that is code for connect to database.
					require_once 'admin/connect.php';
					// Extracts all data from room table and sorts it in ascending order by price.
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysqli_error($conn));
					// The data we collected in the previous step of the database should be displayed in html format. So we need a loop because the data is an array. Each line contains an image, room name and price and a reservation button.
					while($fetch = $query->fetch_array()){
				?>
					<!-- html format for each room and placement name, price , ... from $fetch array -->
					<div class = "row" style = "font-family: 'Amin';clear: both;">
						<div class="col-md-6 col-xs-6 ">
							<img src = "photo/<?php echo $fetch['photo']?>" style="width:100%;float:left;"/>
						</div>
						<div class="col-md-4 col-xs-3">
							<p style="font-size:3vw;text-align:left;"><?php echo $fetch['room_type']?></p>
							<p style = "color:#00ff00;font-size:2.5vw;text-align:left"><?php echo "price : ".$fetch['price']." EUR"?></p>
						</div>
						<div class="col-md-2 col-xs-3">
						<a style = "font-family: 'Amin';width: 100%; font-size:2vw; font-weight:bold;padding:8%;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info" >Reservieren</a>

						</div>
					</div>
					 
					
					<div class="row"><div class="col-12"><br></div></div>
					<hr>

					<!-- end html format -->
					
				<?php
					}
				?>
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


