<?php
	// require_once Open another php file and run. Here we want to open the connect.php file that is code for connect to database.
	require_once 'admin/connect.php';
	// reserve room form data post for this script and we get each form item with $_post['field_name']
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		// $middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$checkout=$_POST['date2'];
		// execute a insert query (sql language) for register person information 
		$conn->query("INSERT INTO `guest` (firstname, lastname, address, contactno) VALUES('$firstname', '$lastname', '$address', '$contactno')") or die(mysqli_error($conn));
		// get person information that register in previous step
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error($conn));
		$fetch = $query->fetch_array();
		// check arrivals and exit date. ckeck transaction table for ensure empty room
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error($conn));
		$row = $query2->num_rows;

        $checkin1 = $_POST['date'];
        $checkout1=$_POST['date2'];


        
		// get today date
        $solar_date = new DateTime();
        $checkin=strtotime($checkin);
        $checkout=strtotime($checkout);
		$solar_date = $solar_date->format('d/m/Y');

		// Check that arrival date less than exit date  
        if($checkout <= $checkin ){
            echo "<script>alert('Achtung!check in Datum muss weniger als checkout seinد')</script>";

        }else {

			// check arrival date more than today date

            if ($checkin < $solar_date) {
                echo "<script>alert('Achtung!checkin Datum muss mehr als Heute Datum sein $solar_date ')</script>";
            } else {
				// if before this date is reserved show message 
                if ($row > 0) {
                    echo "<div class = 'col-md-4' style='font-family: Amin;'>
								<label style = 'font-size: 22px;color:#ff0000;'>Diese Datum wurde bereits gebucht</label><br />";
//							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
//							while($f_date = $q_date->fetch_array()){
//								echo "<ul>
//										<li>
//											<label class = 'alert-danger'>".jdade("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>
//										</li>
//									</ul>";
//							}
                    "</div>";
                } else {
					// If the person's information is recorded, register the room for this person in transaction table
                    if ($guest_id = $fetch['guest_id']) {
                        $room_id = $_REQUEST['room_id'];
                        $conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin, checkout) VALUES('$guest_id', '$room_id', 'Pending', '$checkin1','$checkout1')") or die(mysqli_error($conn));

                        //							header("location:../reply_reserve.php");
						// create sucsessfull message dynamically
                        echo "<div style = \"margin-right:0;\" class = \"container\" dir=\"rtl\">
		                            <div class = \"panel panel-default\">
		                            	<div class = \"panel-body\">
			                               	<strong style=\"color:#00ff00;float:left;\"><h3 style=\"font-family: 'Amin'\">kompletet Reservation prozess</h3></strong>
			                                	<br style=\"clear:both\" />
		                                  		<div class = \"col-md-4\"></div>
			                                	<div class = \"well col-md-4\">
		                              			<center><h3 style=\"font-family: 'Amin'\">Bitte suchen sie unsere Hotel</h3></center>
		                            			<br />
		                            			<center><h4 style=\"font-family: 'Amin'\">Dankeschön</h4></center>
					                            <br />
				                             	<center><a href = \"reservation.php\" class = \"btn btn-success\" style=\"font-family: 'Amin'\"> zuruck zu Reservation seite</a></center>
				                                </div>
			                                 	<div class = \"col-md-4\"></div>
		                                </div>
	                                </div>
                                </div>";
                    } else {
                        echo "<script>alert('Fehler von Java')</script>";
                    }
                }
            }
        }
	}


