 		<!--header-->
<?php 

	include_once('common/header_admin.php');					//include wirh contact_admin

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

					$showquery ="select * from tbl_room where id ={$ids}";

					$showdata = mysqli_query($link, $showquery);

					$arrdata = mysqli_fetch_array($showdata);


					if(isset($_POST['update'])){
						$idupdate = $_GET['id'];

						$roomtype = mysqli_real_escape_string($link, $_POST['roomtype']);
						$sizesqm = mysqli_real_escape_string($link, $_POST['sizesqm']);
						$size = mysqli_real_escape_string($link, $_POST['size']);
						$maxguest = mysqli_real_escape_string($link, $_POST['maxguest']);
						$price = mysqli_real_escape_string($link, $_POST['price']);


						$updatequery = "update tbl_room set id='$idupdate', roomtype ='$roomtype', sizesqm='$sizesqm', size='$size', maxguest= '$maxguest', price= '$price' where id= '$idupdate'";

						$iquery = mysqli_query($link, $updatequery);

								if ($iquery) {
									 echo '	<script>alert("Update Successfull.");</script>';


								}else{
									
									echo '<script>alert("Update Failed")</script>';
									
								 }


					}
				?>

			<div class="form-group"> 
				<label for="roomtype">Room Type*</label>
				<input type="text" class="form-control" name="roomtype"placeholder="Enter room type" value="<?php echo $arrdata['roomtype']; ?>" required>
				<div class="invalid-feedback">Please enter room type</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="roomtype">Size (SQM)*</label>
					<input type="number" class="form-control" name="sizesqm" placeholder="Enter room size" value="<?php echo $arrdata['sizesqm']; ?>" required>
					<div class="invalid-feedback">Please enter room size</div>
				</div>
				<div class="form-group col-md-6">
					<label for="size">Size (SQF)*</label>
					<input type="number" class="form-control" name="size" placeholder="Enter room size" value="<?php echo $arrdata['size']; ?>" required>
					<div class="invalid-feedback">Please enter Room Size</div>
				</div>
			</div>
			<div class="form-group">
				<label for="maxguest">Maximum Guest*</label>
				<input type="number" class="form-control" name="maxguest"placeholder="Enter maximum guest number" value="<?php echo $arrdata['maxguest']; ?>" required>
				<div class="valid-feedback">Valid</div>
				<div class="invalid-feedback">Please enter your email</div>
			</div>
			<div class="form-group">
				<label for="number">Price*</label>
				<input type="tel" class="form-control" name="price" placeholder="Enter room price" value="<?php echo $arrdata['price']; ?>" required>
				<div class="invalid-feedback">Please enter mobile number</div>
			</div>
			<br>
		    	<button type="submit" name="update" class="btn" style="background-color: #45aaf2">Submit</button>
			</form>
		</div>
	
</div><br><br>


				


		<!--footer-->
<?php include_once ('common/footer_user.php'); ?>