<?php
    require "session.php";
    require "../conn.php";

    $query = mysqli_query($koneksi, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($query);

    $queryKategori = mysqli_query($koneksi,"SELECT * FROM kategori");
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
        List Produk
      </li>
    </ol>
  </nav>

        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required>
                </div>
                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="">Pilih</option>
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
                    <input type="number" class="form-control" name="harga" required>
                </div>
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name ="foto" id="foto" class="form-control">
                </div>
                <div>
                    <label for="detail">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div>
                    <label for="ketersediaan_stok">ketersediaan_stok</label>
                    <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                        <option value="tersedia">tersedia</option>
                        <option value="habis">habis</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

            <?php
                if(isset($_POST['simpan'])){
                    $nama = htmlspecialchars($_POST['nama']);
                    $kategori = htmlspecialchars($_POST['kategori']);
                    $harga = htmlspecialchars($_POST['harga']);
                    $detail = htmlspecialchars($_POST['detial']);
                    $ketersediaan_stok = htmlspecialchars($_POST['ketersediaan_stok']);

                    $target_dir = "../image/";
                    $nama_file = basename($_FILES["foto"]["name"]);
                    $target_file = $target_dir . $nama_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $image_size = $_FILES["foto"]["size"];
                    $random_name = generateRandomString(20);
                    $new_name = $random_name . "." . $imageFileType;

                    if($nama=='' || $kategori=='' || $harga==''){
            ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama, kategori dan harga wajib diisi
                        </div>
            <?php
                    }
                    else{
                        if($nama_file!=''){
                            if($image_size > 1000000){
            ?>
                                <div class="alert alert-warning mt-3" role="alert">
                                    File tidak boleh lebih dari 500 kb
                                </div>
            <?php
                            }
                            else{
                                if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif'){
            ?>
                                <div class="alert alert-warning mt-3" role="alert">
                                    File wajib bertipe jpg, png atau gif!
                                </div>
            <?php
                                }
                                else{
                                    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);
                            }
                        }
                    }

                    $queryTambah = mysqli_query($koneksi, "INSERT INTO produk (kategori_id, nama, harga, 
                    foto, detail, ketersediaan_stok) VALUES ('$kategori', '$nama', '$harga', 
                    '$new_name', '$detail', '$ketersediaan_stok')");

                    if($queryTambah){
            ?>
                    <div class="alert alert-primary mt-3" role="alert">
                        Produk Berhasil Disimpan
                    </div>

                    <meta http-equiv="refresh" content="2; url=produk.php" />
            <?php
                    }
                    else{
                        echo mysqli_error($koneksi);
                    }
                }
            }
            ?>
        </div>

        <div class="mt-3"></div>
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
                     if ($jumlahProduk==0) {
                    ?>
                        <tr>
                            <td colspan=5 class="text-center">Data produk tidak tersedia</td>
                        </tr>
                    <?php 
                     }
                     else{
                        $jumlah = 1;
                        while($data = mysqli_fetch_array($query)){
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