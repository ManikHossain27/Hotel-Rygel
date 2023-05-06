<?php 
	include_once('session_admin.php');
 ?>


<br><br>
 <div class="main-div">
 	<div class="container bg-transparent">
 		<div class="container-fluid  text-center">
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Reservation</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
		</div>

 		<div class="table-responsive">
		   <table class="table table-hover">
		    <thead>
		      <tr>	
		      	<th colspan="2">Operation</th>						
		        <th>ID</th>
		        <th>FName</th>
		        <th>LName</th>
		        <th>Email</th>
		        <th>Mobile</th>
		        <th>NID</th>
		        <th>Passpport</th>
		        <th>Address</th>
		        <th>City</th>
		        <th>Upazila</th>
		        <th>ZipCode</th>
		        <th>Room Type</th>
		        <th>Adult.</th>
		        <th>Kids</th>
		        <th>CheckIn</th>
		        <th>CheckOut</th>
		        
		      </tr>
		    </thead>
		    <tbody>
		    	 <?php 															//view tabel in database
				 	$link = mysqli_connect('localhost','root','','db_rygel');
					if (!$link) {die('Connection Fail'.mysqli_error($link));}

					$selectquary= "select * from tbl_room_reservation";

					$query= mysqli_query($link, $selectquary);

					$nums = mysqli_num_rows($query);


					while ($res = mysqli_fetch_array($query)) { 
						//echo $res['name'];
						?>
							<tr>
								<td style="background:rgba(255,255,255,.2);"><a href="reservation_update.php?id=<?php echo $res['id'];  ?>" data-toggle="tooltip" data-placement="bottom" title="edit!"><i class="far fa-edit" style="color: green;"></i></a></td>
						       <td style="background:rgba(255,255,255,.2);"><a href="reservation_delete.php?id=<?php echo $res['id'];  ?>" data-toggle="tooltip" data-placement="bottom" title="delete!"><i class="fas fa-trash" style="color: red;"></i></a></td>
						       <td><?php echo $res['id']; ?></td>
						       <td><?php echo $res['fname']; ?></td>
						       <td><?php echo $res['lname']; ?></td>
						       <td style="background:rgba(255,255,255,.2);"><?php echo $res['email']; ?></td>
						       <td><?php echo $res['mbl_num']; ?></td>
						       <td><?php echo $res['nid_num']; ?></td>
						       <td><?php echo $res['pass_num']; ?></td>
						       <td><?php echo $res['address']; ?></td>
						       <td><?php echo $res['city']; ?></td>
						       <td><?php echo $res['upazila']; ?></td>
						       <td><?php echo $res['zip_code']; ?></td>
						       <td><?php echo $res['rooms']; ?></td>
						       <td><?php echo $res['adult_num']; ?></td>
						       <td><?php echo $res['kids_num']; ?></td>
						       <td><?php echo $res['checkin']; ?></td>
						       <td><?php echo $res['checkout']; ?></td>
						       
						    </tr>
						<?php

					}

					
				 ?>
		      
		    </tbody>
		  </table>
		</div>
	</div>
</div><br><br>
<?php include_once ('common/footer_user.php'); ?>