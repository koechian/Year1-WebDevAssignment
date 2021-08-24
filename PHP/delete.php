<?php
include('connect.php');
include('admin.php');

if (isset($_GET['deleteid'])) {
    $tempid1 = $_GET['deleteid'];

    $delqueryusers = "DELETE FROM users WHERE id='$tempid1'";
    $delqueryfoods = "DELETE FROM foods WHERE id='$tempid1'";



    $result1 = mysqli_query($link, $delqueryfoods);
    $result = mysqli_query($link, $delqueryusers);
    if ($pageid == 0) {



        if ($result) {
            echo "<script>alert('User Deleted')</script>";
            header("location:admin.php");
        } else {
            die("ERROR: Could not delete. " . mysqli_connect_error($link));
        }
    }
} elseif ($pageid = 1) {
    if ($result1) {
        echo "<script>alert('Food Deleted')</script>";
        header("location:admin.php");
    } else {
        die("ERROR: Could not delete. " . mysqli_connect_error($link));
    }
}
