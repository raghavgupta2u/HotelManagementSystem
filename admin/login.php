<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_POST['Submit'])) {
  $con = mysqli_connect("localhost", "root", "", "hotel_management") or die("Connection faild");

  $usernameuser = mysqli_real_escape_string($con, $_POST['Username']);
  $passworduser = $_POST['Password'];

  $sql = "SELECT user_id FROM login WHERE username = '{$usernameuser}' AND password = '{$passworduser}' ";
  $result = mysqli_query($con, $sql) or die('Query Unsuccessfull');

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION["user_id"] = $row['user_id'];

      header("Location: http://localhost/website/admin/menu/Dashboard.php");
    }
  } else {
    echo '<div class="alert alert-danger"> Username and password are not matches.</div>';
  }

  mysqli_close($con);
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login</title>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Login</header>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name='Username' required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name='Password' required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login" name="Submit">
                </div>

                <div class="bottom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check"> Remember Me</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>