<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: #004528;">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM registeration WHERE uname='$_SESSION[login_user]'";
		$result = mysqli_query($conn,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['name'];
			$last=$row['name'];
			$username=$row['uname'];
			$password=$row['pass'];
			$email=$row['pass'];
			$contact=$row['no'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['name'];
			$last=$_POST['name'];
			$username=$_POST['uname'];
			$password=$_POST['pass'];
			$email=$_POST['pass'];
			$contact=$_POST['no'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE registeration SET first='$name', last='$name', username='$uname', password='$pass', email='$pass', contact='$no' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($conn,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

