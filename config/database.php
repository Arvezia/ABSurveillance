<?php
require_once 'koneksic.php';

try{
$sql = 'SELECT * FROM `user_info`';
$q = $database_connection -> query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

?>