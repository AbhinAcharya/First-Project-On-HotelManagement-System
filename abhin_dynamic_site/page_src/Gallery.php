<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="../css_src/index.css">
	<link rel="stylesheet" type="text/css" href="../css_src/menu.css">
	<script src="../js/modernizr.custom.js"></script>

	<style type="text/css">
	/*

Developed By : Abhin Acharya
*/
		/*custom font - Montserrat*/
		@import url(http://fonts.googleapis.com/css?family=Montserrat);*/
		/*basic reset*/
		* {margin: 0; padding: 0;}
		/*forcing the body to take 100% height*/
	
		/*Thumbnail Background*/
		.thumb {
			/*width: 250px; height: 200px;*/ /*margin: 2px auto*/;
			perspective: 1000px;
		}
		.thumb a {
			display: block; width: 100%; height: 100%;
			/*double layered BG for lighting effect*/
			background: 
				linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
				url("../img_src/image1.jpg");
			/*disabling the translucent black bg on the main image*/
			background-size: 0, cover;
			/*3d space for children*/
			transform-style: preserve-3d;
			transition: all 0.5s;
		}
		.thumb:hover a {transform: rotateX(80deg); transform-origin: bottom;}
		/*bottom surface */
		.thumb a:after {
			/*36px high element positioned at the bottom of the image*/
			content: ''; position: absolute; left: 0; bottom: 0; 
			width: 100%; height: 36px;
			/*inherit the main BG*/
			background: inherit; background-size: cover, cover;
			/*draw the BG bottom up*/
			background-position: bottom;
			/*rotate the surface 90deg on the bottom axis*/
			transform: rotateX(90deg); transform-origin: bottom;
		}
		/*label style*/
		.thumb a span {
			color: white; text-transform: uppercase;
			position: absolute; top: 100%; left: 0; width: 100%;
			font: bold 12px/36px Montserrat; text-align: center;
			/*the rotation is a bit less than the bottom surface to avoid flickering*/
			transform: rotateX(-89.99deg); transform-origin: top;
			z-index: 1;
		}
		/*shadow*/
		.thumb a:before {
			content: ''; position: absolute; top: 0; left: 0;
			width: 100%; height: 70%;
			background: rgba(0, 0, 0, 0.5); 
			box-shadow: 0 0 100px 50px rgba(0, 0, 0, 0.5);
			transition: all 0.5s; 
			/*by default the shadow will be almost flat, very transparent, scaled down with a large blur*/
			opacity: 0.15;
			transform: rotateX(95deg) translateZ(-80px) scale(0.75);
			transform-origin: bottom;
		}
		.thumb:hover a:before {
			opacity: 1;
			/*blurred effect using box shadow as filter: blur is not supported in all browsers*/
			box-shadow: 0 0 25px 25px rgba(0, 0, 0, 0.5);
			/*pushing the shadow down and scaling it down to size*/
			transform: rotateX(0) translateZ(-60px) scale(0.85);
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
			<div class="menudiv">
				<ul>
					<li>
						<a href="#" ><span data-hover="Accommodations">Accommodations</a>
						<ul>
						<li>
							<a href="allrooms.php" >All Rooms</a>
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
						<a href="#" class="active"><span data-hover="Gallery" class="active to_be_shaked">Gallery</a>
					</li>
					<li>
						<a href="#"><span data-hover="About">About</a>
						<ul>
						<!-- 	<li>
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
			<div class="div_current_page_gallery">
				<h2 class="h2_stat"><a href="../index.php" class="a_stat">Home</a>/Gallery</h2>
			</div>
			
 <?php 
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");
$qry="select *from gallery";
$selqry=mysqli_query($con,$qry);


while($row=mysqli_fetch_array($selqry))
{?><div class="loop_for_gallery thumb"> <a href="onclickimage.php?RoomToBeDisplayed=<?php echo $row['imagename'];?>" target="_blank"	>
		<img src="../img_src/gallery/<?php echo $row['imagename']?>" class="img_gallery" title="<?php echo $row['imagename']?>">
		<span><?php echo $row['imagename']?></span>
		</a>
	</div>
	
<?php }?> 
 

		</div>
		<div class="footerdiv"><h5 align="center" class="h5"> &copy;AbhinAcharya. All Right Reserved.</h5></div>
	</div>
</body>
</html>