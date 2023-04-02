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

<h1 class="h1">Seznam místností</h1>

<?php

session_start();
include("connect.php");
include("functions.php");
$user_data = check_login($con);

$title = "Mistnosti";
require_once 'connect.php';

$stmt = $pdo->query('SELECT room_id, name, no, phone FROM room ORDER BY no');

if ($stmt->rowCount() == 0) {
    echo "Záznam neobsahuje žádná data";
}
else
{

    echo "<table class='table'>";
    echo "<tr><th>Název</th><th>Číslo</th><th>Telefon</th><th>Funkce</th></tr>";
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td><a href='mistnost.php?roomId={$row['room_id']}'>{$row['name']}</a></td>";
        echo "<td>{$row['no']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td><button><a href='updateRooms.php?updateid={$row['room_id']}'>Upravit</a></button><button><a href='delete.php?deleteid={$row['room_id']}'>Odstranit</a></button></td>";
        echo "</tr>";
    }
    echo "</table>";
}
unset($stmt);

?>

<a href="viewer.php" class="return">Zpět</a>

</body>
</html>