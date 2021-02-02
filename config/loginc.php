<?php 
session_start();
require_once 'koneksic.php'; // panggil perintah koneksi database 

if(!isset($_SESSION['urName'] )== 0) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: ../Login.php');
}

if(isset($_POST['login'])) { // mengecek apakah form pada login.php variabelnya ada isinya
    $username = $_POST['urName']; // isi varibel dengan mengambil data username pada form
    $password = $_POST['uPW'];
    echo $username;
    echo $password; // isi variabel dengan mengambil data password pada form

    try {
        $sql = "SELECT * FROM `user_info` WHERE urName = ? AND uPW = SHA1(?)"; // buat queri select
        $q = $database_connection->prepare($sql);
        $q->execute([$username, $password]); // jalankan query

        $count = $q->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['urName'] = $username; // set sesion dengan variabel username
            header("Location: ../Main.php"); // lempar variabel ke tampilan index.php
            return;
        }else{
            echo "Anda tidak dapat login";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>