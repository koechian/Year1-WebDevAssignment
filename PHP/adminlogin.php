<?php

include('connect.php');
ini_set('display_errors', 0);

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);


$sql = "SELECT * FROM admins WHERE username='$username'and password='$password'";

if (isset($_POST['login'])) {


    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<script>alert('Login Successful')</script>";
        header("location:admin.php");
    } else {
        echo "<script>alert('Login Failed')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS\admin.css">
    <title>Admin Login</title>
</head>

<body>
    <div id="container">
        <h1>Administrator Login</h1>
        <div id="form">
            <form action="" method="POST">
                <input placeholder="Username" id="userfield" name="username" type="text"><br><br>
                <input placeholder="Password" id="passfield" name="password" type="password"><br><br>
                <input id="login" value="LOGIN" name="login" type="submit">
            </form>
        </div>
    </div>
</body>

</html>