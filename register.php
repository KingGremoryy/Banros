<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Form Login</title>
</head>
<body>
    <!-- kelas logo di atas -->
        <div class="image">
    <!-- Logo-->
        <center><img src="LOGO BANRES NEW.png" style="width: 275px;" ></center>
        </div>
    <!-- Kotak bagian tengah -->
        <div class="container">
    <!-- Judul di container --> 
    <form action="" method="POST">   
         <h2>FORM REGISTER</h2>
    <!-- tiga kotak di dalam container -->
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" placeholder="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <input type="email" placeholder="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="password" id="password" name="password" required>
            </div>
    <!-- kotak tombol login -->
            <div class="form-group">
                <button type="submit" name="submit" onclick="return confirm('Apakah Anda Yakin Untuk Registrasi?')">Daftar</button>
            </div>
    <!-- teks bagian bawah -->    
            <div class="footer"><p style="color: white;">Sudah punya akun? <a href="login.php" style="color: #2FCD48;">Silahkan Login</a></p></div>
        </form>
    </div>
</form>

<?php

function banros($data) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
    
    }

    require 'koneksi.php';

    //Jika tombol register di tekan
    if ( isset($_POST["submit"])) {

        if ( banros($_POST) > 0) {
            echo "<script>
            alert('Registrasi Berhasil !');
            document.location.href = 'register.php';
            </script>
            ";
        }
    }
    
    
?>

</body>
</html>