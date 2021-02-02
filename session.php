<?php
session_start();
if (isset($_SESSION['urName']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: Login.php');
}
?>