<?php

$dbhost = "127.0.0.1";
$dbname = "ip_3";
$dbuser = "www-aplikace";
$dbpass = "Bezpe4n0Heslo.";
$charset = 'utf8mb4';

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("Chyba připojení k databázi.");
}

$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $dbuser, $dbpass, $options);