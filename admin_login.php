<?php
include 'header.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login Form</title>
    <link rel="stylesheet" href="css/admin_login.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text"name="uname" required>
          <span></span>
          <label>UserID</label>
        </div>
        <div class="txt_field">
          <input type="password"name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
		<div class="pass">Forgot Password?</div>
		
        <input type="submit" name="submit" value="Send OTP">
		<div class="signup_link">
          Not a member? <a href="admin_signup.php">Sign-up</a>
        </div>
		</form>
		<form method="post">
		<div class="txt_field">
          <input type="number" required>
          <span></span>
          <label>Enter OTP</label>
        </div>
		<input type="submit" name="verify" value="Verify">
        <div class="signup_link">
          OTP not recieved <a href="#">Resend</a>
        </div>
		</form>
      
    </div>
<?php 


if(!empty($_POST['submit']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $query="select * from admin_signup where uname='$username'and pass='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo "<script>
      window.location.href= 'index.php';</script>";
    }
    else
    {
       echo "<script>alert('Invalid username or Password');
      window.location.href= 'login.php';</script>";
    }
}
include 'footer.php';
?>
  </body>
</html>
