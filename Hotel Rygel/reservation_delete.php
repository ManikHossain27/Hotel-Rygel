<?php 
	$link = mysqli_connect('localhost','root','','db_rygel');
	if (!$link) {die('Connection Fail'.mysqli_error($link));}

	$id= $_GET['id'];

	$deletequery = "delete from tbl_room_reservation where id=$id";

	$query = mysqli_query($link,$deletequery);

	header('location:reservation_admin.php');
	


 ?>