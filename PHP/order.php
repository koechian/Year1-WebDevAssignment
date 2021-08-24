<?php

include('connect.php');

if (isset($_POST['place_order'])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../Assets/Images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS\navbar.css">
    <link rel="stylesheet" href="../CSS\orders.css">
    <link rel="stylesheet" href="../CSS\about.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Order</title>
</head>

<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="../index.php">Go Back</a></li>
                <li><a href="../HTML/about.html">About Us</a></li>
                <li><a href="#about_pointer">Find A Bistro</a></li>
            </ul>
        </nav>
    </div>
    <div class="under">
        <h1>The Bando</h1>
    </div>
    <div id="reciept_cont">
        <div id="header">
            <h2>Reciept</h2><br><br><br>
        </div>
        <div id="reciept_text">
            <h3>Your Order of <?php ?></h3>
        </div>


    </div>



</body>

</html>