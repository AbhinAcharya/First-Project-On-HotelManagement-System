<!DOCTYPE html>
<html>

<head>

 
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="css_src/index.css">
	<link rel="stylesheet" type="text/css" href="css_src/menu.css">
	<!-- <link rel="stylesheet" type="text/css" href="css_src/normalizee.css" /> -->
<!-- 	<link rel="stylesheet" type="text/css" href="css_src/component.css" /> -->
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js"></script>
	
	<script type="text/javascript">
		

		$(document).ready(function()
		{
			$('#slider').cycle({ fx: 'fade' });
		}
	);
	</script>

	<script type="text/javascript">

	// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 


</script>

</head>
<!-- <body> -->
<body bgcolor="#080a0c">
	<div class="maindiv">
		<div class="headerdiv">
			<div class="logoimgdiv to_be_shaked">
				<a href="#">
					<img src="img_src/deerfield-logo.png" class="to_be_shake">
				</a>
			</div>
			<div class="menudiv" >
				<ul>
					<li>
						<a href="#"><span data-hover="Accommodations">Accommodations</a>
						<ul>
						<li>
							<a href="page_src/allrooms.php">All Rooms</a>
							</li>
					</ul>
					</li>
					
					<li>
						<a href="#"><span data-hover="Specials">Specials</a>
						<ul>
							<li>
								<a href="page_src/Specials_Package.php">Special&nbsp;Events</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><span data-hover="Things to do">Things to do</a>
						<ul>
							<li>
								<a href="page_src/Area_Guide.php">Area & Guide</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="page_src/Gallery.php"><span data-hover="Gallery">Gallery</a>
					</li>
					<li>
						<a href="#"><span data-hover="About">About</a>
						<ul>
							<!-- <li>
								<a href="page_src/About_Developer.php">About Developer</a>
							</li> -->
							<li>
								<a href="page_src/About_Us.php">About Hotel</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="bodydiv">
			<div class="div_social">
				<a href="https://www.facebook.com/heyman.itsmeacharya"><img src="img_src/fb.jpeg" class="img_social"></a>
				<a href="https://gmail.com"><img src="img_src/google.png" class="img_social"></a>
				<a href="https://instagram.com"><img src="img_src/insta.jpeg" class="img_social"></a>
				<a href="https://twitter.com"><img src="img_src/twitter.png" class="img_social"></a>
			</div>
			<div class="div_current_page ">
				<h2 class="h2_stat "><a href="#" class="a_stat ">Home</a></h2>
			</div>
			<div class="div_img_home">
				<div id="slider" class="slider">
				<img src="img_src/image1.jpg" class="image_home"  alt="image" >
				<img src="img_src/image2.jpg" class="image_home"  alt="image" >
				<img src="img_src/image3.jpg" class="image_home"  alt="image" >
				<img src="img_src/image4.jpg" class="image_home" alt="image" >
				</div>
			</div>


		</div>
		<div class="footerdiv"><h5 align="center" class="h5"> &copy;AbhinAcharya. All Right Reserved.</h5></div>


	</div>
</body>
</html>
