<?php
require_once "koneksic.php";
$username= $_POST["username"];
$password= $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `profil` (`id_user`, `username`, `password`) VALUES (NULL, ?, SHA1(?));");
$q->execute([$username,$password]);
header("Location: ../Login.php");
?>