<?php 
	include_once('session_admin.php');
 ?>
 <br><br>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<h4 style="text-align: center;">Users</h4><br>
	<form action="" method="post">
			
			<?php 
					$link = mysqli_connect('localhost','root','','db_rygel');
					if (!$link) {die('Connection Fail'.mysqli_error($link));}


					$ids = $_GET['id'];


					$showquery ="select * from tbl_users where id ={$ids}";

					$showdata = mysqli_query($link, $showquery);

					$arrdata = mysqli_fetch_array($showdata);


					if(isset($_POST['register'])){
						$idupdate = $_GET['id'];

						$name = mysqli_real_escape_string($link, $_POST['name']);
						$username = mysqli_real_escape_string($link, $_POST['username']);
						$email = mysqli_real_escape_string($link, $_POST['email']);
						$password = mysqli_real_escape_string($link, $_POST['password']);
						$cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);
						$pass = password_hash($password, PASSWORD_BCRYPT);
						$cpass = password_hash($cpassword, PASSWORD_BCRYPT);


						
						$updatequery = "update tbl_users set id='$idupdate', name ='$name', username ='$username', email='$email', password= '$pass', cpassword= '$cpass' where id= '$idupdate'";

						$iquery = mysqli_query($link, $updatequery);

								if ($iquery) {
									 echo '	<script>alert("Update Successfull.");</script>';
									 //header('location:contact_admin.php');

								}else{
									
									echo '<script>alert("Update Failed")</script>';
									
								 }

					}
				?>

						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Enter your full name" value="<?php echo $arrdata['name']; ?>" required>
						</div>
						<div class="form-group">
							<label for="username">User Name</label>
							<input type="text" class="form-control" name="username" placeholder="Enter your user name" value="<?php echo $arrdata['username']; ?>" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Enter your email address" value="<?php echo $arrdata['email']; ?>" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?php echo $arrdata['password']; ?>" required>
						</div>
						<div class="form-group">
							<label for="cpassword">Confirm Password</label>
							<input type="password" class="form-control" name="cpassword" placeholder="Enter the same password" value="<?php echo $arrdata['cpassword']; ?>" required>
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
<?php include_once ('common/footer_user.php'); ?>