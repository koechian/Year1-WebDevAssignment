<?php

ini_set('display_errors', 0);


include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$area = $_POST['area'];
$email = $_POST['email'];
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);
$selection = $_POST['radio'];

$first = $_POST['name'];
$other = $_POST['other'];
$name = $first . " " . $other;

$originalDate = $_POST['date_picker'];
$newDate = date("Y-m-d", strtotime($originalDate));


$sql = "INSERT INTO users(names,email,username,password,area,dob,newsletter) VALUE('$name','$email','$username','$password','$area','$newDate','$selection')";

if (isset($_POST['create'])) {
  if (mysqli_query($link, $sql)) {
    echo "<script>alert('Your account has been created!')</script>";
  } else {
    echo "<script>alert('Account creation failed! . mysqli_error($link)')</script>";
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../CSS\register.css" />
  <link rel="stylesheet" href="../CSS\fonts.css" />
  <link rel="icon" href="../Assets\Images\favicon.ico" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join Us</title>
</head>

<body>
  <div class="container">
    <div class="signup_box">

      <h1 id="create">Create an Account</h1>
      <span id="create_sub">Already have an account? <a href="login.php">Sign in</a></span>
      <form action="" method="post">
        <div id="username">
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Enter a username" autocomplete="off" required />
        </div>
        <br />
        <div style="position: absolute; top: 120px;right: 20px;" id="email_field">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Enter your Email Address" autocomplete="off" required />
        </div>
        <br />

        <div id="first_names">
          <label for="first_name">First Name</label>
          <input name='name' id="first_name" type="text" />
        </div>
        <div id="second_names">
          <label for="second_name">Other Names</label>
          <input id="second_name" name="other" type="text" />
        </div>
        <div id="passwords">
          <label for="password">Create a Password</label>
          <input type="password" name="password" placeholder="Create a password" autocomplete="off" required />
        </div>
        <div style="position: absolute; top: 300px; right:20px;">
          <label for="date">Choose your date of birth</label>
          <input name="date_picker" type="date">
        </div>
        <div id="area_select">
          <label for="area">Select Your Area</label>
          <select name="area" id="area">
            <option value="Rongai">Rongai</option>
            <option value="Langata">Langata</option>
            <option value="Ngong">Ngong</option>
            <option value="Ngong">Ngong Road</option>
            <option value="Karen">Karen</option>
            <option value="South_C">South C</option>
            <option value="CBD">CBD</option>
            <option value="Kitengela">Kitengela</option>
            <option value="Embakasi">Embakasi</option>
            <option value="Madaraka">Madaraka</option>
            <option value="Westands">Westands</option>
          </select>
        </div>
        <div id="signup_button">
          <button type="submit" name="create" value="create account" class="join">JOIN US!</button>

        </div>
        <div id="text1">
          <p>
            The Bando Coffee and Beverage House may keep me informed with
            personalized emails about products and services. <br /><br />See our
            Privacy Policy for more details or to opt-out at any time.
          </p>
        </div>
        <div id="text2">
          <input id="radio" name="radio" type="checkbox" value="Yes" />
          <label id="contactme">Please contact me via Email</label>
        </div>
        <div id="text3">
          <p>
            By clicking Create account, I agree that I have read and accepted
            the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a>
          </p>

        </div>
      </form>

    </div>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </div>
</body>

</html>