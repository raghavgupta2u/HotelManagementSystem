<?php

$con = mysqli_connect("localhost","root","","hotel_management") or die("Connection faild");

// $name = $_POST['name'];
// $age = $_POST['age'];
// $gender = $_POST['gender'];
// $email = $_POST['email'];
// $course = $_POST['course'];
// $sql = "INSERT INTO studentlogin(sname,sage,sgender,semail,scourse) VALUES('{$name}','{$age}','{$gender}','{$email}','{$course}')";


$sql = "Select from login ";
$result = mysqli_query($con,$sql) or die('Query Unsuccessfull');

header("Location: http://localhost/website/my.php");

mysqli_close($con);

?>