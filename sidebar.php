<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dasbord</title>
  <!-- Linking Google Font Link For Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="sidebar.css" />
</head>

<body>
  <aside class="sidebar">
    <div class="sidebar-header">
      <img src="img/logo-1.png" alt="logo" />
      <h2>Hotel Magnificent</h2>
    </div>
    <ul class="sidebar-links">
      <h4>
        <span>Main Menu</span>
        <div class="menu-separator"></div>
      </h4>
      <li>
        <a href="#">
          <span class="material-symbols-outlined"> dashboard </span>Dashboard</a>
      </li>
      <li><a href="#">
          <span class="material-symbols-outlined">bed</span>Cyheckin</a>
      </li>
      <h4>
        <span>Account</span>
        <div class="menu-separator"></div>
      </h4>
      <li>
        <a href="#"><span class="material-symbols-outlined"> account_circle </span>Profile</a>
      </li>
      <li>
        <a href="login.php"><span class="material-symbols-outlined"> logout </span>Logout</a>
      </li>
    </ul>
    <div class="user-account">
      <div class="user-profile">
        <img src="img/profile-img.jpg" alt="Profile Image" />
        <div class="user-detail">
          <h3>Eva Murphy</h3>
          <span>Web Developer</span>
        </div>
      </div>
    </div>
  </aside>
</body>

</html>