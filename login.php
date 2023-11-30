<?php
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/login.css">
    <title>Form Login</title>
</head>
<body>
    <!-- kelas logo di atas -->
        <div class="image">
    <!-- logo -->
        <center><img src="LOGO BANRES NEW.png" style="width: 275px;"></center>
        </div>
        <form action="" method="POST">
    <!-- Kotak bagian tengah -->
        <div class="container">
         <!-- Judul di container -->
            <h2>FORM LOGIN</h2>
    <!-- tiga kotak di dalam container -->
            <div class="form-group">
                <input type="text" placeholder="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="password" id="password" name="password" required>
            </div>
    <!-- kotak tombol login -->
            <div class="form-group">
                <button type="submit" name="submit" onclick="return confirm('Apakah Anda Yakin Untuk Login?')">Login</button>
            </div>
    <!-- teks bagian bawah -->    
            <div class="footer"><p style="color: white;">Belum punya akun? <a href="register.php" style="color: #2FCD48;">Register Sekarang</a></p></div>
        </form>
    </div>

    <!-- kode php untuk menyambungkan database ke login -->
    <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $qry = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = md5('$password') ");
            $cek = mysqli_num_rows($qry);
            if ($cek==1) {
                $_SESSION['userweb']=$username;
                header ("location:halaman utama king.php");
                exit;
        }
    }
    ?>
</body>
</html>
