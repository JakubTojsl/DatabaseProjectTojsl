<?php
session_start();
include("connect.php");
include("functions.php");
$user_data = check_login($con);

?>

<html>
<head>
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hlavní stránka</h1>

            <a href="viewer.php">Prohlížeč databáze</a>

        </div>
        <div class="col">
            <h5 >Přihlášen: <?php echo $user_data['login']; ?></h5>
            <a href="logout.php" >Odhlásit se</a>
        </div>
    </div>
</div>


</body>
</html>
