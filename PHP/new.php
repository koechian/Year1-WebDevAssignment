<?php

include("connect.php");

$foodname = $_GET['foodname'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];

$insertfoods = "INSERT INTO foods(food_name,price,quantity)VALUES('$foodname','$price','$quantity')";

if (isset($_GET['add_new'])) {
    $result = mysqli_query($link, $insertfoods);

    if ($result) {
        echo "Record Added Successfully";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/update.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/new.css">
    <title>Add New Record</title>
</head>

<body>
    <div id="side_bar">

    </div>
    <div id="topbar">
        <div id="form_cont_top">
            <div id="form_cont">
                <form action="" method="get" id="insert_form">
                    <label for="foodname">Foodname</label>
                    <input name="foodname" type="text"><br><br>
                    <label for="price">Price</label>
                    <input name="price" type="number"><br><br>
                    <label for="quantity">Quantity</label>
                    <input name="quantity" type="number"><br><br>
                    <input name="add_new" value="Add New" type="submit"><br><br><br>
                    <a href="admin.php">Admin Page</a>
            </div>
            </form>

        </div>
</body>

</html>