<?php
require "session.php";
require "../conn.php";

$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>