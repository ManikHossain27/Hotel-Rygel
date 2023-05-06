<?php 
if(isset($_POST['submit'])){
	$link = mysqli_connect('localhost','root','','db_rygel');

	if (!$link) {
		die('Connection Fail'.mysqli_error($link));
	}

	$fname = mysqli_real_escape_string($link, $_POST['fname']);
	$lname = mysqli_real_escape_string($link, $_POST['lname']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$mbl_num = mysqli_real_escape_string($link, $_POST['mbl_num']);
	$nid_num = mysqli_real_escape_string($link, $_POST['nid_num']);
	$pass_num = mysqli_real_escape_string($link, $_POST['pass_num']);
	$address = mysqli_real_escape_string($link, $_POST['address']);
	$city = mysqli_real_escape_string($link, $_POST['city']);
	$upazila = mysqli_real_escape_string($link, $_POST['upazila']);
	$zip_code = mysqli_real_escape_string($link, $_POST['zip_code']);
	$rooms = mysqli_real_escape_string($link, $_POST['rooms']);
	$adult_num = mysqli_real_escape_string($link, $_POST['adult_num']);
	$kids_num = mysqli_real_escape_string($link, $_POST['kids_num']);
	$checkin = mysqli_real_escape_string($link, $_POST['checkin']);
	$checkout = mysqli_real_escape_string($link, $_POST['checkout']);



	$insertquery = "insert into tbl_room_reservation(fname, lname, email, mbl_num, nid_num, pass_num, address, city, upazila, zip_code, rooms, adult_num, kids_num, checkin, checkout) values('$fname', '$lname', '$email', '$mbl_num', '$nid_num', '$pass_num', '$address', '$city', '$upazila', '$zip_code', '$rooms', '$adult_num', '$kids_num', '$checkin', '$checkout')";
	$iquery = mysqli_query($link, $insertquery);

			if ($iquery) {
				 echo '	<script>alert("Reservation Successfull.");</script>';
			}else{
				
				echo '<script>alert("No Inserted")</script>';
				
			 }


}
?>