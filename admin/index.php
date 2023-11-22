<?php
    require "session.php";
    require "../conn.php";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiranya</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/fontawesome.min.css">
</head>

<style>
  .kotak {
    border: solid;
  }

  .summary-kategori {
    background-color: #FFD233;
    border-radius: 15 px;
  }

  .no-decoration {
    text-decoration: none;
  }

.no-decoration:hover {
  color: blue;
}

.summary-produk {
  background-color: #B27984;
  border-radius: 15px;
}
</style>

<body>
  <?php require "navbar.php"; ?>
  <div class="container mt-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <i class="fas fa-home"></i>  Home
      </li>
    </ol>
  </nav>
      <h2>Halo <?php echo $_SESSION['username']; ?></h2>

      <div class="container mt-5"></div>
      <div class="row">
        <div class="col-lg-4">
          <div class="summary-kategori p-3">
            <div class="row">
              <div class="col-6">
                <i class="fas fa-align-justify fa-7x text-black-50"></i>
              </div>
              <div class="col-6 text-white">
                <h3 class="fs-2" >kategori</h3>
                <p class="fs-4" >4 kategori</p>
                <p><a href="../page/rok.php" class="text-white no-decoration">Lihat Detail</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 summary-produk p-3">
            <div class="row">
              <div class="col-6">
                <i class="fas fa-box fa-7x text-black-50"></i>
              </div>
              <div class="col-6 text-white">
                <h3 class="fs-2" >produk</h3>
                <p class="fs-4" >4 produk</p>
                <p><a href="../page/rok.php" class="text-white no-decoration">Lihat Detail</a></p>
              </div>
            </div>
        </div>
      </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../font/js/all.min.js"></script>
</body>
</html>