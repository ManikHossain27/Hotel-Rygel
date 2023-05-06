<!DOCTYPE html>
<html>
<head>
	<title>HOTEL RYGEL Admin Panel</title>
	<link rel="icon" type="image/x-icon" href="gallery/logo.jpg">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
					<!--font awesome link start-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
					<!--Google Fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
					<!--Gallery cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	
					<!--my css file-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
					<!-- 		Style 		-->
	<style type="text/css">
		#mynav{height: 76px; }
		.item{transition: .5s ease-in-out;}
		.item:hover{filter: brightness(70%);}
		
		  /* Make the image fully responsive */
		.carousel-inner img {width: 100%;height: 100%;}
	</style>
</head>

<body style="background: linear-gradient(to right, #b3d9ff, #b3ffb3, #ccfff5, #ccebff, #c2c2d6);">
<div id="mynav">	<!-- 		Navbar 		-->
<nav class="navbar navbar-expand-md fixed-top bg-gradientcolor">
	  <!-- Brand/logo -->
  <a class="navbar-brand" href="#"><img src="gallery/logo1.png" alt="logo" style="height: 50px; width:50px;"></a>
  <a class="navbar-brand" href="home_admin.php" style="font-size: 30px;">HOTEL RYGEL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class=" ml-auto navbar-nav">
      	<li class="nav-item" style="text-align: right;"><a class="nav-link" href="home_admin.php">Home <i class="fas fa-home"></i></a></li>
      	
    </ul>
    <ul class="navbar-nav ">
		<li class="nav-item">
			<a class="nav-link" href="logout_admin.php">Log Out <i class="fas fa-user-lock"></i></a>
		</li>
	</ul>
  </div>  
</nav>
<br>
<br>



			<!-- Script for linking -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  			<!-- Script for gallery -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  			<!-- Script for customizing Html-->
<script>
//validate form 1, scripe start from here
	// Disable form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Get the forms we want to add validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();
	//end
//this code is for Toltip on footer.php admin corner
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	//$('.adminName').tooltip({title: "Email Us", placement: "top"});
	//$('.admin').tooltip({title: "Max Guest 2", placement: "right"});
});

//end

</script>
</body>
</html>