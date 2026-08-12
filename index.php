<!DOCTYPE html>
<html>
<head>
    <title>Web Kasir Ecommers</title>
    <style>
        html, body { /* menatur layar supaya website bisa penuh */
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: black;  /* ini untuk latar belakang hitam */
            color: white;  /* optional biar teks tetap kelihatan */
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }

        th, td { /* Mengatur tinggi tabel */
            border: 1px solid black;
            text-align: center;
        }

        /* Mengatur lebar kolom 1 */
        th.kecil, td.kecil {
            width: 100px;
        }

        /* Mengatur tinggi baris */
        tr.baris1 td {
            height: 5%; /* baris pertama: 40% dari tinggi tabel */
        }

        tr.baris2 td {
            height: 10%; /* baris kedua: 30% dari tinggi tabel */
        }

        tr.baris3 td {
            height: 85%; /* baris ketiga: 30% dari tinggi tabel */
        }

        /* Layout teks kiri-kanan di dalam sel */
        .cell-flex {
            display: flex;
            justify-content: space-between; /* pisahkan kiri & kanan */
            align-items: center; /* vertikal tengah */
            height: 100%;
            padding: 0 5px;
        }

        /* Bungkus teks kiri dan kanan */
        .left-text, .right-text {
            display: flex;
            flex-direction: column; /* dua teks ditumpuk */
            flex-direction: column; /* dua teks ditumpuk */
            gap: 2px; /* jarak antar teks */
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .menu a:hover {
            background-color: gold;
            color: black;
        }

        .menu a.active {
            background-color: gold;
            color: black;
        }
    </style>
</head>
<body>

<?php
echo "<table border='1'>";
echo "<tr class='baris1'>";
    echo "<th class='kecil1'>";
        echo "<div class='cell-flex'>";
            echo "<div class='left-text'>";
                echo "<span>JUAL BATUBATA</span>";
            echo "</div>";
            echo "<div class='right-text'>";
                echo "<span>TLP +6287367363431 | Mail :SUMANTO@gail.com</span>";
            echo "</div>";
        echo "</div>";
    echo "</th>";
echo "</tr>";

echo "<tr class='baris2'>";
    echo "<td class='kecil1'>";
        echo "<div class='cell-flex'>";

            echo "<!-- kiri: logo + nama -->";
            echo "<div class='left-text' style='display:flex; align-items:center; gap:10px;'>";
                echo "<img src='logo.jpg' alt='Logo' width='100' height='80'>";
            echo "</div>";

            echo "<!-- tengah: menu -->";
            echo "<div class='menu'>";
                echo "<a href='home.php'>Home</a> |";
                echo "<a href='profil.php'>Profil</a> |";
                echo "<a href='stok_barang.php'>Stok Barang</a> |";
                echo "<a href='tambah.php'>Tambah Penjualan</a> |";
                echo "<a href='kontak.php'>Kontak</a> |";
                echo "<!-- tambahan -->";
            echo "</div>";

            echo "<!-- kanan: search -->";
            echo "<div class='search'>";
                echo "<form action='search.php' method='get'>";
                    echo "<input type='text' name='q' placeholder='Cari...'>";
                    echo "<input type='submit' value='Cari!'>";
                echo "</form>";
            echo "</div>";

        echo "</div>";

        echo "</td>";
echo "</tr>";

echo "<tr class='baris3'>";
    echo "<td class='kecil1' colspan='3'>";
        echo "<div class='row-cards' style='display:flex; justify-content:space-around; gap:20px;'>";

            echo "<!-- Card 1 -->";
            echo "<div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center;'>";
                echo "<img src='baju1.jpg' alt='Baju 1' style='width:100%; height:auto;'>";
                echo "<h2>Rp 150.000</h2>";
                echo "<h3>Baju Koko</h3>";
                echo "<p>* * * * *</p>";
                echo "<p>Bahan katun halus, motif batik modern, cocok untuk acara formal dan casual</p>";
                echo "<a href='beli.php?id_barang=1&jumlah=1'>";
                    echo "<button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white;'>";
                        echo "BELI";
                    echo "</button>";
                echo "</a>";
            echo "</div>";

            echo "<!-- Card 2 -->";
            echo "<div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center;'>";
                echo "<img src='baju2.jpg' alt='Baju 2' style='width:100%; height:auto;'>";
                echo "<h2>Rp 200.000</h2>";
                echo "<h3>Baju Running</h3>";
                echo "<p>* * * * *</p>";
                echo "<p>Bahan cotton combed 30s, nyaman dipakai, tersedia berbagai warna</p>";
                echo "<a href='beli.php?id_barang=2&jumlah=1'>";
                    echo "<button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white;'>";
                        echo "BELI";
                    echo "</button>";
                echo "</a>";
            echo "</div>";

            echo "<!-- Card 3 -->";
            echo "<div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center;'>";
                echo "<img src='baju3.jpg' alt='Baju 3' style='width:100%; height:auto;'>";
                echo "<h2>Rp 350.000</h2>";
                echo "<h3>Costum Supardi</h3>";
                echo "<p>* * * * *</p>";
                echo "<p>Bahan denim premium, desain modern, tahan lama dan fashionable</p>";
                echo "<a href='beli.php?id_barang=3&jumlah=1'>";
                    echo "<button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white;'>";
                        echo "BELI";
                    echo "</button>";
                echo "</a>";
            echo "</div>";

        echo "</div>";
    echo "</td>";
echo "</tr>";

echo "</table>";
?>

</body>
</html>
