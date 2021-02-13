<?php
require_once "koneksic.php";
$id_profil= $_POST["id_prf"];
$nama = $_POST["nama"];
$email= $_POST["email"];
$password= $_POST["password"];

$q = $database_connection->prepare("UPDATE `user_info` SET `nama` = ?, 
 `email` = ?, `password`=SHA(?) WHERE `user_info`.`id_user` = ?");
$q->execute([$nama, $email, $password,$id_profil]);
header("Location: ../List.php");
?>