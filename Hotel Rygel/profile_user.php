<?php include_once ('session_user.php'); ?>


<div class="main-div">
 	<div class="container bg-transparent">
 		<div class="container-fluid  text-center">
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px"><?php echo 'Wellcome'. " ".$_SESSION['username'];	 ?></p>
			
		</div>
	<div style="max-width: 30%; margin: 0 auto;">
 		<div class="table-responsive">
		   <table class="table table-hover">
		    <tbody>
				<tr>
		    		<td style="text-align: ;">Full Name:</td>
		    		<td><?php echo $_SESSION['name']; ?></td>
		    	</tr>
		    	<tr>
		    		<td style="text-align: ;">User Name:</td>
		    		<td><?php echo $_SESSION['username'];; ?></td>
		    	</tr>
		    	<tr>
		    		<td style="text-align: ;">Email Address:</td>
		    		<td><?php echo $_SESSION['email'];; ?></td>
		    	</tr>
		    	<tr>
		    		<td style="text-align: ;">Edit Profile:</td>
		    		<td style="background:rgba(255,255,255,.2);"><a href=" " data-toggle="tooltip" data-placement="bottom" title="edit!"><i class="far fa-edit" style="color: green;"></i></a></td>
		    	</tr>
		      
		    </tbody>
		  </table>
		</div>
	</div>
	</div>
</div><br><br>




<?php include_once ('common/footer_user.php'); ?>