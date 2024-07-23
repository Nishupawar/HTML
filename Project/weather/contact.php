<?php include("connectioncontact.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Contact Form</title>
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
      <h2>CONTACT</h2>
    </div>

    <div class="half">
      <div class="item">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="item">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email">
      </div>
      <div class="item">
        <label for="Mobile No">Mobile No :</label>
        <input type="text" name="phone_no" id="number">
      </div>
    </div>
    <div class="full">
      <label for="message">MESSAGE</label>
      <textarea name="message" id="message"></textarea>
    </div>
    <div class="action">
      <input type="submit" name="submit" value="SEND MESSAGE">
      <input type="reset" name="submit" value="RESET">
    </div>
    <!-- <div class="message">
        <div class="success" id="success">Your Message Successfully Sent!</div>
        <div class="danger" id="danger">Feilds Can't be Empty!</div>
    </div>-->
  </form>
</body>

</html>
<?php
//Register

if (isset($_POST['submit'])) {
  //if($_POST['submit']){
//.mysqli_connect_error

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone_no'];
  $msg = $_POST['message'];

  $query = "INSERT INTO  contact VALUES ('$name','$email','$phone','$msg')";

  $data = mysqli_query($conn, $query);

  if ($data) {
    //echo "Data Inserted into Database";
  } else {
    echo "Failed";
  }


}
?>