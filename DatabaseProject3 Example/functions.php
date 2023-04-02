<?php

function check_login($con)
{
    if (isset($_SESSION['employee_id'])) {
        $id = $_SESSION['employee_id'];
        $query = "select * from employee where employee_id = '$id' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: login.php");
    die;
}

function check_loginlogin($con)
{
    if (isset($_SESSION['employee_id'])) {
        header("Location: index.php");
        $id = $_SESSION['employee_id'];
        $query = "select * from employee where employee_id = '$id' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
}