		<!--header-->
<?php 

	include_once('session_admin.php');						//include wirh contact_admin

?>
<br><br>

<div class="text-center">
	<p style="font-family: 'Kaushan Script', cursive; font-size: 30px; padding-top: 10px;">Contact Us</p>
	<img src="gallery/underline.png" style="width: 350px; height: 60px; margin-top: -35px; padding-left: 5px;">
</div>
<!--Address & Form tab-->
<div class="container bg-transparent">
		<div style="border-top-left-radius: 10%; max-width: 600px; margin: 0 auto;">
			<form action="" method="post" class="needs-validation" novalidate style="padding: 35px 10px;">

				<?php 
					$link = mysqli_connect('localhost','root','','db_rygel');
					if (!$link) {die('Connection Fail'.mysqli_error($link));}


					$ids = $_GET['id'];

					$showquery ="select * from tbl_contactus where id ={$ids}";

					$showdata = mysqli_query($link, $showquery);

					$arrdata = mysqli_fetch_array($showdata);


					if(isset($_POST['update'])){
						$idupdate = $_GET['id'];

						$name = mysqli_real_escape_string($link, $_POST['name']);
						$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
						$email = mysqli_real_escape_string($link, $_POST['email']);
						$message = mysqli_real_escape_string($link, $_POST['message']);


						$updatequery = "update tbl_contactus set id='$idupdate', name ='$name', mobile='$mobile', email= '$email', message= '$message' where id= '$idupdate'";

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
					<input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?php echo $arrdata['name']; ?>" required>
					<div class="invalid-feedback">Please enter your name</div>
				</div>
				<div class="form-group">
					<label for="tel">Mobile</label>
					<input type="tel" class="form-control" name="mobile" placeholder="Enter your mobile number" value="<?php echo $arrdata['mobile']; ?>" required>
					<div class="invalid-feedback">Please enter your mobile number</div>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Enter your email address" value="<?php echo $arrdata['email']; ?>" required>
					<div class="invalid-feedback">Please enter your email</div>
				</div>
				<div class="form-group">
					<label for="text">Message</label>
					<textarea  name="message" class="form-control" style="height: 200px;" required><?php echo $arrdata['message']; ?></textarea>
					<div class="invalid-feedback">Please enter your message</div>
				</div>
		    	<button type="submit" name="update" class="btn" style="background-color: #45aaf2">Submit</button>
			</form>
		</div>
	
</div><br><br>


				


		<!--footer-->
<?php include_once ('common/footer.php'); ?>