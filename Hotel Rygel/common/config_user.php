<?php  
		
	if(isset($_POST['login'])){
		$link = mysqli_connect('localhost','root','','db_rygel');

	if (!$link) {
		die('Connection Fail'.mysqli_error($link));
	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	$email_search = "select * from tbl_users where email= '$email' ";
	$query = mysqli_query($link, $email_search);

	$email_count = mysqli_num_rows($query);

	if ($email_count) {
		$email_pass =mysqli_fetch_assoc($query);

		$db_pass = $email_pass['password'];


		$_SESSION['id'] = $email_pass['id'];
		$_SESSION['name'] = $email_pass['name'];
		$_SESSION['username'] = $email_pass['username'];
		$_SESSION['email'] = $email_pass['email'];

		$pass_decode = password_verify($password, $db_pass);
		if ($pass_decode) {
			?>
			<script >
				
				location.replace("home_user.php")	  				//location should be change
			</script>
			<?php
		}else{
			?>
			<script >
				alert('Password Incorrect!');
			</script>
			<?php
		}
	}else{
		?>
			<script >
				alert('Invalid Email!');
			</script>
			<?php
	}


}
?>