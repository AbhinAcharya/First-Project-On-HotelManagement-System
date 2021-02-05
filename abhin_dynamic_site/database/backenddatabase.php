<?php 
/*

Developed By : Abhin Acharya
*/
$username="";
// $email="";
$password="";
$roomno="";
$description="";
$image="";
$price="";
$cmp="";
// $stat=false;
// $signupstat=false;
session_start();
$edit_state = false;
$stat_boooked=0;
$eventname="";
$location="";
$edit_state_event = false;
//echo "its being called";
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");

if (isset($_POST['insert']))
{
	//echo "its being called";
	$target="../img_src/";
	$target1=$target.$_FILES['upfile']['name'];
	$roomno=$_POST['roomno'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	//$name=$_POST['name'];
	$image=$_FILES['upfile']['name'];
	//$address=$_POST['address'];
	//echo "$image";
	$qry="insert into availableroom(roomno,price,imagename,description) value('$roomno','$price','$image','$description')";
	//$qry1="insert into availableroomafterbooking(roomno) value('$roomno')";
	//mysqli_query($con,$qry1);
	mysqli_query($con,$qry);


	move_uploaded_file($_FILES['upfile']['tmp_name'], $target1);
	$_SESSION['msg']="sucess";
	
	header('location:../backendpart/displayanddelete.php');

}



if(isset($_POST['update']))
 	{

 		$target="../img_src/";
		$target1=$target.$_FILES['upfile']['name'];
		$image=$_FILES['upfile']['name'];
 		$roomno=$_POST['roomno'];
		$price=$_POST['price'];
		$description=$_POST['description'];
		$id=$_POST['ID'];
 		$qry="UPDATE availableroom SET roomno='$roomno',price='$price',description='$description',imagename='$image' WHERE ID='$id'"; 
		$update=mysqli_query($con,$qry);
		if($update){
						$_SESSION['total_available_room_msg'] = "Sucessfully updated";
					}
					else
					{
							$_SESSION['total_available_room_msg'] = "Invalid operation: Please select atleast a detail";
					}

		header('location: ../backendpart/displayanddelete.php');
 	}










 if (isset($_POST['signin']))
{


	$password=$_POST['password'];
		$username=$_POST['username'];
		$fetch="select *from backenduser";
		$fetchall=mysqli_query($con,$fetch);
		while ($row=mysqli_fetch_array($fetchall)) {
			if($row['username']==$username && $row['password']==$password)
			{ 
				// $_SESSION['id']=$row['id'];
				 header('location: ../backendpart/displayanddelete.php');
				break;
			}
			else
			{
				$_SESSION['adminmsg']="Incorrect Email or Password";
				header('location: ../backendpart/index.php');
				break;
			}

		}



}  
if (isset($_GET['del']))
	{

		$id=$_GET['del'];
		$roomno=$_GET['roomno'];
		//mysqli_query($con,"DELETE FROM availableroomafterbooking WHERE roomno=$roomno");
		mysqli_query($con,"DELETE FROM availableroom WHERE id=$id");

		$_SESSION['total_available_room_msg'] ="Deleted sucessfully";
		header('location: ../backendpart/displayanddelete.php');
	}

if (isset($_GET['delbookedroom']))
	{

		$id=$_GET['delbookedroom'];
		mysqli_query($con,"DELETE FROM bookedtable WHERE ID=$id");
		$_SESSION['delmsg'] ="Deleted sucessfully";
		header('location: ../backendpart/displayanddelete.php');
	}
if (isset($_GET['delgallery']))
	{

		$id=$_GET['delgallery'];
		mysqli_query($con,"DELETE FROM gallery WHERE ID=$id");
		$_SESSION['delgallerymsg'] ="Deleted sucessfully";
		header('location: ../backendpart/displayanddelete.php');
	}


if (isset($_POST['insertimg']))
{
	//echo "its being called";
	$target="../img_src/gallery/";
	$target1=$target.$_FILES['upfile']['name'];
	$image=$_FILES['upfile']['name'];
	$qry="insert into gallery(imagename) value('$image')";
	mysqli_query($con,$qry);


	move_uploaded_file($_FILES['upfile']['tmp_name'], $target1);
	$_SESSION['delgallerymsg']="sucess";
	
	header('location:../backendpart/displayanddelete.php');

}



if (isset($_POST['insertevent']))
{
	//echo "its being called";
	$target="../img_src/";
	$target1=$target.$_FILES['upfile']['name'];
	$eventname=$_POST['eventname'];
	$location=$_POST['location'];
	$description=$_POST['description'];
	//$name=$_POST['name'];
	$image=$_FILES['upfile']['name'];
	//$address=$_POST['address'];
	//echo "$image";
	$qry="insert into specialevent(eventname,location,imagename,description) value('$eventname','$location','$image','$description')";
	//$qry1="insert into availableroomafterbooking(roomno) value('$roomno')";
	//mysqli_query($con,$qry1);
	mysqli_query($con,$qry);


	move_uploaded_file($_FILES['upfile']['tmp_name'], $target1);
	$_SESSION['event']="sucess";
	
	header('location:../backendpart/displayanddelete.php');

}


if(isset($_POST['updateevent']))
 	{

 		$target="../img_src/";
		$target1=$target.$_FILES['upfile']['name'];
		$image=$_FILES['upfile']['name'];
 		$eventname=$_POST['eventname'];
		$location=$_POST['location'];
		$description=$_POST['description'];
		$id=$_POST['ID'];
 		$qry="UPDATE specialevent SET eventname='$eventname',location='$location',description='$description',imagename='$image' WHERE ID='$id'"; 
		$update=mysqli_query($con,$qry);
		if($update){
						$_SESSION['event'] = "Sucessfully updated";
					}
					else
					{
							$_SESSION['event'] = "Invalid operation: Please select atleast a detail";
					}

		header('location: ../backendpart/displayanddelete.php');
 	}


if (isset($_GET['delevent']))
	{

		$id=$_GET['delevent'];
		mysqli_query($con,"DELETE FROM specialevent WHERE ID=$id");
		$_SESSION['event'] =" Event Deleted sucessfully";
		header('location: ../backendpart/displayanddelete.php');
	}
 
 mysqli_close($con);     
 ?>
