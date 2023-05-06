<?php 
if(isset($_POST['submit'])){
	$link = mysqli_connect('localhost','root','','db_rygel');

	if (!$link) {
		die('Connection Fail'.mysqli_error($link));
	}

	$name = mysqli_real_escape_string($link, $_POST['name']);
	$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$message = mysqli_real_escape_string($link, $_POST['message']);

	$insertquery = "insert into tbl_contactus(name, mobile, email, message) values('$name', '$mobile', '$email', '$message')";
	$iquery = mysqli_query($link, $insertquery);

			if ($iquery) {
				 echo '	<script>alert("Message Successfull.");</script>';
			}else{
				
				echo '<script>alert("Message sent Failed")</script>';
				
			 }


}
?>