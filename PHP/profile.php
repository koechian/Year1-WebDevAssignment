<?php
include('login.php');
include('connect.php');

ini_set('display_errors', 0);


$temp = $_SESSION['usr'];


$get_data = "SELECT * FROM users";

$data = mysqli_query($link, $get_data);
$row = mysqli_fetch_array($data, MYSQLI_ASSOC);



if (isset($_POST['logout'])) {

    session_destroy();
    header("location:../HTML\login.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="shortcut icon" href="../Assets/Images/favicon.ico" type="image/x-icon">
    <title>My Profile</title>
</head>

<body>
    <div id=container>
        <div id=top-bar>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="../index.php">Go Back</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#about_pointer">Find A Bistro</a></li>
                        <li><a href="#">Order Now</a></li>
                    </ul>
                </nav>
                <div id="header_parent">
                    <h1 id="header_text">THE BANDO</h1>
                </div>

            </div>
            <div id="username-cont">
                <img id="userimg" src="https://secure.gravatar.com/avatar/e9a1178888965fc58edcd11a70bff6f1?s=100&amp;d=mm" class="userpicture defaultuserpic" width="100" height="100" alt="Profile Picture">

                <h1 id="username-disp"><?php echo $_SESSION['usr'] ?></h1>
                <form enctype="multipart/form-data" action="" method="POST">
                    <input name="logout" value="Logout" type="submit" id="logout-btn">
                    <input name="upload" value="Upload" type="submit" id="upload-btn">
                    <div id="uploads">
                        <form action="userupload.php" method="POST">
                            <?php
                            if (isset($_POST['upload'])) {
                                echo <<<GFG
                        <input type="file" name="fileToUpload" id="fileToUpload" />
                        <input type="submit" name="img_upload"/>
                        GFG;
                            }
                            ?>
                        </form>
                    </div>
                </form>

            </div>

            <div id=bod>
                <h3 id="data"><?php
                                echo $row; ?> </h3>

            </div>
        </div>

</body>

</html>