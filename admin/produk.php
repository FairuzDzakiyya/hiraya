<?php
    require "session.php";
    require "../conn.php";

    $query = mysqli_query($koneksi, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($query);

    $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/fontawesome.min.css">
</head>

<style>
    .no-decoration {
        text-decoration: none;
    }

    form div{
        margin-bottom: 10px;
    }
</style>

<body>
<?php require "navbar.php"; ?>
    <div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <a href="../admin/index.php" class="no-decoration text-muted">
            <li class="breadcrumb-item active" aria-current="page">
            <i class="fas fa-home"></i>  Home
                </a></li>
        <li class="breadcrumb-item active" aria-current="page">
            Produk
        </li>
        </ol>
    </nav> 
    
    <!-- tambah produk -->
    <div class="my-5 col-12 col-md-6">
        <h3>Tambah Produk</h3>

        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" autocomplete="off">
            </div>
            <div>
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control"> 
                    <option value="">Pilih Satu</option>
                    <?php   
                        while($data=mysqli_fetch_array($queryKategori)){
                    ?>
                        <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div>
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
            <div>
                <label for="detail">Detail</label>
                <textarea name="detail" id="detail" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div>
                <label for="ketersediaan_stok">Ketersediaan Stok</label>
                <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="habis">Habis</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </div>
        </form>
                        
        <?php 
            if(isset($_POST['simpan'])){
                $nama = htmlspecialchars($_POST['nama']);
                $kategori = htmlspecialchars($_POST['kategori']);
                $harga = htmlspecialchars($_POST['harga']);

                if($nama=='' || $kategori=='' || $harga==''){
        ?>
                    <div class="alert alert-warning mt-3" role="alert">
                        nama, kategori dan harga wajib diisi
                    </div>
        <?php
                }
            }
        ?>
    </div>

    <div class="mt-3">
        <h2>List Produk</h2>

        <div class="table-responsive mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Ketersediaan Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($jumlahProduk==0){
                    ?>
                    <tr>
                        <td colspan=5 class="text-center">Data Produk tidak tersedia</td>
                    </tr>
                    <?php
                        }
                        else{
                            $jumlah = 1;
                            while($data=mysqli_fetch_array($query)){
                    ?>
                            <tr>
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['kategori_id']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td><?php echo $data['ketersediaan_stok']; ?></td>
                            </tr>
                    <?php
                            $jumlah++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../font/js/all.min.js"></script>
</body>
</html>