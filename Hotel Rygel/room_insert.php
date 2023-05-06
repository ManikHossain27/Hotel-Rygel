<?php 
	//include_once('session_admin.php');
	include 'common/header_admin.php';
	include 'common/config_room_insert.php';
 ?>
 <br><br>
<!--Address & Form tab-->
<div>
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 10px; text-align: center;">Add New Room</p><br>
		<form action="" method="post" class="needs-validation" novalidate>
			<div class="form-group"> 
				<label for="roomtype">Room Type*</label>
				<input type="text" class="form-control" name="roomtype"placeholder="Enter room type" required>
				<div class="invalid-feedback">Please enter room type</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="roomtype">Size (SQM)*</label>
					<input type="number" class="form-control" name="sizesqm" placeholder="Enter room size" required>
					<div class="invalid-feedback">Please enter room size</div>
				</div>
				<div class="form-group col-md-6">
					<label for="size">Size (SQF)*</label>
					<input type="number" class="form-control" name="size" placeholder="Enter room size" required>
					<div class="invalid-feedback">Please enter Room Size</div>
				</div>
			</div>
			<div class="form-group"> 
				<label for="maxguest">Maximum Guest*</label>
				<input type="number" class="form-control" name="maxguest"placeholder="Enter maximum guest number" required>
				<div class="invalid-feedback">Please enter your email</div>
			</div>
			<div class="form-group">
				<label for="number">Price (BDT)*</label>
				<input type="tel" class="form-control" name="price" placeholder="Enter room price" required>
				<div class="invalid-feedback">Please enter mobile number</div>
			</div>
			<br>
			  					
			<button type="submit" name="submit" class="btn" style="background-color: #45aaf2">Submit</button>
		</form>
	</div>
	</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer.php'); ?>