		<!--header-->
<?php 
	include_once ('session_user.php'); 
	include 'common/config_contactus.php';

?>

<div class="text-center">
	<p style="font-family: 'Kaushan Script', cursive; font-size: 50px; padding-top: 10px;">Contact Us</p>
	<img src="gallery/underline.png" style="width: 350px; height: 60px; margin-top: -35px; padding-left: 5px;">
</div>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6" style="text-align: center;border-right: 7px solid #f1f2f6; border-top-right-radius: 10%;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 35px">HOTEL RYGEL</p>
			<p style="margin-top: -15px;">For Reservation: +88 01521 503629, +88 01521 503630
			<br>For Events: +88 01521 503631
			<br>Fax: +88 02 3654821</p>
			<p style="font-family: 'Kaushan Script', cursive; font-size: 30px; padding-top: 10px;">Corporate Office</p>
			<p style="margin-top: -15px;">House #121, Apt.#D5, Road 2, Block D, Mirpur<br>Dhaka 10250, Bangladesh
			<br>Tel: +88 02 9562348 <br>Fax: +88 02 3656582</p>
		</div>

		<div class="col-md-6" style="border-left: 7px solid #f1f2f6; border-top-left-radius: 10%;">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate style="padding: 35px 10px;">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter your name" required>
					<div class="invalid-feedback">Please enter your name</div>
				</div>
				<div class="form-group">
					<label for="tel">Mobile</label>
					<input type="tel" class="form-control" name="mobile" placeholder="Enter your mobile number" required>
					<div class="invalid-feedback">Please enter your mobile number</div>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
					<div class="invalid-feedback">Please enter your email</div>
				</div>
				<div class="form-group">
					<label for="text">Message</label>
					<textarea  id=""  name="message" class="form-control" style="height: 200px;" required></textarea>
					<div class="invalid-feedback">Please enter your message</div>
				</div>
		    	<button type="submit" name="submit" class="btn" style="background-color: #45aaf2">Submit</button>
			</form>
		</div>
	</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer_user.php'); ?>