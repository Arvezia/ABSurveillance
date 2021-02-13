<?php 
session_start();
require_once 'koneksic.php'; 
if(!isset($_SESSION['username'] )== 0) { 
    header('Location: ../Default.php');
}

if(isset($_POST['login'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    echo $username;
    echo $password; 
    $test = SHA1($password);

    try {
        $sql = "SELECT * FROM `user_info` WHERE username = ? AND password = SHA1(?)";
        $q = $database_connection->prepare($sql);
        $q->execute([$username, $password]); 

        $count = $q->rowCount(); 
        if($count == 1) {
            $_SESSION['username'] = $username;
            header("Location: ../Main.php");
            return;
        }else{
            echo "Anda tidak dapat login";
            echo $test;
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>