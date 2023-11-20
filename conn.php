<?php
$servername = "localhost";
$database = "olshop";
$username = "root";
$password = "";


$koneksi = mysqli_connect($servername, $username, $password, $database);

if(!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

?>