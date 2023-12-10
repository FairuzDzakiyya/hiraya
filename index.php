<?php 
    require "conn.php";
    $queryProduk = mysqli_query($koneksi, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiranya</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="css/cascading.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center">
            <img src="img/image/Hiranya.png" alt="" class="col-3">
            <p>Style Elevated, Comfort Defined</p>
        </div>
    </div>

    <!-- about -->
        <div class="container-fluid content py-5">
            <div class="container text-center text-white">
                <h3>Tentang Kami</h3>
                <p class="fs-6 mt-3">Jelajahi gaya Anda dengan koleksi baju terlengkap hanya di Hiranya! 
                    Temukan berbagai pilihan fashion terkini yang sesuai dengan selera Anda. Dari gaya kasual hingga formal, 
                    kami menyajikan ragam desain eksklusif untuk menonjolkan kepribadian Anda. 
                    Dapatkan pengalaman berbelanja yang tak terlupakan dengan harga terbaik dan kualitas premium. 
                    Pilihlah dari berbagai warna, pola, dan ukuran yang cocok untuk setiap kesempatan. 
                    Jadilah trendsetter dengan gaya unik Anda! Kunjungi toko kami sekarang dan temukan kepuasan dalam berbelanja baju berkualitas tinggi dengan banyak pilihan di Hiranya.</p>
                <div class="search pt-5">
                    <h5>Mau mencari barang lain? cari disini!</h5>
                <div class="col-md-6 offset-md-3">
                    <form method="get" action="produk.php">
                        <div class="input-group text-center">
                            <input type="text" name="search" placeholder="Search" class="form-control">
                            <button type="submit" class="btn wrna text-white">Telusuri</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

    <!-- kategori baju -->
        <div class="container-fluid main py-5">
            <div class="container text-center">
                <h3>Kategori Baju</h3>

                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Pakaian Pria">Pakaian Pria</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Pakaian Wanita">Pakaian Wanita</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-celana d-flex justify-content-center align-items-center">
                          <h4 class="text-white">Bawahan <a class="no-decoration" href="produk.php?kategori=Bawahan Pria">Pria</a> dan <a class="no-decoration" href="produk.php?kategori=Bawahan Wanita">Wanita</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-topi d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Topi">Topi</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-hoodie d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Hoodie">Hoodie</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-totebag d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Totebag">Tote Bag</a></h4>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- produk -->
        <div class="container-fluid">
            <div class="container text-center">
                <h3>Produk</h3>

                <div class="row mt-5">
                    <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="image-box">
                            <img src="img/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-little"><?php echo $data['nama']; ?></h5>
                                <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                                <p class="card-text text-harga">Rp. <?php echo $data['harga']; ?></p>
                                <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna text-white">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <a href="produk.php" class="btn btn-outline-warning mt-3 p-3 mb-3">See More</a>
            </div>

     <!-- keterangan lanjut -->
    <?php require "ket.php"; ?>
    
     <!-- footer -->
     <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="font/js/all.min.js"></script>
</body>
</html>