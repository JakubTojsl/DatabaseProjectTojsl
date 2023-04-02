<?php

include ("connect.php");
$id=$_GET['updateid'];
$sql = "SELECT * FROM `employee` WHERE `employee_id` = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$login = $row['login'];
$password = $row['password'];
$employee_id = $row['employee_id'];
$name = $row['name'];
$surname = $row['surname'];
$job = $row['job'];
$wage = $row['wage'];
$room = $row['room'];

if(isset($_POST['submit']))
{
    $login = $_POST["login"];
    $password = $_POST["password"];
    $employee_id = $_POST["employee_id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $job = $_POST["job"];
    $wage = $_POST["wage"];
    $room = $_POST["room"];

    $sql= "update 'employee' set id='$id', login='$login', password='$password', employee_id='$employee_id', name='$name', surname='$surname', job='$job', wage='$wage', room='$room' where id='$id'";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Data se úspěšně aktualizovala";
    }
    else
    {
        echo "Chyba při vkládání dat";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">
    <form method="post">
        <div class="form-group mb-3">
            <label class="form-label">Login</label>
            <input type="text" class="form-control" placeholder="Login" name="login" value=<?php echo $login;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" placeholder="Password" name="password" value=<?php echo $password;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Employee ID</label>
            <input type="number" class="form-control" placeholder="Employee_id" name="employee_id" value=<?php echo $employee_id;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name" value=<?php echo $name;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Surname</label>
            <input type="text" class="form-control" placeholder="Surname" name="surname" value=<?php echo $surname;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Job</label>
            <input type="text" class="form-control" placeholder="Job" name="job" value=<?php echo $job;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Wage</label>
            <input type="number" class="form-control" placeholder="Wage" name="wage" value=<?php echo $wage;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Room</label>
            <input type="number" class="form-control" placeholder="Room" name="room" value=<?php echo $room;?>>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>

</body>
</html>