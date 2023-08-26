<?php
include 'header.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Registeration Form</title>
    <link rel="stylesheet" href="css/admin_signup.css">
  </head>
  <body>
    <div class="center">
      <h1>Teacher <br>Registeration Form</h1>
      <form method="post">
	  <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Full Name</label>
        </div>
	    <div class="txt_field">
          <input type="tel"name="no" required>
          <span></span>
          <label>Contact No.</label>
        </div>
		<div class="txt_field">
          <input type="text"name="field" required>
          <span></span>
          <label>Experties Field</label>
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
          Already a member? <a href="admin_login.php">Login</a>
        </div>
      </form>
    </div>
 <?php
 
       if(isset($_POST['submit']))
{
           $conn = new mysqli($servername, $username, $password,"my_institutedb");
    
      $name=$_POST['name'];
      $no=$_POST['no'];
	  $field=$_POST['field'];
      $uname=$_POST['uname'];
      $pass=$_POST['pass'];
      $cpass=$_POST['cpass'];
	  
      mysqli_query($conn,"insert into admin_signup2 values('$name','$no''$field','$uname','$pass','$cpass')");
      echo""; 
}

include 'footer.php';
?>
  </body>
</html>
