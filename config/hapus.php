<?php
require_once "koneksic.php";
$id_usr= $_POST["id_usr"];
echo $id_usr;

$q = $database_connection->prepare("DELETE FROM `user_info` WHERE `user_info`.`id_user` = ?");
$q->execute([$id_usr]);
header("Location: ../list.php");
?>