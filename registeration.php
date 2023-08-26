<?php
include 'header.php';
include 'connection.php';
?>
<!Doctype HTML>
<html>
    <head>
        <title> Apply Online</title>
        <link rel="stylesheet" href="css/register.css"/>
    </head>
    <body>
        <div class="main">
         <div class="register">
             <h2>Apply Online</h2>
             <form id="register" method="post">
             <label>First Name: </label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="fname"id="name"placeholder="Enter your First name">
             <br><br>
             <label> Last Name:</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type ="text" name="lname"id="name"placeholder="Enter your Last name">
             <br><br>
             <label>Father's name: </label>&nbsp;&nbsp;
             <input type="text" id="name" name="fathername"placeholder="Enter your father name">
              <br><br>
              <label>Mother's name: </label>&ensp;
             <input type="text" id="name" name="mothername"placeholder="Enter your mother name">
             <br><br>
             <label> DOB: </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;
             <input type="date" name="dob" id="name"placeholder="How old are you?">
              <br>
             <label>Gender</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
             <input type="radio"name="gender"id="male">
             <span id="male">Male</span>&ensp;&ensp;&nbsp;
             <input type="radio"name="gender" id="female">
             <span id="female">Female</span>
             <br><br>
             <label> Nationality:</label>&ensp;&ensp;&ensp;&ensp;&ensp;
             <select name="nationality"id="name">
                 <option> <--Select--></option>
                 <option> Indian</option>
                 <option> Other...</option>
             </select>
             <br><br>
             <label> State:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
             <select name="state"id="name"> 
                  <option> <--Select--></option>
                 <option>Andhra Pradesh </option>
                 <option>Arunachal Pradesh </option>
                 <option>Assam </option>
                 <option>Bihar </option>
                 <option>Chhattisgarh </option>
                 <option>Goa </option>
                 <option>Gujarat </option>
                 <option>Haryana </option>
                 <option>Himachal Pradesh </option>
                 <option>Jammu and Kashmir </option>
                 <option>Jharkhand </option>
                 <option>Karnataka </option>
                 <option>Kerala </option>
                 <option>Madhya Pradesh </option>
                 <option>Maharashtra </option>
                 <option>Manipur </option>
                 <option>Meghalaya </option>
                 <option>Mizoram </option>
                 <option>Nagaland </option>
                 <option>Odisha </option>
                 <option>Punjab </option>
                 <option>Rajasthan </option>
                 <option>Sikkim </option>
                 <option>Tamil Nadu </option>
                 <option>Telangana </option>
                 <option>Tripura </option>
                 <option>Uttar Pradesh </option>
                 <option>Uttarakhand </option>
                 <option>West Bengal </option>
             </select>
              <br><br>
              <label>Contact no.: </label>&ensp;&ensp;&ensp;&nbsp;
             <input type="number" name="contact"id="name"placeholder="Enter your Valid Contact Number">
              <br><br>
             <label>E-mail:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
             <input type ="email" name="email"id="name"placeholder="Enter your valid E-mail">
             <br><br>
             <label>Highest qualification: </label>
             <select  name="qualification"id="name">
                 <option> <--Select--></option>
                 <option>Primary Education</option>
                 <option> Middle Ecucation</option>
                 <option>High School Education</option>
                 <option>Intermediate or secondary education</option>
                 <option>Graduation</option>
                 <option>Post Graduation</option>
                 <option>Others...</option>
             </select>
             <br><br>
             <label>Course: </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
             <select  name="course"id="name"placeholder="Select your Course">
                 <option> <--Select--></option>
                 <option>ADCA</option>
                 <option>DCA</option>
                 <option>CCC</option>
                 <option>Tally</option>
                 <option>MS Office Tools</option>
                 <option>Photoshop</option>
                 <option>BCC</option>
                 <option>Hindi English Typing</option>
                 <option>Video Editing</option>
                 <option>HTML & CSS</option>
                 <option>C, C++ Programmming</option>
                 <option>Java & Python</option>
                 <option>Web Designing</option>
                 <option> O level</option>
                 <option></option>
                 <option>Banking</option>
                 <option>Internet</option>
                 <option>CSC work</option>
             </select>
             <br><br>
             <label>Address: </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
             <textarea  name="address"id="name"placeholder=""></textarea>
             <br><br>
             <label>Photo: </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
             <input type="file" name="photo"id="photo">
             <br><br>
             &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
             <input type="reset" name="reset"id="submit">
             <input type="submit" name="submit"  id="submit" class="reset">
             
             </form>
        </div>   
        </div>

       <?php
       if(isset($_POST['submit']))
{
           $conn = new mysqli($servername, $username, $password,"my_institutedb");
    
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $fathername=$_POST['fathername'];
      $mothername=$_POST['mothername'];
	  $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $nationality=$_POST['nationality'];
      $state=$_POST['state'];
      $contact=$_POST['contact'];
      $email=$_POST['email'];
      $qualification=$_POST['qualification'];
      $course=$_POST['course'];
      $address=$_POST['address'];
      $photo=$_POST['photo'];
	  
      mysqli_query($conn,"insert into admission values('$fname','$lname','$fathername','$mothername','$dob','$gender','$nationality','$state','$contact','$email','$qualification','$course','$address','$photo')");
      echo"Saved";
      
}
 
include 'footer.php';
?>
    </body>
</html>