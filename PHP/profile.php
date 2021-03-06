<?php
include('login.php');
include('connect.php');

ini_set('display_errors', 1);


$temp = $_SESSION['usr'];
$tempid = $_SESSION['usr_id'];


if (isset($_POST['logout'])) {
    session_destroy();
    header("location:../HTML\login.html");
}

if (isset($_POST['purge'])) {
    $sql = "DELETE FROM confirmed WHERE id=$tempid";
    if ($result = mysqli_query($link, $sql)) {
        header('location:profile.php');
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
    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS\fonts.css">

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
                        <li><a href="../HTML/about.html">About Us</a></li>
                        <li><a href="#about_pointer">Find A Bistro</a></li>
                        <li><a href="../index.php">Order Now</a></li>
                    </ul>
                </nav>
                <div id="header_parent">
                    <h1 id="header_text">THE BANDO</h1>
                </div>

            </div>
            <div id="username-cont">
                <img id="userimg" src="https://secure.gravatar.com/avatar/e9a1178888965fc58edcd11a70bff6f1?s=100&amp;d=mm" class="userpicture defaultuserpic" width="100" height="100" alt="Profile Picture">

                <h1 id="username_disp"><?php echo $_SESSION['usr'] ?></h1>
                <form action="" action="" method="POST">
                    <input name="logout" value="Logout" type="submit" id="logout-btn">
                    <input name="purge" value="Clear History" type="submit" id="upload-btn">
                </form>

            </div>

            <div id=bod>
                <h3>Previous Orders</h3><br><br><br>

                <?php
                $sql = "SELECT * FROM confirmed WHERE id=$tempid";
                echo "<table cellspacing='60' align='center'>";
                echo "<tr>";
                echo "<th>Order Id</th>";
                echo "<th>Food Name</th>";
                echo "<th>Date Ordered</th>";
                echo "</tr>";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr align='center'>";
                            echo "<td>" . $row['order_id'] . "</td>";
                            echo "<td>" . $row['food_name'] . "</td>";
                            echo "<td>" . $row['time_confirmed'] . "</td>";
                            echo "</tr>";
                        }
                    }
                } else {
                    echo mysqli_error($link);
                }
                ?>
            </div>

        </div>
    </div>

</body>

</html>