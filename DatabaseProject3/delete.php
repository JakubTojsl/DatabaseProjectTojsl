<?php

include("connect.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `employee` WHERE `employee_id` = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: zamestnanci.php");
    }
    else{
        die(mysqli_error($con));
    }
}

?>