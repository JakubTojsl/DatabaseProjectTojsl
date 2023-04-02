<?php
session_start();
include("connect.php");
include("functions.php");
$user_data = check_login($con);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>

<section class="viewer__section">
    <h1 class="viewer__title">PROHLÍŽEČ DATABÁZE</h1>
    <div class="credit">Jakub Tojšl</div>

    <ul class="viewer__list">
        <li class="list__item">
            <a href="zamestnanci.php">Seznam zaměstnanců</a>
        </li>
        <li class="list__item">
            <a href="mistnosti.php">Seznam místností</a>
        </li>
    </ul>

</section>


</body>
</html>