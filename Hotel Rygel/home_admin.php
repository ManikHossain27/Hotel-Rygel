<?php 
	include 'session_admin.php'; 
	

?>
<div class="container">
	<br><br>

		<h4 style="text-align: center;">Hello Admin</h4><br>
	<div class="row">
		<dir class="col-md-5" style="margin-left: 60px;">
			<a href="room_reservation.php" class="admindiv">
				<div style=" height: 150px; width: 100%;text-align: center; padding-top: 55px;">
				<h2>Room Reservation</h2>
			</div>
		</a>
		</dir>
		<dir class="col-md-5" style="margin-left: 10px;">
			<a href="reservation_admin.php" class="admindiv">
				<div style=" height: 150px; width: 100%;text-align: center; padding-top: 55px;">
				<h2>Reservation Status</h2>
			</div>
		</a>
		</dir>
	</div><br>
	<div class="row">
		<dir class="col-md-5" style="margin-left: 60px;">
			<a href="user_admin.php" class="admindiv">
				<div style=" height: 150px; width: 100%;text-align: center; padding-top: 55px;">
				<h2>User List</h2>
			</div>
		</a>
		</dir>
		<dir class="col-md-5" style="margin-left: 10px;">
			<a href="room_admin.php" class="admindiv">
				<div style=" height: 150px; width: 100%;text-align: center; padding-top: 55px;">
				<h2>Room Status</h2>
			</div>
		</a>
		</dir>
	</div><br>
		<div class="row">
			<dir class="col-md-5" style="margin-left: 60px;">
				<a href="contact_admin.php" class="admindiv">
					<div style=" height: 150px; width: 100%;text-align: center; padding-top: 55px;">
					<h2>User Message</h2>
				</div>
			</a>
			</dir>
			<dir class="col-md-5" style="margin-left: 10px;">
				<a href="" class="admindiv">
					<div style=" height: 150px; width: 100%;text-align: center; padding-top: 55px;">
					<h2>*</h2>
				</div>
			</a>
			</dir>
		</div>
	

</div><br><br>
<?php include 'common/footer_user.php'; ?>