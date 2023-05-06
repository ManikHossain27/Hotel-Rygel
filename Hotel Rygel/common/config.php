<?php 
		include 'common/header.php';
?>
<?php  

		$link = mysqli_connect('localhost','root','','db_rygel');
		
		$email 	  = $_POST['email'];
		$password = $_POST['password'];
		$pass=md5($_POST['password']);

		if (!empty($email) && !empty($password)) {
			$sql = "SELECT * FROM tbl_user where email = '".$email."' and password = '".$pass."' limit 1";
			$result = mysqli_query($link,$sql);

			if (mysqli_num_rows($result)==1) {
					header("Location:session.php");
				}else{
					echo "Error";
					echo "$pass";
					echo "password";
					echo "Password or email does not exist. Please create an account.";
				//echo '<script>alert("Welcome to Geeks for Geeks")</script>';
			}
		}
	?>