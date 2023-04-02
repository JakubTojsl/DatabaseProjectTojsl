<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>

<h1 class="h1">Seznam zaměstnanců</h1>

<?php

session_start();
include("connect.php");
include("functions.php");
$user_data = check_login($con);

$title = "Zamestnanci";
require_once 'connect.php';


$stmt = $pdo->query('SELECT employee_id, employee.name, surname, job, wage, room, phone, room.name as room_name 
FROM employee, room WHERE room.room_id = employee.room ');

if ($stmt->rowCount() == 0) {
    echo "Záznam neobsahuje žádná data";
}
else
{

    echo "<table class='table'>";
    echo "<tr><th>Jméno</th><th>Místnost</th><th>Telefon</th><th>Pozice</th><th>Funkce</th></tr>";
    while ($row = $stmt ->fetch()) {
        echo "<tr>";
        echo "<td><a href='zamestnanec.php?employeeId={$row['employee_id']}'> {$row['name']} {$row['surname']} </a></td>";
        echo "<td>{$row['room_name']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['job']}</td>";
        echo "<td><button><a href='updateEmployees.php?updateid={$row['employee_id']}'>Upravit</a></button><button><a href='delete.php?deleteid={$row['employee_id']}'>Odstranit</a></button></td>";
        echo "</tr>";

    }
    echo "</table>";
}
unset($stmt);

?>

<button class="btn btn-primary"><a href="form.php" class="text-light">Přidat</a></button>

<a href="viewer.php">Zpět</a>

</body>
</html>