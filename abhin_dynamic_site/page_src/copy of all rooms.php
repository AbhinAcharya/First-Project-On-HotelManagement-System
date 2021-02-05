<?php 
	include('../database/database.php');
	if (isset($_GET['signup_issue'])) {
		$stat= true;
		}
		error_reporting(0);
		$id=$_SESSION['id'];
		$text=$_SESSION['text'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="../css_src/index.css">
	<link rel="stylesheet" type="text/css" href="../css_src/menu.css">
	
  <script src="../js/jquery-min.js"></script>
      <script type="text/javascript">
         jQuery(function ($) {
           var $moreInfo = $('.moreinfo img');

           $('.thumbs-container img').click(function () {
               $moreInfo.attr('src', this.src);
               var moreContent = $(this).next('figcaption').text();
               var alldetails = $(this).parent().find('p').text();
               $('.more-content').html(moreContent);
               $('.all-details').html(alldetails);

           });
         });
        
      </script>



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
	</style>

</head>
<!-- <body> -->
<body bgcolor="#080a0c">
	<div class="maindiv">
		<div class="headerdiv">
			<div class="logoimgdiv">
				<a href="../index.php">
					<img src="../img_src/deerfield-logo.png">
				</a>
			</div>
			<div class="menudiv">
				<ul>
					<li>
						<a href="#" class="active">Accommodations</a>
						<ul>
						<li>
							<a href="#" class="active">All Rooms</a>
							</li>
					</ul>
					</li>
					
					<li>
						<a href="#">Specials</a>
						<ul>
							<li>
								<a href="Specials_Package.php">Special&nbsp;Package</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Things to do</a>
						<ul>
							<li>
								<a href="Area_Guide.php">Area & Guide</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="Gallery.php">Gallery</a>
					</li>
					<li>
						<a href="#">About</a>
						<ul>
							<li>
								<a href="About_Developer.php">About Developer</a>
							</li>
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
				<a href="https://facebook.com/login"><img src="../img_src/fb.jpeg" class="img_social"></a>
				<a href="https://gmail.com"><img src="../img_src/google.png" class="img_social"></a>
				<a href="https://instagram.com"><img src="../img_src/insta.jpeg" class="img_social"></a>
				<a href="https://twitter.com"><img src="../img_src/twitter.png" class="img_social"></a>
			</div>
			<div class="div_current_page">
				<h2 class="h2_stat"><a href="../index.php" class="a_stat">Home</a>/Accommodations/AllRooms</h2>
			</div>
			<div class="side_panel">
				
				<div class="moreinfo">
         				<img src="../img_src/room1.jpeg" alt="rooms" class="centimg" />
         				<figcaption class="more-content" style="color: white;"></figcaption>
         				<p class="all-details" style="color: white;"></p>

      			</div>




     	 <p class="signupcolor">Please fill the form to login.</p>
	
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
		<p class="signupcolor"> Don't have an account, <a href="allrooms.php?signup_issue=<?php echo true ?>">Click here </a> for signup</p>
		 <?php endif ?>
		<?php if (isset($_SESSION['msg'])):?>
			<div class="msg">
				<?php
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				?>
			</div>

		<?php endif?>
  <!-- for booking -->
  <form method="get" action="../database/database.php" class="form">
  	

  </form>

	</div>
			<div class="left_panel_aside">
				<div class="thumbs-container">
					<figure>
		        	 	<img src="../img_src/room1.jpeg" class="img_small_for_accomodation"  />
		        	 	<figcaption>Room1 <br> Price:NRP4050 <a href="#"><input type="button" name="button1" value="book now"></a>
</figcaption>
		        	 	
		        	 	<p class='details' style="display: none ;">

		        	 	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		        	 </figure>
			        <figure>
			        	 	<img src="../img_src/room2.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room2 <br> Price:NRP5000</figcaption>
			        	 	<p style="display: none;">Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</figure>
			         <figure>
			        	 	<img src="../img_src/room3.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room3 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </figure>
			        <figure>
			        	 	<img src="../img_src/room4.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room4 <br> Price:NRP4800</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </figure>
			        <figure>
			        	 	<img src="../img_src/room5.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room5 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </figure>
			        <figure>
			        	 	<img src="../img_src/room6.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room6 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </figure>
			        <figure>
			        	 	<img src="../img_src/room7.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room7 <br> Price:NRP5500</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			        </figure>
		      </div>
     
		</div>
		<div class="left_panel_aside">
			<div class="thumbs-container">

			<figure>
			     <img src="../img_src/room8.jpeg" class="img_small_for_accomodation"/>
			    	<figcaption>Room8 <br> Price:NRP4050</figcaption>
			    	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			    	
			 </figure>
			 <figure>
			        	 	<img src="../img_src/room9.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room9 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			 </figure>
			 <figure>
			        	 	<img src="../img_src/room10.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room10 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			   </figure>
			   <figure>
			        	 	<img src="../img_src/room11.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room11 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			   </figure>
			   <figure>
			        	 	<img src="../img_src/room12.jpeg" class="img_small_for_accomodation"/>
			        	 	<figcaption>Room12 <br> Price:NRP4000</figcaption>
			        	 	<p style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        	 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			   </figure>

			  </div>
		</div>
		<div class="left_panel_aside"></div>
		</div>
		<div class="footerdiv"><h5 align="center" class="h5"> &copy;AbhinAcharya. All Right Reserved.</h5></div>
	</div>
</body>
</html>