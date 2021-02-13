<?php
require_once "koneksic.php";
$username= $_POST["username"];
$password= $_POST["password"];
$email= $_POST["email"];
$nama= $_POST["nama_user"];

$q = $database_connection->prepare("INSERT INTO `user_info` (`id_user`, `username`, `password`, `email`, `nama`) VALUES (NULL, ?, SHA1(?), ?, ?);");
$q->execute([$username, $password, $email, $nama]);
header("Location: ../Login.php");
?>