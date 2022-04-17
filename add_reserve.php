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
	    
<!-- <script type="text/javascript">

var oldLink = null;

function setActiveStyleSheet(link, title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
  if (oldLink) oldLink.style.fontWeight = 'normal';
  oldLink = link;
  link.style.fontWeight = 'bold';
  return false;
}

</script> -->

<!-- style for html element -->
<style type="text/css">
.calendar {
	direction: rtl;
}

#flat_calendar_1, #flat_calendar_2{
	width: 200px;
}
.example {
	padding: 10px;
}

.display_area {
	background-color: #FFFF88
}
</style>
<!-- end style -->

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
	
	<div class="col-md-2 "></div>

</div>

<!-- end menu -->

</div>
	<div  class = "container" >
		<div class = "panel panel-default" >
			<div class = "panel-body" >
				<strong><h3 style="font-family: 'Amin';float: left;margin-left: 20px;">Kompletet Reservation</h3></strong>
				<br />
				<?php
				// require_once Open another php file and run. Here we want to open the connect.php file that is code for connect to database.
					require_once 'admin/connect.php';
					// get room data from database that click reserve button for it
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					// Returns a row of the table as a key value array
					$fetch = $query->fetch_array();
				?>

				<!-- place room data ($fetch array) in a html design.  -->
				<div class="container" style="clear:both">
					<div class="row"><div class="col-md-12"><br></div></div>
					<div class="row">
						<div class="col-md-5 ">
							<div style = "font-family: 'Amin';float: left">
								<div>
									<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
								</div>
								
							</div>

					</div>
						<div class="col-md-6">
								<div>
									<h3 style="margin-top: 80px;"><?php echo $fetch['room_type']?></h3>
									<h3 style = "color:#00ff00;"><?php echo "price : ".$fetch['price']."  EUR";?></h3>
								</div>
						</div>
					</div>
				</div>

				<div class="row"><div class="col-md-12"><br></div></div>
			<!-- end room data -->

			<!-- reserve room form  -->

				<div class="well" style = "font-family: 'Amin'">
					<form method = "POST" enctype = "multipart/form-data" class="w-75"  >
						<div class="row">
							
								<div class="col-md-6">
									<div class = "form-group" >
										<label>Vorname</label>
										<input type = "text" class = "form-control" name = "firstname" required = "required" />
									</div>			
								</div>
								<div class="col-md-6">
									<div class = "form-group">
										<label>Nachname</label>
										<input type = "text" class = "form-control" name = "lastname" required = "required" />
									</div>
									
								</div>
						
						</div>

						<div class="row">
							
								<div class="col-md-6">
									<div class = "form-group">
										<label>address</label>
										<input type = "text" class = "form-control" name = "address" required = "required" />
									</div>
									
								</div>
								<div class="col-md-6">
									<div class = "form-group">
										<label>Tell</label>
										<input type = "text" class = "form-control" name = "contactno" required = "required" />
									</div>
										
								</div>
						
						</div>

						<div class="row">
							
								<div class="col-md-6">
									<div class = "form-group">
										<label> checkin</label>
										<div class="form-group" dir="ltr" >

										<input id="date_input_1" type="date" class = "form-control" name="date" required = "required">
										</div>
									</div>
										
								</div>
								<div class="col-md-6">

									<div class = "form-group">
										<label> checkout</label>
										<div class="form-group" dir="ltr" >

											<input id="date_input_2" type="date" class = "form-control" name="date2" required = "required">
											
										</div>
									</div>
									
								</div>
						
						</div>


						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								
								<div class = "form-group">
									<button class = "btn btn-info form-control" name = "add_guest"> Buchen</button>
								</div>
							</div>
							<div class="col-md-4"></div>

						</div>
					</form>
				</div>
				<!-- end reserve room form -->

				<!-- attach add_query_reserve.php file -->
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<!-- footer page -->
	<div style = "text-align:left; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label></label>
	</div>
	<!-- end footer page -->
</body>
<!-- link jquery library and bootstrap library -->
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>


