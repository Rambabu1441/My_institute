<?php
include 'header.php';
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Form</title>
    <link rel="stylesheet" href="css/login.css">
	<link rel="" href="header.html">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="uname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass"required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>


<?php 


    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($conn,"SELECT * FROM `registeration` WHERE uname='$_POST[uname]' && pass='$_POST[pass]';");
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
                
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="profile.php"
          </script>
        <?php
      }
    }

include 'footer.php';
?>
  </body>
</html>
