<?php

include ("connect.php");
$id=$_GET['updateid'];
$sql = "SELECT * FROM `room` WHERE `room_id` = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$room_id = $row['room_id'];
$no = $row['no'];
$name = $row['name'];
$phone = $row['phone'];

if(isset($_POST['submit']))
{
    $room_id = $_POST["room_id"];
    $no = $_POST["no"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    $sql= "update 'room' set id='$id', room_id='$room_id', no='$no', name='$name', phone='$phone' where id='$id'";
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
            <label class="form-label">Room ID</label>
            <input type="text" class="form-control" placeholder="Room_ID" name="room_id" value=<?php echo $room_id;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">No</label>
            <input type="text" class="form-control" placeholder="No" name="no" value=<?php echo $no;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Name</label>
            <input type="number" class="form-control" placeholder="Name" name="name" value=<?php echo $name;?>>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone" value=<?php echo $phone;?>>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>

</body>
</html>