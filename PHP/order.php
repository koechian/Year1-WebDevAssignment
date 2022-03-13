<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../Assets/Images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS\navbar.css">
    <link rel="stylesheet" href="../CSS\orders.css">
    <link rel="stylesheet" href="../CSS\index.css">
    <link rel="stylesheet" href="../CSS\about.css">
    <link rel="stylesheet" href="../CSS\fonts.css">

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
        <h1 id="header_text">THE BANDO</h1>
    </div>
    <div id="reciept_cont">
        <div id="header">
            <h2>Reciept</h2><br><br><br>
        </div>
        <div id="reciept_text">
            <?php

            include('connect.php');
            include('login.php');

            $temp = $_SESSION['usr_id'];

            $select = "SELECT * FROM  orders WHERE id =$temp";
            $prices = array();
            $foods_name = array();
            $x = 0;
            if ($result = mysqli_query($link, $select)) {


                while ($row = mysqli_fetch_array($result)) {
                    echo "<table cellspacing=5 align='left'>";
                    echo "<tr align='left'>";
                    echo "<td>" . $row['food_name'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "</tr>";
                    $prices[$x] = $row['price'];
                    $foods_name[$x] = $row['food_name'];
                    $x++;
                }
                echo "</table>";
            } else echo mysqli_error($link);
            ?>
        </div>
        <hr id="hr1">
        <div id="summary">
            <h3>Subtotal</h3><br>
            <h5>VAT(16%)</h5>
            <h3>TOTAL</h3>
            <hr>
        </div>
        <div id="calc">
            <h5>Ksh <?php $pre_vat = array_sum($prices);
                    $post_vat = $pre_vat * 1.16;
                    echo $pre_vat ?></h5><br><br>
            <h5>Ksh <?php echo $post_vat ?></h5>
        </div>
        <div id="clear_order">
            <form action="" method="post">
                <input value="Empty Basket" id="clear" name="reset" type="submit">
                <input value="Confirm Order" id="confirm" name="confirm" type="submit">
            </form>
            <?php
            $reset = "DELETE FROM orders WHERE id =$temp";


            if (isset($_POST['reset'])) {
                if ($result = mysqli_query($link, $reset)) {
                    header("location:order.php");
                } else echo mysqli_error($link);
            }

            if (isset($_POST['confirm'])) {

                foreach ($foods_name as $value) {
                    $confirm = "INSERT INTO confirmed(id,food_name)VALUE($temp,'$value')";

                    if ($result = mysqli_query($link, $confirm) && $result = mysqli_query($link, $reset)) {
                        header("location:order.php");
                    } else echo mysqli_error($link);
                }
            }

            ?>
        </div>


    </div>



</body>

</html>