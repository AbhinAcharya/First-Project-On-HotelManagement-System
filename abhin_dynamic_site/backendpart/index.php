
<?php 
/*

Developed By : Abhin Acharya
*/
include('../database/backenddatabase.php');
// if (isset($_GET['signup_issue'])) {
// 		$signupstat=TRUE;		}


		
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.form_for_login{
		margin: auto;
		margin:150px 0px 0px 450px; 

		/*background: black;*/
		}
		.txt{
			color: #F6990F;
		}
	</style>
	<title>Admin Username and password</title>
</head>
<body bgcolor="green">
	<h1 align="center" class="txt">Please fill the form to Signin</h1><hr>
	<form method="post" action="../database/backenddatabase.php" class="form_for_login" >

		<!-- <?php 
		if ($signupstat===TRUE)
		{?>
			<label>Name:</label><input type="text" name="name"><br/>
			<label>Image:</label><input type="file" name="upfile"><br/>
		<?php }?> -->
		<label>Username:</label><input type="text" name="username" placeholder="username"><br/>
		<label>Password:&nbsp;</label><input type="password" name="password" placeholder="password"> <br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="signin" value="signin">
				<input type="reset" name="reset" value="reset"><br><br>
		
		<!-- <?php  
		if ($signupstat===FALSE):
			{?> -->
				<!-- <input type="submit" name="signin" value="signin">hdhdh
				<input type="reset" name="reset" value="reset"><br><br> -->
				<!-- <p>Don't have account.<a href="login.php?signup_issue=<?php echo 1?>">Click here</a> for signup.</p>
			<?php }

		else:?>
		<input type="submit" name="signup" value="signup">
		<input type="reset" name="reset" value="reset"><br><br>
	<?php endif?> -->
	<?php if (isset($_SESSION['adminmsg'])){
				echo $_SESSION['adminmsg'];
				unset($_SESSION['adminmsg']);
			}
			?>
</body>
</html>