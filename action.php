<?php
$servername = "localhost";
$username = "root";
$password = "";


$con=  mysqli_connect("localhost", "root", "");
mysqli_select_db("hotel",$connection);

$sql = "INSERT INTO signup (username,email, password,repeat password)
VALUES ('uname', 'email', 'psw' , 'psw-repeat')";

mysqli_close($con);
?>