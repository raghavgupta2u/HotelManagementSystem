<?php

if (isset($_POST['Submit'])){
$con = mysqli_connect("localhost","root","","hotel_management") or die("Connection faild");

// $name = $_POST['name'];
// $age = $_POST['age'];
// $gender = $_POST['gender'];
// $email = $_POST['email'];
// $course = $_POST['course'];
// $sql = "INSERT INTO studentlogin(sname,sage,sgender,semail,scourse) VALUES('{$name}','{$age}','{$gender}','{$email}','{$course}')";

$usernameuser = mysqli_real_escape_string($con,$_POST['Username']);
$passworduser = $_POST['Password'];

$sql = "SELECT user_id FROM login WHERE username = '{$usernameuser}' AND password = '{$passworduser}' ";
$result = mysqli_query($con,$sql) or die('Query Unsuccessfull');

if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION["user_id"] = $row['user_id'];

    header("Location: http://localhost/website/sidebar.php");
  }
}
else{
    echo'<div class="alert alert-danger"> Username and password are not matches.</div>';
}


mysqli_close($con);
}
?>