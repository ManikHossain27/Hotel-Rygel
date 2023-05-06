<?php 
		session_start();
		include 'common/header.php';
		include 'common/config_user.php';

?>

					<!-- Sign in modal -->
<!--Address & Form tab-->
<br><br>
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 70px;">
	<h4>Login</h4>

	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate>
		<div class="form-group">
			<label for="email">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
				<div class="invalid-feedback">Please enter your email</div>
		</div>
		<div class="form-group">
			<label for="pwt">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Enter your password" required>
				<div class="invalid-feedback">Please enter your Password</div>
		</div>
		<button type="submit" class="btn" name="login" style="background-color: #45aaf2">Login</button>
		<p style="float: right;">Didn't have any account! <a href="register.php">Register</a></p>
	</form>
	</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer.php'); ?>