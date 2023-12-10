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
        <div class="container-fluid content">
            <div class="container d-flex">
                <p class="teks text-center text-white">Jelajahi gaya Anda dengan koleksi baju terlengkap hanya di Hiranya! 
                    Temukan berbagai pilihan fashion terkini yang sesuai dengan selera Anda. Dari gaya kasual hingga formal, 
                    kami menyajikan ragam desain eksklusif untuk menonjolkan kepribadian Anda. 
                    Dapatkan pengalaman berbelanja yang tak terlupakan dengan harga terbaik dan kualitas premium. 
                    Pilihlah dari berbagai warna, pola, dan ukuran yang cocok untuk setiap kesempatan. 
                    Jadilah trendsetter dengan gaya unik Anda! Kunjungi toko kami sekarang dan temukan kepuasan dalam berbelanja baju berkualitas tinggi dengan banyak pilihan di Hiranya.</p>
            </div>
        </div>
        <div class="search-bar text-center">
            <div class="search">
                    <h5>wanna search some stuff? search here!</h5>
                <div class="col-md-6 offset-md-3">
                    <form method="get" action="admin/produk.php">
                        <div class="input-group text-center">
                            <input type="text" name="search" placeholder="Search" class="form-control" aria >
                            <button type="submit" class="btn wrna text-white">Telusuri</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- kategori baju -->
        <div class="container-fluid main py-5">
            <div class="container text-center">
                <h3>Kategori Baju</h3>

                <div class="row mt-4">
                    <div class="col-4">
                        <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Pakaian Pria</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Pakaian Wanita</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="highlighted-kategori kategori-celana d-flex justify-content-center align-items-center">
                          <h4 class="text-white">Bawahan Pria dan Wanita</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <div class="highlighted-kategori kategori-topi d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Topi</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="highlighted-kategori kategori-hoodie d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Hoodie</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="highlighted-kategori kategori-totebag d-flex justify-content-center align-items-center">
                            <h4 class="text-white">Tote Bag</h4>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="font/js/all.min.js"></script>
</body>
</html>