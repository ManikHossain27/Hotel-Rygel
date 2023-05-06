<?php 
if(isset($_POST['submit'])){
	$link = mysqli_connect('localhost','root','','db_rygel');

	if (!$link) {
		die('Connection Fail'.mysqli_error($link));
	}

	$roomtype = mysqli_real_escape_string($link, $_POST['roomtype']);
	$size = mysqli_real_escape_string($link, $_POST['size']);
	$maxguest = mysqli_real_escape_string($link, $_POST['maxguest']);
	$price = mysqli_real_escape_string($link, $_POST['price']);



	$insertquery = "insert into tbl_room(roomtype, size, maxguest, price) values('$roomtype', '$size', '$maxguest', '$price')";
	$iquery = mysqli_query($link, $insertquery);

			if ($iquery) {
				 echo '	<script>alert("Room insertion Successfull.");</script>';
			}else{
				
				echo '<script>alert("Not Inserted")</script>';
				
			 }


}
?>