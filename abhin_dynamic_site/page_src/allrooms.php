<?php 
/*

Developed By : Abhin Acharya
*/
include('../database/database.php');
if (isset($_GET['signup_issue'])) {
	$stat= true;
}
error_reporting(0);
		//$id=$_SESSION['userid'];
if (isset($_SESSION['userid']))
{
	$loggedin=1;
}
if (isset($_GET['logout'])) {
	unset($_SESSION['username']);
	unset($_SESSION['userid']);
	unset($id);
	$_SESSION['msg']="logged out";
	$loggedin=0;
}

$cookie=$_SESSION['username'];
		//$text=$_SESSION['text'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Rooms</title>
	<link rel="stylesheet" type="text/css" href="../css_src/index.css">
	<link rel="stylesheet" type="text/css" href="../css_src/menu.css">
	<script src="../js/modernizr.custom.js"></script>

	<style type="text/css">
	.msg{
		margin: 30px auto;
		padding: 2px;
		border-radius: 5px;
		color: RED;
		background: #ffb2b2;
		border:1px solid #3c763d;
		width: 40%;
		/*	float: center;*/
		text-align: center;
		margin-left: 0px;
	}
	.signupcolor{

		color:white;
	}
	.useridtext{
		color: white;
		float: right;
	}



	.container {
		position: relative;
		/* width: 50%;*/
	}

	.image_fade {
		opacity: 1;
		display: block;
  /*width: 100%;
  height: auto;*/
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
	transition: .5s ease;
	opacity: 0;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	text-align: center;
}

.container:hover .image_fade {
	opacity: 0.3;
}

.container:hover .middle {
	opacity: 1;
}

.text {
	background-color: #F6990F;
	color: green;
	font-size: 16px;
	padding: 16px 32px;
}
a{
	text-decoration: none;
}
.div_forDescription{

	height: auto;
	width: 480px;
	/*background-color: purple;*/
	overflow-x: none;
}

</style>

