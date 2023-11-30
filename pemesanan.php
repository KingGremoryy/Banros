<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/pemesanann.css">

</head>
<body>

<div class="container">

    <form>
        <h3 class="title">HALAMAN PEMESANAN</h3>
            <form method="POST" action="pemesanan.php" >
                <div class="Box">
                    <input type="text" name="jenislapangan" placeholder="JENIS LAPANGAN">
                </div>
                <div class="Box">
                    <input type="text" name="hargasewa" placeholder="HARGA SEWA">
                </div>
                <div class="Box">
                    <input type="time" name="jammain" placeholder="JAM MAIN">
                </div>
                <div class="Box">
                    <input type="text" name="atasnama" placeholder="ATAS NAMA">
                </div>
                <div class="Box">
                    <input type="text" name="nomorhp" placeholder="NOMOR HP">
                </div>
                <div class="Box">
                    <input type="date" name="tanggal" placeholder="TANGGAL">
                </div>

                <input type="submit" value="RESERVASI" class="submit-btn" onclick="location.href='riwayat king.php'" >
                <input type="submit" value="KEMBALI" class="submit-btn-1">
            </form>

    </form>

</div>    
    
</body>
</html>