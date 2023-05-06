<?php 
	include_once('session_admin.php');
	include 'common/config_room_reservation.php';
 ?>
 <br><br>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 10px; text-align: center;">Room Reservation</p><br>
	<form action="" method="post" class="needs-validation" novalidate>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="fname">First Name*</label>
								<input type="text" class="form-control" name="fname" placeholder="Enter your full name" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
							<div class="form-group col-md-6">
								<label for="lname">Last Name*</label>
								<input type="text" class="form-control" name="lname" placeholder="Enter your full name" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="email" class="form-control" name="email"placeholder="Enter your email address" required>
							<div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please enter your email</div>
						</div>
						<div class="form-group">
							<label for="mbl_num">Mobile Number*</label>
							<input type="tel" class="form-control" name="mbl_num" placeholder="Enter your mobile number" required>
							<div class="invalid-feedback">Please enter mobile number</div>
						</div>
						<div class="form-group">
							<label for="nid_num">NID Number*</label>
							<input type="number" class="form-control" name="nid_num" placeholder="Enter your NID number" required>
							<div class="invalid-feedback">Please enter NID number</div>
						</div>
						<div class="form-group">
							<label for="pass_num">Passport Number (optional)</label>
							<input type="number" class="form-control" name="pass_num" placeholder="Enter your passport number">
						</div>
						<div class="form-group">
								<label for="lname">Address*</label>
								<input type="text" class="form-control" name="address" placeholder="Enter your full address" required>
								<div class="invalid-feedback">Please enter your address</div>
						</div>
						<div class="row">
							<div class="form-group col-md-4">
								<label for="city">City*</label>
								<input type="text" class="form-control" name="city" placeholder="Enter your city" required>
								<div class="invalid-feedback">Please enter your city</div>
							</div>
							<div class="form-group col-md-4">
								<label for="upazila">Upazila*</label>
								<input type="text" class="form-control" name="upazila" placeholder="Enter your upazila" required>
								<div class="invalid-feedback">Please enter your upazila</div>
							</div>
							<div class="form-group col-md-4">
								<label for="zip_code">Zip Code*</label>
								<input type="number" class="form-control" name="zip_code" placeholder="Enter your zipcode" required>
								<div class="invalid-feedback">Please enter your zipcode</div>
							</div>
						</div>
						<div class="form-group">
					      <label for="sel1">rooms (select one):</label>
					      <select class="form-control" name="rooms">
					        <option selected>-- Select room type --</option>
					        <option value="Single Suite">Single Suite (Max Guest 1)</option>
					        <option value="Regular Deluxe">Regular Deluxe (Max Guest 2)</option>
					        <option value="Double Deluxe">Double Deluxe (Max Guest 2)</option>
					        <option value="Executive Suite">Executive Suite (Max Guest 2)</option>
					        <option value="Family Suite">Family Suite (Max Guest 6)</option>
					        <option value="Premium Suite">Premium Suite (Max Guest 4)</option>
					        <option value="Presedential Suite">Presedential Suite (Max Guest 4)</option>
					        <option value="Business Meeting">Business Meeting Hall</option>
					        <option value="Seminar & Events">Seminar & Events Hall</option>
					      </select> 
					    </div>
					    <div class="row">
							<div class="form-group col-md-6">
								<label for="adult_num">No. of adult*</label>
								<input type="number" class="form-control" name="adult_num" placeholder="Enter number of adult" required>
								<div class="invalid-feedback">Please enter your name</div>
							</div>
							<div class="form-group col-md-6">
								<label for="kids_num">No. of kids*</label>
								<input type="number" class="form-control" name="kids_num" placeholder="Enter number of kids" >
								<div class="invalid-feedback">Please enter your name</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="checkin">Check-in-time</label>
						  		<input type="datetime-local" class="form-control" name="checkin" required>
								<div class="invalid-feedback">Please enter check-in-time</div>
							</div>
							<div class="form-group col-md-6">
								<label for="checout">Check-out-time</label>
						  		<input type="datetime-local" class="form-control" name="checkout" required>
								<div class="invalid-feedback">Please enter check-out-time</div>
							</div>
						</div>
						<br>
						  					
			    		<button type="submit" name="submit" class="btn" style="background-color: #45aaf2">Submit</button>
					</form>
				</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer_user.php'); ?>