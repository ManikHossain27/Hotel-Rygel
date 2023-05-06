<?php 
	include_once('session_admin.php');
	$link = mysqli_connect('localhost','root','','db_rygel');
	if (!$link) {die('Connection Fail'.mysqli_error($link));}
 ?>

<br><br>

 <div class="main-div">
 	<div class="container bg-transparent">
 		<div class="container-fluid  text-center">
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 25px">Room Status</p>
			<img src="gallery/underline.png" style="width: 200px; height: 60px; margin-top: -45px; padding-left: 5px;"><br><br>
		</div>
		<div>
			<button class="bg-transparent"><a href="room_insert.php">Add New Room</a></button>
		</div>

 		<div class="table-responsive">
		   <table class="table table-hover">
		    <thead>
		      <tr>	
		      	<th colspan="2">Operation</th>						
		        <th>ID</th>
		        <th>Room Type</th>
		        <th>Size (SQM)</th>
		        <th>Size (SQF)</th>
		        <th>Max Guest</th>
		        <th>Price (BDT)</th>
		        
		      </tr>
		    </thead>
		    <tbody>
		    	 <?php 															//view tabel in database


					$selectquary= "select * from tbl_room";

					$query= mysqli_query($link, $selectquary);

					$nums = mysqli_num_rows($query);


					while ($res = mysqli_fetch_array($query)) { 
						//echo $res['name'];
						?>
							<tr>
								<td style="background:rgba(255,255,255,.2);"><a href="room_admin_update.php?id=<?php echo $res['id'];  ?>" data-toggle="tooltip" data-placement="bottom" title="edit!"><i class="far fa-edit" style="color: blue;"></i></a></td>
						       <td style="background:rgba(255,255,255,.2);"><a href="room_admin_delete.php?id=<?php echo $res['id'];  ?>" data-toggle="tooltip" data-placement="bottom" title="delete!"><i class="fas fa-trash" style="color: red;"></i></a></td>
						       <td><?php echo $res['id']; ?></td>
						       <td><?php echo $res['roomtype']; ?></td>
						       <td><?php echo $res['sizesqm']; ?></td>
						       <td><?php echo $res['size']; ?></td>
						       <td><?php echo $res['maxguest']; ?></td>
						       <td><?php echo $res['price']; ?></td>
						       
						    </tr>
						<?php

					}

					
				 ?>
		      
		    </tbody>
		  </table>
		</div>
	</div>
</div>
<br><br>
<?php include_once ('common/footer_user.php'); ?>