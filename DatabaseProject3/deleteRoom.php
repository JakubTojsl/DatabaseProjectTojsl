<?php

include("connect.php");

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    // Delete related records from the `key` table
    $sql1 = "DELETE FROM `key` WHERE `room` = '$id'";
    $result1 = mysqli_query($con, $sql1);

    // Delete the record from the `room` table
    $sql2 = "DELETE FROM `room` WHERE `room_id` = '$id'";
    $result2 = mysqli_query($con, $sql2);

    if($result2){
        header("Location: mistnosti.php");
    }
    else{
        die(mysqli_error($con));
    }
}

?>
