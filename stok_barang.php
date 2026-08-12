<?php
include "koneksi.php";

// Proses hapus
if (isset($_GET['hapus'])) {
    $id_hapus = (int)$_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM tmbbrg WHERE id_barang='$id_hapus'");
    header("Location: stok_barang.php");
    exit;
}

$result = mysqli_query($koneksi, "SELECT * FROM tmbbrg");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Stok Barang</title>
    <style>
        body {
            background: #0f0f0f;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            color: #aaa;
            font-size: 14px;
            margin-bottom: 24px;
        }

        /* Grid kartu */
        .card-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background: #1a1a1a;
            border-radius: 15px;
            width: 260px;
            padding: 15px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(255,255,255,0.05);
            border: 1px solid #2a2a2a;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(255,215,0,0.2);
            border-color: gold;
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card .price {
            color: gold;
            font-size: 18px;
            font-weight: bold;
            margin: 6px 0;
        }

        .card .nama {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .card .seri {
            font-size: 12px;
            color: #888;
            margin-bottom: 6px;
        }

        .card .rating {
            color: gold;
            font-size: 13px;
            margin-bottom: 6px;
        }

        .card .deskripsi {
            font-size: 12px;
            color: #ccc;
            line-height: 1.5;
            margin-bottom: 12px;
        }

        /* QTY */
        .qty-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 12px;
            gap: 0;
        }

        .qty-box button {
            width: 34px;
            height: 34px;
            border: none;
            background: gold;
            color: black;
            font-weight: bold;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        .qty-box button:hover { background: #f0d060; }

        .qty-box input {
            width: 50px;
            text-align: center;
            margin: 0 8px;
            padding: 5px;
            border-radius: 8px;
            border: 1px solid #444;
            background: #111;
            color: white;
            font-size: 14px;
        }

        /* Tombol aksi */
        .action-row {
            display: flex;
            gap: 8px;
            margin-bottom: 8px;
        }

        .btn-cart {
            flex: 1;
            height: 38px;
            border: none;
            background: #2a2a2a;
            color: gold;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            border: 1px solid #444;
            transition: 0.2s;
        }

        .btn-cart:hover { background: #3a3a3a; border-color: gold; }

        .btn-buy {
            flex: 3;
            height: 38px;
            border: none;
            background: linear-gradient(45deg, gold, orange);
            color: black;
            font-weight: bold;
            font-size: 13px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-buy:hover { opacity: 0.85; }

        /* Tombol hapus */
        .btn-hapus {
            width: 100%;
            height: 36px;
            border: 1px solid #c0392b;
            background: transparent;
            color: #e74c3c;
            font-size: 13px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 4px;
        }

        .btn-hapus:hover {
            background: #c0392b;
            color: white;
        }

        /* Kosong */
        .empty {
            text-align: center;
            padding: 60px;
            color: #555;
            font-size: 16px;
        }
    </style>
</head>
<body>

<h2>🛒 Stok Barang</h2>
<p class="subtitle">Selamat berbelanja di toko kami!</p>

<div class="card-grid">

<?php if (mysqli_num_rows($result) == 0): ?>
    <div class="empty">📦 Belum ada produk. Silakan tambah barang terlebih dahulu.</div>
<?php else: ?>

<?php while($row = mysqli_fetch_assoc($result)): ?>

<div class="card">
    <img src="uploads/<?php echo htmlspecialchars($row['foto']); ?>"
         onerror="this.src='baju1.jpg'"
         alt="<?php echo htmlspecialchars($row['nama_barang']); ?>">

    <div class="price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></div>
    <div class="nama"><?php echo htmlspecialchars($row['nama_barang']); ?></div>
    <div class="seri">Seri: <?php echo htmlspecialchars($row['seri']); ?></div>
    <div class="rating">★★★★★</div>
    <div class="deskripsi"><?php echo htmlspecialchars($row['deskripsi']); ?></div>

    <!-- QTY -->
    <div class="qty-box">
        <button type="button" onclick="kurang(<?php echo $row['id_barang']; ?>)">−</button>
        <input type="number" id="qty_<?php echo $row['id_barang']; ?>" value="1" min="1">
        <button type="button" onclick="tambah(<?php echo $row['id_barang']; ?>)">+</button>
    </div>

    <!-- BELI & CART -->
    <div class="action-row">
        <form action="beli.php" method="get" style="flex:1; display:contents;">
            <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
            <input type="hidden" name="jumlah" id="cart_qty_<?php echo $row['id_barang']; ?>" value="1">
            <button class="btn-cart" type="submit" onclick="setQty(<?php echo $row['id_barang']; ?>)">🛒</button>
        </form>
        <form action="beli.php" method="get" style="flex:3; display:contents;">
            <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
            <input type="hidden" name="jumlah" id="buy_qty_<?php echo $row['id_barang']; ?>" value="1">
            <button class="btn-buy" type="submit" onclick="setQty(<?php echo $row['id_barang']; ?>)">Beli Sekarang</button>
        </form>
    </div>

    <!-- HAPUS -->
    <button class="btn-hapus"
        onclick="if(confirm('Yakin hapus produk ini?')) window.location='stok_barang.php?hapus=<?php echo $row['id_barang']; ?>'">
        🗑️ Hapus Produk
    </button>
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>

<script>
function tambah(id) {
    let qty = document.getElementById('qty_' + id);
    qty.value = parseInt(qty.value) + 1;
}
function kurang(id) {
    let qty = document.getElementById('qty_' + id);
    if (qty.value > 1) qty.value = parseInt(qty.value) - 1;
}
function setQty(id) {
    let val = document.getElementById('qty_' + id).value;
    document.getElementById('cart_qty_' + id).value = val;
    document.getElementById('buy_qty_' + id).value = val;
}
</script>

</body>
</html>
