<?php
include('connect.php');

$new_username = $_POST['username'];
$new_password = $_POST['password'];

$sql = "INSERT INTO admins(username,password)VALUES('$new_username','$new_password')";




if (isset($_POST['create_user'])) {
    if ($result = mysqli_query($link, $sql)) {
        echo "<script>alert('Success')</script>";
    } else {
        echo mysqli_error($link);
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
    <title>New Admin</title>
</head>

<body>
    <div id="container">
        <h1>Admin Creation Page</h1>
        <div id="form">
            <form action="" method="POST">
                <input placeholder="Username" id="userfield" name="username" type="text"><br><br>
                <input placeholder="Password" id="passfield" name="password" type="password"><br><br>
                <input id="login" value="Create User" name="create_user" type="submit">
            </form>
            <button><a href="admin.php">Back</a></button>
        </div>
    </div>


</body>

</html>