<?php include_once ('session_user.php'); ?>
<?php 
	$link = mysqli_connect('localhost','root','','db_rygel');
	if (!$link) {die('Connection Fail'.mysqli_error($link));}

?>
<div>
<img src="gallery/bedroom/single-suite/2.jpg" alt="single-suite bed" style="width:100%; height:580px;">
<!--Single Suite-->
<div class="container-fluid bg-transpa text-center">
	<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Single Suite</p>
	<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
</div>
<div class="container-fluid bg-transpa">
	<div class="row">
		<div class="col-md-6" style="text-align: justify;">
			<div class="container-fluid text-center"><br><br>
				<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">At A Glance</p>
				<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br>
			</div>
			<p style="padding:20px 60px;">These standard rooms come with one single bed, elegant linens, and comfortable armchairs. In the mornings, brew yourself a cup of coffee with the coffeemaker as you get ready for the day. If you need to, set up your laptop at the work desk and check email using free Wi-Fi. At the end of the day, you can relax with the soothing rain shower in the spacious bathroom, and then stream your favorite show on the TV with mirror casting before heading to bed. Other amenities include a wardrobe, double-glazed windows, and an in-room safe to secure your valuables.</p>
		</div>
		<div class="col-md-6">
			<div class="inner">
								<!--Carosole start from here-->
				<div id="demo" class="carousel slide" data-ride="carousel">
				        <!-- Indicators -->
				  	<ul class="carousel-indicators">
				   		<li data-target="#demo" data-slide-to="0" class="active"></li>
				     	<li data-target="#demo" data-slide-to="1"></li>
				      	<li data-target="#demo" data-slide-to="2"></li>
				    </ul>
				       <!-- The slideshow -->
				    <div class="carousel-inner">
				     	<div class="carousel-item active">
				     		<img src="gallery/bedroom/single-suite/1.jpg" style="height: 500px; width: 100%;">
				        	<div class="carousel-caption">
				           		<h3>Welcome</h3>
				          	</div> 
				      	</div>
				    	<div class="carousel-item">
				        	<img src="gallery/bedroom/single-suite/2.jpg" style="height: 500px; width: 100%;">
				    	</div>
				    	<div class="carousel-item">
				       		<img src="gallery/bedroom/single-suite/3.jpg" style="height: 500px; width: 100%;">
				    	</div>    
				  	</div>
				        <!-- Left and right controls -->
				  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
				   		<span class="carousel-control-prev-icon"></span>
					</a>
				  	<a class="carousel-control-next" href="#demo" data-slide="next">
				   		<span class="carousel-control-next-icon"></span>
				  	</a>
				</div>
				<!--Carosole End here-->
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-transpa" style="margin-top: 5px; margin-top: -.07px">
	<div class="container-fluid text-center">
		<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 30px;">FACTS & FIGURES</p>
	</div>
	<?php 
			$r1="select * from tbl_room where id=1";
			$queryr1= mysqli_query($link, $r1);
			//$nums = mysqli_num_rows($query);
			while ($resr1 = mysqli_fetch_array($queryr1)) { 
				?>
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4"><p class="room-details"><?php echo $resr1['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
					<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr1['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
					<div class="col-md-4"><p class="room-details"><?php echo $resr1['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
				</div>
			</div><br>	
		</div>
		<div class="container bg-transpare price" style="margin-top: -0.3px; padding: 20px 0px 15px;">
			<p> Pack Rate BDT <?php echo $resr1['price']; ?></p>
		</div><br><br>
		<?php
		}

	?>

<div class="container bg-transparent" style="margin-top: 5px;">
	<div class="row">
		<div class="col-md-6">
			<div class="container text-center">
				<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Amenities</p>
				<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br>
				<ul class="amenities">
					<li><i class="fas fa-bed fontawe"></i> One Single Bed</li>
					<li><i class="fas fa-tv fontawe"></i> 32" LCD TV with comprehensive selection of channels</li>
					<li><i class="fas fa-wind fontawe"></i> Central air condition system</li>
					<li><i class="fas fa-archive fontawe"></i> Safety deposit box</li>
					<li><i class="fas fa-concierge-bell fontawe"></i> 24 hours room service</li>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<div class="container text-center">
				<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Complimentary Services</p>
				<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br>
				<div class="row">
					<div class="col-md-6">
						<ul class="amenities">
							<li><i class="fas fa-bread-slice fontawe"></i>Breakfast</li>
							<li><i class="fas fa-apple-alt fontawe"></i> Fruit Basker</li>
							<li><i class="fas fa-wine-bottle fontawe"></i> Mineral Water(2 Bottles)</li>
							<li><i class="fas fa-coffee fontawe"></i>Tea & Coffee</li>		
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="amenities">
							<li><i class="fas fa-wifi fontawe"></i>Wifi</li>
							<li><i class="fas fa-book fontawe"></i> Library</li>
							<li><i class="fas fa-swimming-pool fontawe"></i>Swimming Pool</li>
							<li><i class="far fa-futbol fontawe"></i> Children Play Zone</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<br><br>
<?php include_once ('common/footer_user.php'); ?>

