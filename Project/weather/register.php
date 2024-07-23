<?php include("connection.php"); ?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Registration Form | CodingLab </title>--->
  <link rel="stylesheet" href="register.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <!--<form action="#" method="POST">-->
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" class="input" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" class="input" name="username"placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" class="input" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" class="input" name="phone_number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" class="input"  name="password"placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" class="input" name="confirm_password" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text"  class="input" name="address"placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text"class="input" name="city" placeholder="Enter your city" required>
          </div>
        </div>
        <div class="gender-details">
          <span class="gender-title">Gender</span>
          <div class="category">
            <select name="gender">
              <option value="">Please select one…</option>
              <option value="female">Female</option>
              <option value="male">Male</option>
              <option value="non-binary">Non-Binary</option>
              <option value="other">Other</option>
              <option value="Prefer not to answer">Perfer not to Answer</option>
            </select>

          </div>
        </div>
        <div class="button">
         <!-- <input type="submit" value="Register">-->
          <input type="submit"  value="submit" class="btn" name="submit">
        </div>
      </form>
    </div>
    <!-- </form>-->
  </div>

</body>

</html>

<?php
//Register

if(isset($_POST['submit'])) {
//if($_POST['submit']){
//.mysqli_connect_error

   $name =$_POST['name'];
   $uname =$_POST['username'];
   $email =$_POST['email'];
   $phone =$_POST['phone_number'];
   $pwd =$_POST['password'];
   $cpwd =$_POST['confirm_password'];
   $addr =$_POST['address'];
   $city =$_POST['city'];
   $gender =$_POST['gender'];


  $query=  "INSERT INTO  register VALUES ('$name','$uname','$email','$phone','$pwd','$cpwd','$addr','$city','$gender')";

  $data = mysqli_query($conn,$query);

if($data)
{
  //echo "Data Inserted into Database";
}
else
{
  echo "Failed";
}


}
?>