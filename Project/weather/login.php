<?php include("connectionlogin.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="stylecontact.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>
  
  <form action="#" method="POST">
    <div class="title">
      <h2>Login Form</h2>
    </div>

    <div class="half">

      <div class="item">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email">
      </div>
      <div class="item">
        <label for="Password">Password :</label>
        <input type="text" name="password" id="password">
      </div>
    </div>
    <div class="button">
         <!-- <input type="submit" value="Register">-->
          <input type="submit"  value="submit" class="btn" name="submit">
        </div>
        <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>

  </form>
</body>

</html>
<?php
//Register

if (isset($_POST['submit'])) {
  //if($_POST['submit']){
//.mysqli_connect_error


  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query = "INSERT INTO  login VALUES ('$email','$password')";
  $data = mysqli_query($conn, $query);

  if ($data) {
    //echo "Data Inserted into Database";
  } else {
    echo "Failed";
  }

  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  
}
?>