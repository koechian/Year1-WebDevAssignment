<?php
session_start();

include("connect.php");
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

    header("location:../index.php");
    $_SESSION['usr'] = $username;
    $_SESSION['usr_id'] = $row['id'];
  } else {
    header("location:../HTML\login.html");
  }
}
