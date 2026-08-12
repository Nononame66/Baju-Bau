<?php
include "koneksi.php";

// Hapus data lama dan reset auto increment
mysqli_query($koneksi, "TRUNCATE TABLE tmbbrg");

// Insert 3 data barang sesuai card di index.php
$sql = "INSERT INTO tmbbrg (seri, nama_barang, jenis, harga, deskripsi, foto) VALUES
('BK-001', 'Baju Koko', 'Koko', 150000, 'Bahan katun halus, motif batik modern, cocok untuk acara formal dan casual', 'baju1.jpg'),
('BR-002', 'Baju Running', 'Olahraga', 200000, 'Bahan cotton combed 30s, nyaman dipakai, tersedia berbagai warna', 'baju2.jpg'),
('CS-003', 'Costum Supardi', 'Fashion', 350000, 'Bahan denim premium, desain modern, tahan lama dan fashionable', 'baju3.jpg')";

if (mysqli_query($koneksi, $sql)) {
    echo "<h2 style='font-family:sans-serif; color:green;'>✅ Berhasil! 3 data barang berhasil ditambahkan ke database.</h2>";
    echo "<a href='index.php' style='font-family:sans-serif;'>← Kembali ke Toko</a>";
} else {
    echo "<h2 style='font-family:sans-serif; color:red;'>❌ Gagal: " . mysqli_error($koneksi) . "</h2>";
}
?>
