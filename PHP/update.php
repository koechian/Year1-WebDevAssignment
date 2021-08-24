<?php
include("connect.php");

ini_set('display_errors', 0);

$id1 = $_GET['updateid'];
$foodname = $_POST['foodname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$caption = $_POST['caption'];

$sql = "SELECT * FROM foods WHERE id=$id1";
$result1 = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result1);

$old_foodname = $row['food_name'];
$old_price = $row['price'];
$old_quantity = $row['quantity'];
$old_caption = $row['caption'];


$updatefoods = "UPDATE foods SET id=$id1, food_name='$foodname',price=$price,quantity=$quantity,caption='$caption' WHERE id=$id1";


if (isset($_POST['edit'])) {
    $result = mysqli_query($link, $updatefoods);

    if ($result) {
        header("location:admin.php");
    } else {
        echo "ERROR: Could not able to execute $updatefoods. " . mysqli_error($link);
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
    <title>Edit Records</title>
</head>

<body>
    <div id="side_bar"></div>
    <div id="topbar"></div>
    <div id="form_cont_top">
        <div id="form_cont">
            <form action="" method="POST" id="insert_form">
                <label for="foodname">Foodname</label>
                <input value="<?php echo $old_foodname ?>" name="foodname" type="text"><br><br>
                <label for="price">Price</label>
                <input value="<?php echo $old_price ?>" name="price" type="number"><br><br>
                <label for="quantity">Quantity</label>
                <input value="<?php echo $old_quantity ?>" name="quantity" type="number"><br><br>
                <label for="caption">Caption</label>
                <input value="<?php echo $old_caption ?>" name="caption" type="text"><br><br>
                <input name="edit" value="Change this Record" type="submit"><br><br><br><br>
                <a href="admin.php">ADMIN PAGE</a>
        </div>
        </form>
    </div>
</body>

</html>