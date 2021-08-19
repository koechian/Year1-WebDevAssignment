<?php
ini_set('display_errors', 0);
include('connect.php');
$foodname = $_POST['foodname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$foodname = mysqli_real_escape_string($link, $foodname);
$newprice = $_POST['newprice'];
$newquantity = $_POST['newquantity'];
$upindex = $_POST['foodindex'];
$usrindex = $_POST['userindex'];

$ins = "INSERT INTO foods(food_name,price,quantity)VALUES('$foodname','$price','$quantity')";
$change = "UPDATE foods SET price=$newprice,quantity=$newquantity WHERE id=$upindex";
$delete = "DELETE FROM `foods` WHERE `foods`.`id` = $upindex";
$deleteusr = "DELETE FROM `users` WHERE `users`.`id` = $usrindex";



if (isset($_POST['add'])) {
    if (mysqli_query($link, $ins)) {
        echo "<script>alert('The Data has been added')</script>";
    } else {
        echo "<script>alert('Data addition failed! . mysqli_error($link)')</script>";
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

if (isset($_POST['change'])) {
    if (mysqli_query($link, $change)) {
        echo "<script>alert('The record has been updated')</script>";
    } else {
        echo "<script>alert('Update failed! . mysqli_error($link)')</script>";
    }
}
if (isset($_POST['delete'])) {
    if (mysqli_query($link, $delete)) {
        echo "<script>alert('The record has been deleted')</script>";
    } else {
        echo "Failed!" . mysqli_error($link);
    }
}
if (isset($_POST['deleteusr'])) {
    if (mysqli_query($link, $deleteusr)) {
        echo "<script>alert('The user has been deleted')</script>";
    } else {
        echo "Failed!" . mysqli_error($link);
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
    <title>Admin Page</title>
</head>

<body>
    <div id="side_bar">
        <form action="" method="get">
            <input id="button1" name="get_foods" value="Display Foods" type="submit"><br><br><br>

            <input id="button2" name="get_users" value="Display Users" type="submit"><br><br><br>
            <input id="button3" name="crud" value="Create and Edit" type="submit">

        </form>

    </div>
    <div id="topbar">

    </div>
    <div id="data_disp">
        <form action="" method="get">
            <?php
            require('connect.php');
            ini_set('display_errors', 0);

            if (isset($_GET['get_foods'])) {
                $sql = "SELECT * FROM foods";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Index</th>";
                        echo "<th>Food Name</th>";
                        echo "<th>Price</th>";
                        echo "<th>Quantity in Stock</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['food_name'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "<script>alert('No records matching your query were found.')</script>";
                    }
                }
            } elseif (isset($_GET['get_users'])) {
                $sql = "SELECT * FROM users";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table align='center' cellspacing='10'>";
                        echo "<tr>";
                        echo "<th>Index</th>";
                        echo "<th>Names</th>";
                        echo "<th>Username</th>";
                        echo "<th>Password</th>";
                        echo "<th>Date of Birth</th>";
                        echo "<th>Area of Residence</th>";
                        echo "<th colspan='2'>Action</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr align='center'>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['names'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['dob'] . "</td>";
                            echo "<td>" . $row['area'] . "</td>";
                            echo "<td><a href='admin.php?delete=<?php echo $row['id'];?>'>Edit</a></td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "<script>alert('No records matching your query were found.')</script>";
                    }
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            ?>

        </form>
    </div>

</body>

</html>