
<?php include('../database/backenddatabase.php'); 
/*

Developed By : Abhin Acharya
*/
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");


//fetch the record to be updated
if (isset($_GET['edit'])) {
	//$con=mysqli_connect("localhost","root","","sirledinuvako");
	$id = $_GET['edit'];
	$rec = mysqli_query($con,"SELECT * FROM availableroom WHERE ID=$id");
	$record = mysqli_fetch_array($rec);
	$roomno = $record['roomno'];
	//$password = $record['Password'];
	//$email = $record['Email'];
	//$address = $record['Address'];
	$id = $record['id'];
	$price=$record['price'];
	$description=$record['description'];
	$imagename=$record['imagename'];
	$edit_state = true;

}
//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Rooms</title>

		<style type="text/css">
			.msg{
				margin: 30px auto;
				padding: 10px;
				border-radius: 5px;
				color: #3c763d;
				background: #dff0d8;
				border:1px solid #3c763d;
				width: 30%;
				text-align: center;
				margin-left: 200px;
			}
			.tbl{
				margin-left: 0px;
			}
			.test{
				color: purple;
			}
			.insert{
				color: #3c763d;
				background: #dff0d8;
			}
			.update{
				color: purple;
				background: #dff0d8;
			}
			.reset{
				color: red;
				background: #dff0d8;
			}
			.img{
				height: 50px;
				width: 50px;
			}
			.description{
				width: 400px;
			}
		</style>

</head>
<body>


	 <h1> Total available room <br></h1>
	<table border="2px" class="tbl">
		<tr>
			<th>ID</th>
			<th>RoomNo</th>
			<th>Price</th>
			<!-- <th>Email</th>
			<th>Address</th> -->
			<th>Image</th>
			<th class="description">Description</th>
			<th colspan="2">Actions</th>
		</tr>
		<?php 
			//$con=mysqli_connect("localhost","root","","sirledinuvako");

$qry="select *from availableroom";
$selqry=mysqli_query($con,$qry);


while($row=mysqli_fetch_array($selqry))
	//if ($row['id']==$_SESSION['id'])
{?>



	<tr><td><?php echo $row['id']?></td>
		<td><?php echo $row['roomno']?></td> 
		<td><?php echo "$";echo $row['price']?></td>
		<td><img src="../img_src/<?php echo $row['imagename']?>" class="img"></td>
		<!-- <td><?php echo $row['Email']?></td> --> 
		<td><?php echo $row['description']?></td>
		
		<td><a href="displayanddelete.php?edit=<?php echo $row['id'];?>">edit</a></td> 
		<td><a href="../database/backenddatabase.php?del=<?php echo $row['id'];?>" >delete</a></td>
		
	</tr>
<?php }?>

<?php 
mysqli_close($con);

	?>
	</table>
<?php if (isset($_SESSION['total_available_room_msg'])):?>
		<div class="msg">
			<?php
				echo $_SESSION['total_available_room_msg'];
				unset($_SESSION['total_available_room_msg']);
			?>
		</div>

<?php endif?>
	<br><br>
	<h4 class="tbl"><div class="test">If you want to insert the data in table then plz fill the form</div></h4>
	<form method="post" action="../database/backenddatabase.php" enctype="multipart/form-data" class="tbl">
		<input type="hidden" name="ID" value="<?php echo $id; ?>">
		<label>RoomNo:</label>
		<input type="Text" name="roomno" value="<?php echo $roomno;?>"   required="required"><br>
		<label>Price:</label>
		<input type="Text" name="price" value="<?php echo $price;?>"   required="required"><br>
		<label>Description:</label>
		<input type="text" name="description" value="<?php echo $description;?>" required="required"><br>
		<label>Image:</label><img src="../img_src/<?php echo $imagename?>" class="img"><input type="file" name="upfile"><br/>
		<!-- <label>Password:</label>
		<input type="password" name="password" value="<?php echo $password;?>" required="required"><br>
		<label>Email:</label>
		<input type="text" name="email" value="<?php echo $email;?>" required="required"><br> -->
		<!-- <label>Address:</label>
		<input type="text" name="address" value="<?php echo $address;?>" required="required"><br> -->
		<?php if ($edit_state === false): ?>
			
		<input type="submit" name="insert" value="insert" class="insert">
		<input type="reset" name="reset" class="reset">
	<?php else: ?>
		<input type="submit" name="update" value="update" class="update">
	
		<?php endif ?>
		
	</form>




	 <h1>BookedRoom room <br></h1>
	<table border="2px" class="tbl">
		<tr>
			<th>ID</th>
			<th>RoomNo</th>
			<!-- <th>Email</th>
			<th>Address</th> -->
			<th>UserId</th>
			<th >BookTime</th>
			<th>BookEndTime</th>
			<th >Actions</th>
		</tr>
		<?php 
			//$con=mysqli_connect("localhost","root","","sirledinuvako");
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");
$qry="select *from bookedtable";
$selqry=mysqli_query($con,$qry);


