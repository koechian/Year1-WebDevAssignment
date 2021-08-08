<?php

include('connect.php');
ini_set('display_errors', 0);

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);


$sql = "SELECT * FROM users WHERE username='$username'and password='$password'";

if (isset($_POST['login'])) {


  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<script>alert('Login Successful')</script>";
  } else {
    echo "<script>alert('Login Failed')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <link rel="stylesheet" href="../CSS\index.css" />
  <link rel="stylesheet" href="../CSS\login.css" />
  <link rel="stylesheet" href="../CSS\navbar.css" />
  <link rel="stylesheet" href="../CSS\fonts.css" />
  <link rel="icon" href="../Assets\Images\favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup or Login</title>
</head>

<body>
  <div class="container">
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="../index.php">Go Back</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="about.php">Find A Bistro</a></li>
          <li><a href="#">Cart</a></li>
        </ul>
      </nav>
    </div>
    <section class="login_page">
      <div class="image_cont"></div>
      <div class="login_container">
        <h1 id="text">Don't Have an Account?</h1>
        <p id="text1">
          Feel free to join us.<br />
          This makes it way easier to keep track of your orders and makes
          ordering a breeze!
        </p>
        <button id="sign"><a href="register.php">SIGN UP</a></button>
      </div>
      <div class="login_box">
        <h1 id="login_text">LOGIN</h1>
        <form action="" method="post">
          <input id="username" name="username" type="text" placeholder="USERNAME" />
          <br />
          <input id="password" name="password" type="password" placeholder="PASSWORD" />
          <br /><br /><br /><br />
          <a id="reset" href="#">Forgot Password?</a><br />
          <button type="submit" name="login" class="btn btn-primary" id="login_submit">Let me in!</button>
        </form>
        <p id="connect_text">Or Connect With</p>
        <div class="loginOption_icons">
          <div>
            <a href="https://github.com/login" id="github" target="blank"><span style="height: 40px; width: 40px" class="iconify" data-icon="icon-park:github" data-inline="false"></span>
            </a>
          </div>
          <div>
            <a href="https://twitter.com/login/" id="twitter_login_page" target="blank"><span class="iconify" data-icon="logos:twitter" data-inline="false" style="height: 40px; width: 40px"></span>
            </a>
          </div>

          <div>
            <a id="google" target="blank" href="https://accounts.google.com/"><span style="height: 40px; width: 40px" class="iconify" data-icon="flat-color-icons:google"></span>
            </a>
          </div>
          <div>
            <a id="admin" title="Admin Login" target="blank" href="adminlogin.php"><span style="height: 40px; width: 40px; color:black;" class="iconify" data-icon="grommet-icons:user-admin"></span>
            </a>
          </div>
        </div>
      </div>

      <section id="Footer">
        <div class="bottom">
          <div>
            <a id="twitter" target="blank" href="https://twitter.com/mwafrikaa_" title="Follow me on Twitter"><span class="iconify" data-icon="mdi-twitter"></span>
            </a>
          </div>
          <div>
            <a id="insta" href="#" title="Placeholder,Sina Insta"><span class="iconify" data-icon="akar-icons:instagram-fill"></span></a>
          </div>
          <div>
            <a id="youtube" target="blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="My YouTube channel"><span class="iconify" data-icon="akar-icons:youtube-fill"></span></a>
          </div>
          <span id="bottom_text">The Bando Coffee House &nbsp | &nbsp All Rights Reserved</span>
        </div>
      </section>
    </section>
  </div>
</body>

</html>