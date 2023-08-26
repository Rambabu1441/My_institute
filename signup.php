<?php
include 'header.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registeration Form</title>
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>
    <div class="center">
      <h1>Student <br>Registeration Form</h1>
      <form method="post">
	  <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Full Name</label>
        </div>
	    <div class="txt_field">
          <input type="tel"name="no" required>
          <span></span>
          <label>Aadhar No.</label>
        </div>
        <div class="txt_field">
          <input type="text"name="uname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
		<div class="txt_field">
          <input type="password" name="cpass"required>
          <span></span>
          <label>Re-enter Password</label>
        </div>
        <input type="submit" name="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="Login.php">Login</a>
        </div>
      </form>
    </div>



 <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT uname from `registeration`";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
          if($row['uname']==$_POST['uname'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
			if($_POST['pass']==$_POST['cpass'])
			{
				  mysqli_query($conn,"INSERT INTO `registeration` VALUES('$_POST[name]', '$_POST[no]', '$_POST[uname]', '$_POST[pass]', '$_POST[cpass]');");
				?>
				  <script type="text/javascript">
				   alert("Registration successful");
				  </script>
				<?php
			}
			else{
				?>
				<script>
					alert("password and confirm password did not match.");
				</script>
				<?php
			}
        }
        else
        {

         ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
         <?php

        }
	}


    ?>
  </body>
</html>
