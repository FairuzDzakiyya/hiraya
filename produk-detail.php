<?php 
    require "conn.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryProduk = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama='$nama'");
    $produk = mysqli_fetch_array($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="css/cascading.css">
</head>
<body>
    <?php require "navbar.php"; ?> 
    <!-- detail -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="img/<?php echo $produk['foto']; ?>" class="w-100" alt="">
                </div>
                <div class="col-md-6 offset-md-1">
                    <h1><?php echo $produk['nama']; ?></h1>
                    <p class="fs-4">
                        <?php echo $produk['detail']; ?></p>
                    <p class="text-harga">
                        <?php echo $produk['harga']; ?>
                    </p>
                    <p class="fs-5">Status Ketersediaan : <strong><?php echo $produk['ketersediaan_stok'] ?></strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="font/js/all.min.js"></script>
</body>
</html>