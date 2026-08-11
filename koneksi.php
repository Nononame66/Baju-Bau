<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ecommers10"; //sesuaikan nama database nya

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

session_start(); // WAJIB
?>
