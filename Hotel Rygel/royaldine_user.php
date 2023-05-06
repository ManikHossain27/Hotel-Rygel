<?php include_once ('session_user.php'); ?>
<img src="gallery/restaurent/1.jpg" alt="presedential-suite bed" style="width:100%; height:580px;">
<!--Single Suite-->
<div class="container-fluid bg-transpa text-center">
	<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">HOTEL RYGEL</p>
	<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
</div>
<div class="container-fluid bg-transpa">
	<div class="row">
		<div class="col-md-6" style="text-align: center;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Royal Dine</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
			<div class="container-fluid justify-content-center">
				<p style="text-align: justify;">The elegant all day dining restaurant Royal Dine provides a stunning atmosphere in which fresh and exciting Asian cuisine takes the center stage. Our chefs prepare cuisine with a variety of South Asian influences as well as specialty menu items in a contemporary, relaxed setting.
				</p><br>
				<h6>Opening Hours</h6>
				<p>6:30 am - 11:30 pm</p>
				<br>
			</div>
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
				     		<img src="gallery/restaurent/1.jpg" style="height: 500px; width: 100%;">
				        	<div class="carousel-caption">
				           		<h3>Welcome</h3>
				          	</div> 
				      	</div>
				    	<div class="carousel-item">
				        	<img src="gallery/restaurent/1a.jpg" style="height: 500px; width: 100%;">
				    	</div>
				    	<div class="carousel-item">
				       		<img src="gallery/restaurent/1b.jpg" style="height: 500px; width: 100%;">
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

<div class="container bg-transparent" style="margin-top: 5px;">
	<div class="container" style="text-align: center;">
		<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">At A Glance</p>
		<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br>
	</div>
	<div class="row">
		<div class="col-md-4">
		<ul class="restaurent">
			<li><i class="fas fa-utensils fontawe"></i> <strong>Cuisine:</strong></li><p style="padding-left: 28px;">Asian, Thai, Chinese, Continental, Indian, Bangla, Mexican, Sea Food</p>
			<li><i class="fas fa-cloud fontawe"></i> <strong>Atmosphare:</strong></li><p style="padding-left: 28px;">Friendly & Informal</p>
        </ul>
		</div>
		<div class="col-md-4">
			<ul class="restaurent">
			<li><i class="fas fa-concierge-bell fontawe"></i> <strong>Service Style:</strong></li><p style="padding-left: 28px;">Buffet & Ala-Carte</p>
			<li><i class="fas fa-map-marker-alt fontawe"></i> <strong>Location:</strong></li><p style="padding-left: 28px;">level 2</p>
        </ul>
		</div>
		<div class="col-md-4">
				<ul class="restaurent">
					<li><i class="far fa-clock fontawe"></i> <strong>Opening Hour:</strong></li><p style="padding-left: 28px;">6:30 am</p>
					<li><i class="fas fa-clock fontawe"></i> <strong>Closing Hour:</strong></li><p style="padding-left: 28px;">11:30 pm</p>
       			</ul>
		</div>
	</div>
</div>
<br><br>

<?php include_once ('common/footer_user.php'); ?>