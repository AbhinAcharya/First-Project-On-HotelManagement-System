<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="../css_src/index.css">
	<link rel="stylesheet" type="text/css" href="../css_src/menu.css">
	<script src="../js/modernizr.custom.js"></script>
	<style type="text/css">

	/*

Developed By : Abhin Acharya
*/
		.color{
			color:#F6990F;

		}
		/*.h5{
			color: red;
		}*/
		.footerdiv_for_aboutus{
	height: 12px;
	width: 1320px;
	/*background-color: black;*/
	/*margin:0% 0% 0% 3%;
	border: 2%;*/

}
.usersub{
	height: 200px;
	color: red;
}
.lorem_space{
	margin-left: 200px;
}

	</style>
	</head>
<body bgcolor="#080a0c">
	<!-- <body> -->
	<div class="maindiv_for_about_us">
		<div class="headerdiv">
			<div class="logoimgdiv">
				<a href="../index.php">
					<img src="../img_src/deerfield-logo.png">
				</a>
			</div>
			<div class="menudiv">
				<ul>
					<li>
						<a href="#"><span data-hover="Accommodations">Accommodations</a>
						<ul>
						<li>
							<a href="allrooms.php">All Rooms</a>
							</li>
					</ul>
					</li>
					
					<li>
						<a href="#"><span data-hover="Specials">Specials</a>
						<ul>
							<li >
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
						<a href="#" class="active"><span data-hover="About" class="active">About</a>
						<ul>
							<!-- <li>
								<a href="About_Developer.php">About Developer</a>
							</li> -->
							<li>
								<a href="#" class="active to_be_shaked">About Hotel</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="bodydiv">
			<div class="div_social">
				<a href="https://www.facebook.com/heyman.itsmeacharya"><img src="../img_src/fb.jpeg" class="img_social"></a>
				<a href="https://gmail.com"><img src="../img_src/google.png" class="img_social"></a>
				<a href="https://instagram.com"><img src="../img_src/insta.jpeg" class="img_social"></a>
				<a href="https://twitter.com"><img src="../img_src/twitter.png" class="img_social"></a>
			</div>
			<div class="div_current_page">
				<h2 class="h2_stat"><a href="../index.php" class="a_stat">Home</a>/About/About_Us</h2>
			</div><br>
			<div class="about_us_compactbox">
				
				<img src="../img_src/image1.jpg" class="about_us" align="center">
				<p class="lorem_text ">
					<nav class="lorem_space">
					<h2 class="color">About US</h2>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
				</p>
				</nav>
	
	</div >
	<divclass="usersub">
	<h1 class="color" align="center">If you have Any Feedback</h1>
			<table border="0px" align="center">
	<form method="post" action="../database/database.php">
	<tr >
	<td colspan="2">
		<label class="lorem_text">Name</label></td>
			<td><input type="text" name="name" placeholder="nameplz" required></tr></td>
			<tr>
			<td colspan="2">
		<label class="lorem_text">Email</label></td>
			<td><input type="email" name="email" placeholder="mail@gmail.com" required></td></tr><tr><td colspan="2">
			<tr>
				<td class="lorem_text">Feedback</td>
				<td></td>
				<td><textarea name="feedback" placeholder="Enter Your Text Here....." ></textarea></td>
			</tr>
		<tr><td>
			<input type="submit" name="feedback_user" value="Feedback"></td><td></td><td>
			<input type="reset" name="reset1" value="reset"></td></tr>

	</table>

</div>

	</div>
	
		
	</div>
	<div class="footerdiv_for_aboutus"><h5 align="center" class="h5"> &copy;AbhinAcharya. All Right Reserved.</h5></div>
	

</body>
</html>