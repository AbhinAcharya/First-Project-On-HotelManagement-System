<?php 
/*

Developed By : Abhin Acharya
*/
$name="";
$email="";
$password="";
$roomno="";
$address="";
$stat=false;
$signupstat=false;
$loggedin=0;
$userid="";
session_start();
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");

if (isset($_POST['signup']))
		{
			$name=$_POST['name'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$roomno=$_POST['roomno'];
			$qry="insert into signup_table(name,email,password,address) value('$name','$email','$password','$address')";
			$sucess= mysqli_query($con,$qry);

			if ($sucess===TRUE){
				
				$_SESSION['msg']="signup sucess Now login";
				header('location: ../page_src/allrooms.php');
			}
			else{
				$_SESSION['msg']="unable to login plz try again";
			header('location: ../page_src/allrooms.php');
		}
		}
if (isset($_POST['login']))
{


	$password=$_POST['password'];
		$email=$_POST['email'];
		$fetch="select *from signup_table";
		$fetchall=mysqli_query($con,$fetch);
		while ($row=mysqli_fetch_array($fetchall)) {
			if($row['email']==$email && $row['password']==$password)
			{ 
				$_SESSION['userid']=$row['id'];
				$_SESSION['username']=$row['name'];
				header('location: ../page_src/allrooms.php');
				break;
			}
			else
			{
				$_SESSION['msg']="Incorrect Email or Password";
				header('location: ../page_src/allrooms.php');
			}

		}



 }  
 if (isset($_GET['book_roomno']))
 {
 	$userid=$_GET['userid'];
 	date_default_timezone_set("Asia/Kathmandu");
 	$roomno=$_GET['book_roomno'];
 	$date= date("Y/m/d");
 	$enddate = strtotime ( '+1 day' , strtotime ( $date ) ) ;
	$enddate = date ( 'Y/m/j' , $enddate );
	$time= date("h:i:sa");
		$qry="insert into bookedtable(roomno,userid,booktime,bookendtime) value('$roomno','$userid','$date-$time','$enddate-$time')";
		if (mysqli_query($con,$qry))
		{
			header('location: ../page_src/allrooms.php');
			$_SESSION['bookmsg']="sucess";
		}

 }
 if (isset($_POST['feedback_user']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$feedback=$_POST['feedback'];
			$qry="insert into usersubscription(name,email,feedback) value('$name','$email','$feedback')";
			$sucess= mysqli_query($con,$qry);

			if ($sucess===TRUE){
				
				$_SESSION['msg']="Sucessfully";
				header('location: ../page_src/About_Us.php');
			}
			else{
				$_SESSION['msg']="Failed";
			header('location: ../page_src/About_Us.php');
		}
		
		}
 mysqli_close($con);     
 ?>