</head>
<body bgcolor="#080a0c"> 
	<div class="maindiv">
		<div class="headerdiv">
			<div class="logoimgdiv">
				<a href="../index.php">
					<img src="../img_src/deerfield-logo.png">
				</a>
				
			</div>
			<p class="useridtext">
				<ol><li><a href="#"><?php 
				if (isset($_SESSION['userid'])):
					echo $cookie;
				endif
				?></a><ol>
					<li><a href="allrooms.php?logout=<?php echo 1;?>">Logout</a></li></ol></li></ol>
				</p>
				<div class="menudiv">
					<ul>
						<li>
							<a href="#" class="active"><span data-hover="Accommodations" class="active">Accommodations</a>
								<ul>
									<li>
										<a href="#" class="active to_be_shaked">All Rooms</a>
									</li>
								</ul>
							</li>

							<li>
								<a href="#"><span data-hover="Specials">Specials</a>
									<ul>
										<li>
											<a href="Specials_Package.php">Special&nbsp;Events</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><span data-hover="Things to do">Things to do</a>
										<ul>
											<li>
												<a href="Area_Guide.php">Area & Guide</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="Gallery.php"><span data-hover="Gallery">Gallery</a>
										</li>
										<li>
											<a href="#"><span data-hover="About">About</a>
												<ul>
							<!-- <li>
								<a href="About_Developer.php">About Developer</a>
							</li> -->
							<li>
								<a href="About_Us.php">About Hotel</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="bodydiv_gallery">
			<div class="div_social_gallery">
				<a href="https://www.facebook.com/heyman.itsmeacharya"><img src="../img_src/fb.jpeg" class="img_social"></a>
				<a href="https://gmail.com"><img src="../img_src/google.png" class="img_social"></a>
				<a href="https://instagram.com"><img src="../img_src/insta.jpeg" class="img_social"></a>
				<a href="https://twitter.com"><img src="../img_src/twitter.png" class="img_social"></a>
			</div>
			<div class="div_current_page">
				<h2 class="h2_stat"><a href="../index.php" class="a_stat">Home</a>/Accommodations/AllRooms</h2>
			</div>
			<div class="side_panel">
				
				<?php 
				if (isset($_GET['roomid']))
					{ $con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");
				$id = $_GET['roomid'];
				$rec = mysqli_query($con,"SELECT * FROM availableroom WHERE id=$id");
				$record = mysqli_fetch_array($rec);?>
				<img src="../img_src/<?php echo $record['imagename']?>" class="img_gallery" title="<?php echo $record['imagename'];?>"><br>
				<?php echo "RoomNo: "; echo $record['roomno'];?><br>
				<?php echo "Price: $ "; echo $record['price'];?><div class="div_forDescription"> <?php
				echo "Description:";?><br><?php echo $record['description'];?></div>
				<?php if (isset($_SESSION['userid'])):
					$booked_time="SELECT availableroom.id, bookedtable.bookendtime
					FROM bookedtable
					INNER JOIN availableroom ON availableroom.roomno = bookedtable.roomno";
					$all_booked_time = mysqli_query($con,$booked_time);	
					date_default_timezone_set("Asia/Kathmandu");
					$booked_room_id = array();
					$bookendtimes = array();
					while($booked_row = mysqli_fetch_array($all_booked_time)){
						array_push($booked_room_id, $booked_row['id']);
						$bookendtime =  str_replace('am', ' ', $booked_row['bookendtime']);
						$bookendtime =  str_replace('pm', ' ', $bookendtime);
						$bookendtime =  str_replace('-', ' ', $bookendtime);
						$bookendtime = strtotime($bookendtime);
						$bookendtimes[$booked_row['id']] = $bookendtime;

					}

					$current_time = time();
				//	echo $current_time;
					if( in_array($id, $booked_room_id) && $bookendtimes[$id] >= $current_time ){
						?>
						<a href="javascript:void(0)">Already Booked!!!</a>
						<?php

					}else{
						?>
						<a href="../database/database.php?book_roomno=<?php echo $record['roomno']; ?>&userid=<?php echo $_SESSION['userid'];?>">Book Now</a>
						<?php
					// continue;
					}
				endif?>
				<?php

			}
			else
				{?>
					<img src="../img_src/image.jpeg" class="img_gallery">
				<?php  }?>



				<?php if($loggedin ==0): ?>

					<?php if($stat ==false): ?>
						<p class="signupcolor">Please login to book.</p>
						<?php else:?>
							<p class="signupcolor">Please fill the form to signup.</p>
						<?php endif?>
						<form method="post" action="../database/database.php" class="form">
							<?php if($stat == true): ?>
								<label>Name:</label>
								<input type="text" name="name" required="required"><br>
							<?php endif ?>
							<label>Email:</label>
							<input type="email" name="email" required="required"><br>
							<label>Password:</label>
							<input type="password" name="password" required="required"><br>
							<?php if ($stat == true): ?>
								<label>Address</label>
								<input type="text" name="address" required="required"> <br>
								<input type="submit" name="signup" value="signup">
								<input type="reset" name="reset" value="reset">
								<?php else: ?>
									<input type="submit" name="login" value="login">
									<input type="reset" name="reset" value="reset">

								<?php endif ?>


							</form>
							<?php if($stat== false): ?>
								<p class="signupcolor"> Don't have an account, <a href="allrooms.php?signup_issue=<?php echo true; ?>">Click here </a> for signup</p>
							<?php endif ?>
							<?php if (isset($_SESSION['msg'])):?>
								<div class="msg">
									<?php
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
									?>
								</div>

							<?php endif?>
						<?php endif?>
						<!-- for booking -->
						<form method="get" action="../database/database.php" class="form">


						</form>

					</div>
					<div class="left_panel_aside"> 

						<?php 
						$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");
						$qry="select *from availableroom";
						$selqry=mysqli_query($con,$qry);


						while($row=mysqli_fetch_array($selqry))
							{?> <div class="div_for_loop container" >
								<img src="../img_src/<?php echo $row['imagename']?>" class="img_gallery image_fade" title="<?php echo $row['imagename']?>">

								RoomNo: <?php echo $row['roomno']?>
								<br>
								Price: <?php echo "$"; echo $row['price']?><br><br><br>
								<!-- <?php echo $row['description']?> -->

								<div class="middle">
									<a href="allrooms.php?roomid=<?php echo $row['id']?>"> <div class="text">Details</div></a>
								</div>

							</div>

						<?php }?>


					</div>
				</div>
				<div class="footerdiv"><h5 align="center" class="h5"> &copy;AbhinAcharya. All Right Reserved.</h5></div>
			</div>
		</body>
		</html>