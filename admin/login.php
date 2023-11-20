<?php 
    require_once('../conn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<style>
    .main{
        height: 100vh;
    }

    .box {
        width: 500px;
        height: 300px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="box p-5 shadow">
            <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" 
                    id="username">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" 
                    id="email">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" 
                    id="password">
                </div>
                <div>
                    <button class="btn btn-success form-control mt-3" type="submit" name="loginbtn">Login</button>
                </div>
            </form>
        </div>
        <div class="mt-3">
            <?php 
            if(isset($_POST['loginbtn'])){
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);

                $query = "UPDATE user SET username = '$username', email = '$email', password = '$password' WHERE id = '$id'";
                $result = mysqli_query($koneksi, $query);
            
                // cek apabila data berhasil diupdate ke database
                if (!$result) {
                    echo "<br>Data gagal dimasukan ke tabel. Error : " . mysqli_error($koneksi);
                }
            
                // tampilkan alert dan redirect ke halaman daftar-siswa.php
                echo "<script>
                alert('Data berhasil dimasukan ke database!');
                window.location.href = 'login.php' </script>";
            
                mysqli_close($koneksi);
            }
            ?>
        </div>
    </div>
</body>
</html>