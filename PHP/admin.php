<?php
ini_set('display_errors', 0);
include('connect.php');

$pageid = 0;

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
        </form>

    </div>
    <div id="topbar">
        <h1>Admin Dashboard</h1>

    </div>
    <div id="data_disp">
        <form action="" method="get">
            <?php
            require('connect.php');
            ini_set('display_errors', 0);

            if (isset($_GET['get_foods'])) {
                $pageid = 1;
                $sql = "SELECT * FROM foods";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table cellspacing='5' align='center'>";
                        echo "<tr>";
                        echo "<th>Index</th>";
                        echo "<th>Food Name</th>";
                        echo "<th>Price</th>";
                        echo "<th>Stock</th>";
                        echo "<th colspace='2'>Action</th>";
                        echo "<th>Caption</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            $tempid = $row['id'];
                            echo "<tr align='center'>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['food_name'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "<td> <button><a href='update.php?updateid=$tempid'>Update</a></button>
                            <button><a href='delete.php?deleteid=$tempid'>Delete</a></button></td>";
                            echo "<td>" . $row['caption'] . "</td>";

                            echo "</tr>";
                        }

                        echo "</table><br><br><br>";
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
                            $tempid = $row['id'];
                            echo "<tr align='center'>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['names'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['dob'] . "</td>";
                            echo "<td>" . $row['area'] . "</td>";
                            echo "<td> 
                            <button><a href='delete.php?deleteid=$tempid'>Delete</a></button></td>";
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

            <button name='new'><a href='new.php'>Insert New Record</a></button>



        </form>

    </div>

</body>

</html>