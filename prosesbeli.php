<?php
include "koneksi.php";

// ambil data dari form
$no_faktur = $_POST['no_faktur'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama_pembeli'];
$alamat = $_POST['alamat'];
$ktp = $_POST['ktp'];

$id = $_POST['id_barang'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];

// ambil data barang
$data = mysqli_query($koneksi, "SELECT * FROM tmbbrg WHERE id_barang='$id'");
$row = mysqli_fetch_assoc($data);

// (OPSIONAL) simpan ke database
mysqli_query($koneksi, "INSERT INTO transaksi 
(no_faktur,tanggal,nama_pembeli,alamat,ktp,id_barang,jumlah,total)
VALUES
('$no_faktur','$tanggal','$nama','$alamat','$ktp','$id','$jumlah','$total')
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: monospace;
            background:#f5f5f5;
        }

        .struk {
            width:300px;
            background:white;
            padding:15px;
            margin:30px auto;
            border:1px solid #ccc;
        }

        .center {
            text-align:center;
        }

        hr {
            border:1px dashed #000;
        }

        button {
            display:block;
            margin:10px auto;
            padding:8px 15px;
            cursor:pointer;
        }

        /* PRINT STYLE */
        @media print {
            button {
                display:none;
            }
            body {
                background:white;
            }
        }
    </style>
</head>
<body>

<div class="struk">

    <div class="center">
        <h3>TOKO KENDARAAN</h3>
        <p>Terima Kasih 🙏</p>
    </div>

    <hr>

    <p>No Faktur: <?php echo $no_faktur; ?></p>
    <p>Tanggal: <?php echo $tanggal; ?></p>

    <hr>

    <p>Nama: <?php echo $nama; ?></p>
    <p>KTP: <?php echo $ktp; ?></p>

    <hr>

    <p><?php echo $row['nama_barang']; ?></p>
    <p>Harga: Rp <?php echo number_format($row['harga'],0,',','.'); ?></p>
    <p>Jumlah: <?php echo $jumlah; ?></p>

    <hr>

    <p><b>Total:</b></p>
    <h3>Rp <?php echo number_format($total,0,',','.'); ?></h3>

    <hr>

    <div class="center">
        <p>Barang sudah dibayar ✅</p>
    </div>

</div>

<button onclick="window.print()">🖨️ Cetak Struk</button>

</body>
</html>