while($row=mysqli_fetch_array($selqry))
	//if ($row['id']==$_SESSION['id'])
{?>



	<tr><td><?php echo $row['id']?></td>
		<td><?php echo $row['roomno']?></td> 
		<!-- <td><img src="../img_src/<?php echo $row['imagename']?>" class="img"></td> -->
		<td><?php echo $row['userid']?></td>
		<td><?php echo $row['booktime']?></td>
		<td><?php echo $row['bookendtime']?></td>
		<td><a href="../database/backenddatabase.php?delbookedroom=<?php echo $row['id']; ?>" >delete</a></td>
		
	</tr>
<?php }?>

<?php 
mysqli_close($con);

	?>
	</table>
	<?php if (isset($_SESSION['delmsg'])):?>
		<div class="msg">
			<?php
				echo $_SESSION['delmsg'];
				unset($_SESSION['delmsg']);
			?>
		</div>

<?php endif?>
	<br><br>
	<h1>available rooms</h1>
	<table border="2px" class="tbl">
		<tr>
			<th>ID</th>
			<th>RoomNo</th>
			<!-- <th>Email</th>
			<th>Address</th> -->
			<th>Image</th>
		</tr>
		<?php 
			//$con=mysqli_connect("localhost","root","","sirledinuvako");
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");
$qry1="select *from availableroom";
$qry2="select *from bookedtable";
$selqry1=mysqli_query($con,$qry1);
$selqry2=mysqli_query($con,$qry2);

while($row1=mysqli_fetch_array($selqry1))
{
	$stat_boooked=0;
	while($row2=mysqli_fetch_array($selqry2))
	{
			if ($row1['roomno']==$row2['roomno'])
		{
			$stat_boooked=1;
		}
	}
	if ($stat_boooked==0)

		{?>
			<tr><td><?php echo $row1['id']?></td>
				<td><?php echo $row1['roomno']?></td>
				<td><img src="../img_src/<?php echo $row1['imagename']?>" class="img"></td>
			</tr>

	<?php }
 }?>
</table>
<h1>For Gallery</h1>

	<table border="2px" class="tbl">
		<tr>
			<th>ID</th>
			<th>Image Name</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	<?php 
			//$con=mysqli_connect("localhost","root","","sirledinuvako");
$con=mysqli_connect("localhost","root","","Deerfieldlodge") or die("connection couldn't be established");
$qry="select *from gallery";
$selqry=mysqli_query($con,$qry);


while($row=mysqli_fetch_array($selqry))
	//if ($row['id']==$_SESSION['id'])
{?>



	<tr><td><?php echo $row['id']?></td>
		<td><?php echo $row['imagename']?></td> 
		<td><img src="../img_src/gallery/<?php echo $row['imagename']?>" class="img"></td>
		<td><a href="../database/backenddatabase.php?delgallery=<?php echo $row['id']; ?>" >delete</a></td>
		
	</tr>
	
<?php }?>
<?php if (isset($_SESSION['delgallerymsg'])):?>
		<div class="msg">
			<?php
				echo $_SESSION['delgallerymsg'];
				unset($_SESSION['delgallerymsg']);
			?>
		</div>

<?php endif?>
<?php 
mysqli_close($con);

	?>
	</table>
	<h2>if you want to insert img</h2>
<form method="post" action="../database/backenddatabase.php" enctype="multipart/form-data" class="tbl">
	<input type="file" name="upfile" required="required"><br/>
	<input type="submit" name="insertimg" value="insertimg">
</form>

	
</body>
</html>