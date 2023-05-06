<?php include_once ('session_user.php'); ?>
<?php 
	$link = mysqli_connect('localhost','root','','db_rygel');
	if (!$link) {die('Connection Fail'.mysqli_error($link));}

?>
<!--Welcome Note -->
<div class="container-fluid welcome bg-transpa">
  <p style="font-family: 'Kaushan Script', cursive;padding-top: 70px; font-size: 35px;margin-top: -34px;">Discover Rooms & Suites</p>
  <img src="gallery/underline.png" alt="underline" style="width: 450px; margin-top: -55px;">
  <div class="container text-justify">
  	<p style="font-size: 20px; padding-top: 5px; padding-bottom: 40px">Sleek style, plush furnishings, and modern decor combine to create an unforgettable stay at Hotel Rygel. Each of our 200 five-star hotel rooms and suites offers incredible views of the sparkling pool, lush landscape, and bustling city streets. Enjoy conveniences like free Wi-Fi, electronic safes, and individual climate control. You can enjoy relaxing in your room or head to one of our on-site lounges. Non-smoking floors are available for your comfort, and corporate travelers appreciate upgraded amenities like a complimentary breakfast while staying on our exclusive Business Class floors.</p>
  </div>
</div> 

					<!--Room Details-->
<!--Single Suite-->
<div class="container bg-transparent">
	<div class="row">
		<?php 
			$r1="select * from tbl_room where id=1";
			$queryr1= mysqli_query($link, $r1);
			//$nums = mysqli_num_rows($query);
			while ($resr1 = mysqli_fetch_array($queryr1)) { 
				?>
				<div class="col-md-6" style="text-align: center;"><br><br>
					<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Single Suite</p>
					<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
					<div class="container-fluid justify-content-center">
						<div class="row">
							<div class="col-md-4"><p class="room-details"><?php echo $resr1['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
							<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr1['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
							<div class="col-md-4"><p class="room-details"><?php echo $resr1['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
						</div>
					</div><br>
					<div class="container-fluid justify-content-center">
						<div class="row">
							<div class="col-md-6 pack">Pack Rate </div>
							<div class="col-md-6 pack-price">BDT <?php echo $resr1['price']; ?></div>
						</div><br><br><hr>
					</div>
					<div class="container-fluid justify-content-center">
						<a href="singlesuite_user.php" class="learn-more-btn">Learn More</a>
					</div>
				</div>
				<?php
			}

		?>

		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/single-suite/2.jpg" height="500px" width="100%">
			</div>
		</div>
	</div>
</div><br>
<!--Regular Delux-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/single-deluxe/1.jpg" height="500px" width="100%">
			</div>
		</div>
		<?php 
			$r2="select * from tbl_room where id=2";
			$queryr2= mysqli_query($link, $r2);
			while ($resr2 = mysqli_fetch_array($queryr2)) { 
				?>
				<div class="col-md-6" style="text-align: center;"><br><br>
					<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Regular Deluxe</p>
					<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
					<div class="container-fluid justify-content-center">
						<div class="row">
							<div class="col-md-4"><p class="room-details"><?php echo $resr2['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
							<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr2['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
							<div class="col-md-4"><p class="room-details"><?php echo $resr2['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
						</div>
					</div><br>
					<div class="container-fluid justify-content-center">
						<div class="row">
							<div class="col-md-6 pack">Pack Rate </div>
							<div class="col-md-6 pack-price">BDT <?php echo $resr2['price']; ?></div>
						</div><br><br><hr>
					</div>
					<div class="container-fluid justify-content-center">
						<a href="regulardeluxe_user.php" class="learn-more-btn">Learn More</a>
					</div>
				</div>
				<?php
			}

		?>
	</div>
</div><br>
<!--Double Deluxe-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6" style="text-align: center;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Double Deluxe</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
			<?php 
				$r3="select * from tbl_room where id=3";
				$queryr3= mysqli_query($link, $r3);
				while ($resr3 = mysqli_fetch_array($queryr3)) { 
					?>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-4"><p class="room-details"><?php echo $resr3['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
					<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr3['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
					<div class="col-md-4"><p class="room-details"><?php echo $resr3['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
				</div>
			</div><br>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-6 pack">Pack Rate </div>
					<div class="col-md-6 pack-price">BDT <?php echo $resr3['price']; ?></div>
				</div><br><br><hr>
			</div>
			<div class="container-fluid justify-content-center">
				<a href="doubledeluxe_user.php" class="learn-more-btn">Learn More</a>
			</div>
		</div>
		<?php
			}

		?>

		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/double-deluxe/1.jpg" height="500px" width="100%">
			</div>
		</div>
	</div>
</div><br>

<!--Executive Suite-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/esecutive-suite/1.jpg" height="500px" width="100%">
			</div>
		</div>
		<?php 
			$r4="select * from tbl_room where id=4";
			$queryr4= mysqli_query($link, $r4);
			while ($resr4 = mysqli_fetch_array($queryr4)) { 
				?>
		<div class="col-md-6" style="text-align: center;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Executive Suite</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-4"><p class="room-details"><?php echo $resr4['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
					<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr4['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
					<div class="col-md-4"><p class="room-details"><?php echo $resr4['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
				</div>
			</div><br>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-6 pack">Pack Rate </div>
					<div class="col-md-6 pack-price">BDT <?php echo $resr4['price']; ?></div>
				</div><br><br><hr>
			</div>
			<div class="container-fluid justify-content-center">
				<a href="executivesuit_user.php" class="learn-more-btn">Learn More</a>
			</div>
		</div>
		<?php
			}

		?>
	</div>
</div><br>
<!--Family Suite-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6" style="text-align: center;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Family Suite</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
			<?php 
			$r5="select * from tbl_room where id=5";
			$queryr5= mysqli_query($link, $r5);
			while ($resr5 = mysqli_fetch_array($queryr5)) { 
				?>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-4"><p class="room-details"><?php echo $resr5['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
					<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr5['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
					<div class="col-md-4"><p class="room-details"><?php echo $resr5['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
				</div>
			</div><br>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-6 pack">Pack Rate </div>
					<div class="col-md-6 pack-price">BDT <?php echo $resr5['price']; ?></div>
				</div><br><br><hr>
			</div>
			<div class="container-fluid justify-content-center">
				<a href="familysuit_user.php" class="learn-more-btn">Learn More</a>
			</div>
		</div>
		<?php
			}

		?>
		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/family-suite/2.png" height="500px" width="100%">
			</div>
		</div>
	</div>
</div><br>
<!--Premium Suite-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/premium-double-suite/1.jpg" height="500px" width="100%">
			</div>
		</div>
		<div class="col-md-6" style="text-align: center;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Premium Suite</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
			<?php 
			$r6="select * from tbl_room where id=6";
			$queryr6= mysqli_query($link, $r6);
			while ($resr6 = mysqli_fetch_array($queryr6)) { 
				?>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-4"><p class="room-details"><?php echo $resr6['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
					<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr6['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
					<div class="col-md-4"><p class="room-details"><?php echo $resr6['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
				</div>
			</div><br>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-6 pack">Pack Rate </div>
					<div class="col-md-6 pack-price">BDT <?php echo $resr6['price']; ?></div>
				</div><br><br><hr>
			</div>
			<div class="container-fluid justify-content-center">
				<a href="premiumsuite_user.php" class="learn-more-btn">Learn More</a>
			</div>
		</div>
		<?php
			}

		?>
	</div>
</div><br>
<!--Presedential Suite-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6" style="text-align: center;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Presedential Suite</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
			<?php 
			$r7="select * from tbl_room where id=7";
			$queryr7= mysqli_query($link, $r7);
			while ($resr7 = mysqli_fetch_array($queryr7)) { 
				?>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-4"><p class="room-details"><?php echo $resr7['sizesqm']; ?></p><p class="room-detail">SIZE SQM</p></div>
					<div class="col-md-4 room-details-mid"><p class="room-details"><?php echo $resr7['size']; ?></p><p class="room-detail">SIZE SQF</p></div>
					<div class="col-md-4"><p class="room-details"><?php echo $resr7['maxguest']; ?></p><p class="room-detail">MAX GUESTS</p></div>
				</div>
			</div><br>
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-md-6 pack">Pack Rate </div>
					<div class="col-md-6 pack-price">BDT <?php echo $resr7['price']; ?></div>
				</div><br><br><hr>
			</div>
			<div class="container-fluid justify-content-center">
				<a href="presidentialsuite_user.php" class="learn-more-btn">Learn More</a>
			</div>
		</div>
		<?php
			}

		?>

		<div class="col-md-6">
			<div class="inner">
				<img src="gallery/bedroom/presedential-suite/1.jpg" height="500px" width="100%">
			</div>
		</div>
	</div>
</div><br><br>

<?php include_once ('common/footer.php'); ?>