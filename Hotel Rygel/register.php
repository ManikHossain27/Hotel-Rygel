<?php 									//only for registration   
	session_start();
	include 'common/header.php';
	include 'common/config_register.php';

?>

					<!-- Sign Up modal -->

<br><br>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<h4>Register</h4>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
						</div>
						<div class="form-group">
							<label for="username">User Name</label>
							<input type="text" class="form-control" name="username" placeholder="Enter your user name" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter your password" required>
						</div>
						<div class="form-group">
							<label for="cpassword">Confirm Password</label>
							<input type="password" class="form-control" name="cpassword" placeholder="Enter the same password" required>
						</div>
						<div class="form-group form-check">
			      			<label class="form-check-label">
			        			<input class="form-check-input" type="checkbox" name="remember" required> I agree to all the tearms and conditions.
			      			</label>
			    		</div>
			    		<button type="submit" name="register" class="btn" style="background-color: #45aaf2">Submit</button>
			    		<p style="float: right;">Already have an account! <a href="login_user.php">Login</a></p>
					</form>
				</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer.php'); ?>