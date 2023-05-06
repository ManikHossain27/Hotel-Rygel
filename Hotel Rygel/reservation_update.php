<?php 
	include_once('session_admin.php');
 ?>
 <br><br>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<h4 style="text-align: center;">Room Reservation</h4><br>
	<form action="" method="post">
			
			<?php 
					$link = mysqli_connect('localhost','root','','db_rygel');
					if (!$link) {die('Connection Fail'.mysqli_error($link));}


					$ids = $_GET['id'];


					$showquery ="select * from tbl_room_reservation where id ={$ids}";

					$showdata = mysqli_query($link, $showquery);

					$arrdata = mysqli_fetch_array($showdata);


					if(isset($_POST['update'])){
						$idupdate = $_GET['id'];

						$fname = mysqli_real_escape_string($link, $_POST['fname']);
						$lname = mysqli_real_escape_string($link, $_POST['lname']);
						$email = mysqli_real_escape_string($link, $_POST['email']);
						$mbl_num = mysqli_real_escape_string($link, $_POST['mbl_num']);
						$nid_num = mysqli_real_escape_string($link, $_POST['nid_num']);
						$pass_num = mysqli_real_escape_string($link, $_POST['pass_num']);
						$address = mysqli_real_escape_string($link, $_POST['address']);
						$city = mysqli_real_escape_string($link, $_POST['city']);
						$upazila = mysqli_real_escape_string($link, $_POST['upazila']);
						$zip_code = mysqli_real_escape_string($link, $_POST['zip_code']);
						$rooms = mysqli_real_escape_string($link, $_POST['rooms']);
						$adult_num = mysqli_real_escape_string($link, $_POST['adult_num']);
						$kids_num = mysqli_real_escape_string($link, $_POST['kids_num']);
						$checkin = mysqli_real_escape_string($link, $_POST['checkin']);
						$checkout = mysqli_real_escape_string($link, $_POST['checkout']);


						
						$updatequery = "update tbl_room_reservation set id='$idupdate', fname ='$fname', lname ='$lname', email='$email', mbl_num= '$mbl_num', nid_num= '$nid_num', pass_num ='$pass_num', address ='$address', city='$city', upazila= '$upazila', zip_code= '$zip_code',rooms ='$rooms', adult_num ='$adult_num', kids_num ='$kids_num', checkin='$checkin', checkout= '$checkout' where id= '$idupdate'";

						$iquery = mysqli_query($link, $updatequery);

								if ($iquery) {
									 echo '	<script>alert("Update Successfull.");</script>';
									 

								}else{
									
									echo '<script>alert("Update Failed")</script>';
									
								 }

					}
				?>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="fname">First Name*</label>
								<input type="text" class="form-control" name="fname" value="<?php echo $arrdata['fname']; ?>" placeholder="Enter your full name" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
							<div class="form-group col-md-6">
								<label for="lname">Last Name*</label>
								<input type="text" class="form-control" name="lname" value="<?php echo $arrdata['lname']; ?>" placeholder="Enter your full name" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="email" class="form-control" name="email" value="<?php echo $arrdata['email']; ?>" placeholder="Enter your email address" required>
							<div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please enter your email</div>
						</div>
						<div class="form-group">
							<label for="mbl_num">Mobile Number*</label>
							<input type="tel" class="form-control" name="mbl_num" value="<?php echo $arrdata['mbl_num']; ?>" placeholder="Enter your mobile number" required>
							<div class="invalid-feedback">Please enter mobile number</div>
						</div>
						<div class="form-group">
							<label for="nid_num">NID Number*</label>
							<input type="number" class="form-control" name="nid_num" value="<?php echo $arrdata['nid_num']; ?>" placeholder="Enter your NID number" required>
							<div class="invalid-feedback">Please enter NID number</div>
						</div>
						<div class="form-group">
							<label for="pass_num">Passport Number (optional)</label>
							<input type="number" class="form-control" name="pass_num" value="<?php echo $arrdata['pass_num']; ?>" placeholder="Enter your passport number">
						</div>
						<div class="form-group">
								<label for="lname">Address*</label>
								<input type="text" class="form-control" name="address" value="<?php echo $arrdata['address']; ?>" placeholder="Enter your full address" required>
								<div class="invalid-feedback">Please enter your address</div>
						</div>
						<div class="row">
							<div class="form-group col-md-4">
								<label for="city">City*</label>
								<input type="text" class="form-control" name="city" value="<?php echo $arrdata['city']; ?>" placeholder="Enter your city" required>
								<div class="invalid-feedback">Please enter your city</div>
							</div>
							<div class="form-group col-md-4">
								<label for="upazila">Upazila*</label>
								<input type="text" class="form-control" name="upazila" value="<?php echo $arrdata['upazila']; ?>" placeholder="Enter your upazila" required>
								<div class="invalid-feedback">Please enter your upazila</div>
							</div>
							<div class="form-group col-md-4">
								<label for="zip_code">Zip Code*</label>
								<input type="number" class="form-control" name="zip_code" value="<?php echo $arrdata['zip_code']; ?>" placeholder="Enter your zipcode" required>
								<div class="invalid-feedback">Please enter your zipcode</div>
							</div>
						</div>
						<div class="form-group">
					      <label for="sel1">rooms (select one):</label>
					      <select class="form-control" name="rooms" value="<?php echo $arrdata['rooms']; ?>">
					        <option selected>-- Select room type --</option>
					        <option value="Single Suite">Single Suite</option>
					        <option value="Regular Deluxe">Regular Deluxe</option>
					        <option value="Double Deluxe">Double Deluxe</option>
					        <option value="Executive Suite">Executive Suite</option>
					        <option value="Family Suite">Family Suite</option>
					        <option value="Premium Suite">Premium Suite</option>
					        <option value="Presedential Suite">Presedential Suite</option>
					      </select>
					    </div>
					    <div class="row">
							<div class="form-group col-md-6">
								<label for="adult_num">No. of adult*</label>
								<input type="number" class="form-control" name="adult_num" value="<?php echo $arrdata['adult_num']; ?>" placeholder="Enter number of adult" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
							<div class="form-group col-md-6">
								<label for="kids_num">No. of kids*</label>
								<input type="number" class="form-control" name="kids_num" value="<?php echo $arrdata['kids_num']; ?>" placeholder="Enter number of kids" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="checkin">Check-in-time</label>
						  		<input type="datetime-local" class="form-control" name="checkin" value="<?php echo $arrdata['checkin']; ?>" required>
								<div class="invalid-feedback">Please enter check-in-time</div>
							</div>
							<div class="form-group col-md-6">
								<label for="checout">Check-out-time</label>
						  		<input type="datetime-local" class="form-control" name="checkout" value="<?php echo $arrdata['checkout']; ?>" required>
								<div class="invalid-feedback">Please enter check-out-time</div>
							</div>
						</div>
						<br>
						  					
			    		<button type="submit" name="update" class="btn" style="background-color: #45aaf2">Submit</button>
					</form>
				</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer_user.php'); ?>