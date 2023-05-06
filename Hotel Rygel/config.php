<?php  
		$link = mysqli_connect('localhost','root','','db_rygel');
		
		$email 	  = $_POST['email'];
		$password = $_POST['password'];

		if (!empty($email) && !empty($password)) {
			$sql = "SELECT * FROM tbl_user where email = '".$email."' and password = '".$password."' limit 1";
			$result = mysqli_query($link,$sql);

			if (mysqli_num_rows($result)==1) {
					header("Location:session.php");
				}else{
				echo "Password or Email does not match. Please create ain account.";
			}
		}
	?>