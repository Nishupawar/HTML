
<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsive_form";


$conn= mysqli_connect($servername,$username,$password,$dbname);

$mysqli = new mysqli("localhost","root","","responsive_form");

//$mysqli = new mysqli("localhost","root","","register");

if($conn)
{
   //echo "Connection ok....";
}
else
{
    echo "Connection failed";
}

?>


