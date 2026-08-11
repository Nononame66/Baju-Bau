<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Batubata — Toko Fashion Terpercaya</title>
    <meta name="description" content="Temukan produk fashion berkualitas tinggi dengan harga terjangkau di Jual Batubata. Baju Koko, Baju Running, dan Custom Apparel pilihan terbaik.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --gold: #D4AF37;
            --gold-light: #F0D060;
            --gold-dark: #A88820;
            --bg-dark: #0A0A0A;
            --bg-card: #111111;
            --border: #2a2a2a;
            --text-muted: #888;
        }

        html, body {
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Inter', sans-serif;
            min-height: 100%;
        }

        /* ===== TOP BAR ===== */
        .header-top {
            background: #050505;
            border-bottom: 1px solid var(--border);
            padding: 8px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: var(--text-muted);
        }
        .header-top .contact-info { color: var(--gold); font-weight: 500; }

        /* ===== NAVBAR ===== */
        .navbar {
            background: #0d0d0d;
            border-bottom: 1px solid var(--border);
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo-area { display: flex; align-items: center; gap: 12px; }
        .logo-area img {
            width: 50px; height: 40px; object-fit: cover;
            border-radius: 6px; border: 1px solid var(--gold-dark);
        }
        .logo-area .brand-name {
            font-size: 16px; font-weight: 700;
            letter-spacing: 1px; color: var(--gold);
        }
        .menu { display: flex; align-items: center; gap: 4px; }
        .menu a {
            color: #ccc; text-decoration: none;
            padding: 8px 16px; border-radius: 6px;
            font-size: 13px; font-weight: 500;
            transition: all 0.25s ease; letter-spacing: 0.3px;
        }
        .menu a:hover, .menu a.active { background: var(--gold); color: #000; }

        .search-area form { display: flex; gap: 6px; }
        .search-area input[type="text"] {
            background: #1a1a1a; border: 1px solid var(--border);
            border-radius: 6px; padding: 7px 14px; color: white;
            font-size: 13px; outline: none; width: 180px;
            transition: border-color 0.25s;
        }
        .search-area input[type="text"]:focus { border-color: var(--gold); }
        .search-area input[type="submit"] {
            background: var(--gold); color: #000; border: none;
            border-radius: 6px; padding: 7px 16px;
            font-size: 13px; font-weight: 600; cursor: pointer;
            transition: background 0.25s;
        }
        .search-area input[type="submit"]:hover { background: var(--gold-light); }

        /* ===== HERO ===== */
        .hero {
            background: linear-gradient(135deg, #0a0a0a 0%, #111 50%, #0a0a0a 100%);
            border-bottom: 1px solid var(--border);
            padding: 80px 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 48px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(212,175,55,0.06) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero-content { max-width: 520px; position: relative; z-index: 1; }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(212,175,55,0.12);
            color: var(--gold);
            border: 1px solid rgba(212,175,55,0.3);
            border-radius: 20px;
            padding: 5px 16px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .hero h1 {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }
        .hero h1 span { color: var(--gold); }
        .hero p {
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 32px;
        }
        .hero-buttons { display: flex; gap: 14px; }
        .btn-primary {
            background: var(--gold);
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 13px 28px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.25s;
            display: inline-block;
        }
        .btn-primary:hover { background: var(--gold-light); transform: translateY(-2px); }
        .btn-outline {
            background: transparent;
            color: white;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 13px 28px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.25s;
            display: inline-block;
        }
        .btn-outline:hover { border-color: var(--gold); color: var(--gold); }

        .hero-image { position: relative; z-index: 1; }
        .hero-image img {
            width: 320px; height: 320px;
            object-fit: cover;
            border-radius: 20px;
            border: 2px solid var(--border);
            box-shadow: 0 0 60px rgba(212,175,55,0.12);
        }

        /* ===== STATS STRIP ===== */
        .stats-strip {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-bottom: 1px solid var(--border);
        }
        .stat-item {
            padding: 28px 32px;
            border-right: 1px solid var(--border);
            text-align: center;
            transition: background 0.25s;
        }
        .stat-item:last-child { border-right: none; }
        .stat-item:hover { background: rgba(212,175,55,0.04); }
        .stat-number { font-size: 28px; font-weight: 800; color: var(--gold); }
        .stat-label { font-size: 13px; color: var(--text-muted); margin-top: 4px; }

        /* ===== SECTION ===== */
        .section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 64px 32px;
        }
        .section-header {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            margin-bottom: 36px;
        }
        .section-title { font-size: 24px; font-weight: 700; }
        .section-title span { color: var(--gold); }
        .section-link {
            color: var(--gold);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: opacity 0.2s;
        }
        .section-link:hover { opacity: 0.7; }

        /* ===== PRODUCT CARDS ===== */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .product-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .product-card:hover {
            border-color: var(--gold-dark);
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.5), 0 0 30px rgba(212,175,55,0.08);
        }
        .product-card .img-wrap {
            position: relative;
            overflow: hidden;
            height: 240px;
        }
        .product-card img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .product-card:hover img { transform: scale(1.05); }
        .product-card .badge {
            position: absolute;
            top: 12px; left: 12px;
            background: var(--gold);
            color: #000;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 12px;
            letter-spacing: 0.5px;
        }
        .product-card .card-body { padding: 20px; }
        .product-card .card-rating {
            color: var(--gold);
            font-size: 13px;
            margin-bottom: 6px;
            letter-spacing: 1px;
        }
        .product-card .card-name {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 6px;
        }
        .product-card .card-desc {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 16px;
        }
        .product-card .card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .product-card .price {
            font-size: 18px;
            font-weight: 800;
            color: var(--gold);
        }
        .btn-beli {
            background: transparent;
            color: var(--gold);
            border: 1px solid var(--gold-dark);
            border-radius: 8px;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.25s;
            display: inline-block;
        }
        .btn-beli:hover {
            background: var(--gold);
            color: #000;
        }

        /* ===== FEATURES ===== */
        .features-section {
            background: #0d0d0d;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
        }
        .feature-item {
            padding: 36px 28px;
            border-right: 1px solid var(--border);
            text-align: center;
            transition: background 0.25s;
        }
        .feature-item:last-child { border-right: none; }
        .feature-item:hover { background: rgba(212,175,55,0.04); }
        .feature-item .f-icon { font-size: 32px; margin-bottom: 12px; }
        .feature-item h3 { font-size: 14px; font-weight: 700; margin-bottom: 6px; }
        .feature-item p { font-size: 13px; color: var(--text-muted); line-height: 1.6; }

        /* ===== FOOTER ===== */
        .footer-main {
            background: #050505;
            border-top: 1px solid var(--border);
            padding: 48px 48px 32px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 48px;
            margin-bottom: 40px;
        }
        .footer-brand .brand { font-size: 18px; font-weight: 700; color: var(--gold); margin-bottom: 12px; }
        .footer-brand p { font-size: 14px; color: var(--text-muted); line-height: 1.7; }
        .footer-col h4 {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #aaa;
            margin-bottom: 16px;
        }
        .footer-col a {
            display: block;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 10px;
            transition: color 0.2s;
        }
        .footer-col a:hover { color: var(--gold); }
        .footer-bottom {
            border-top: 1px solid var(--border);
            padding-top: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: var(--text-muted);
        }
        .footer-bottom span { color: var(--gold); }
    </style>
</head>
<body>

<!-- Top Bar -->
<div class="header-top">
    <span>JUAL BATUBATA &mdash; Kualitas Terpercaya</span>
    <span class="contact-info">📞 +62 873-6736-3431 &nbsp;|&nbsp; ✉ SUMANTO@gmail.com</span>
</div>

<!-- Navbar -->
<nav class="navbar">
    <div class="logo-area">
        <img src="logo.jpg" alt="Logo Jual Batubata">
        <div class="brand-name">JUAL BATUBATA</div>
    </div>
    <div class="menu">
        <a href="home.php" class="active">HOME</a>
        <a href="profil.php">Profil</a>
        <a href="stok_barang.php">Stok Barang</a>
        <a href="tambah.php">Tambah Penjualan</a>
        <a href="kontak.php">Kontak</a>
    </div>
    <div class="search-area">
        <form action="search.php" method="get">
            <input type="text" name="q" placeholder="Cari produk...">
            <input type="submit" value="Cari">
        </form>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-badge">⭐ Terpercaya Sejak 2020</div>
        <h1>Fashion <span>Premium</span><br>Harga Terjangkau</h1>
        <p>Temukan koleksi pakaian berkualitas tinggi pilihan terbaik kami. Dari baju formal hingga casual — semua ada di sini dengan kualitas terjamin.</p>
        <div class="hero-buttons">
            <a href="stok_barang.php" class="btn-primary">🛍️ Belanja Sekarang</a>
            <a href="profil.php" class="btn-outline">Tentang Kami</a>
        </div>
    </div>
    <div class="hero-image">
        <img src="logo.jpg" alt="Koleksi Unggulan">
    </div>
</section>

<!-- Stats Strip -->
<div class="stats-strip">
    <div class="stat-item">
        <div class="stat-number">150+</div>
        <div class="stat-label">Produk Tersedia</div>
    </div>
    <div class="stat-item">
        <div class="stat-number">500+</div>
        <div class="stat-label">Pelanggan Puas</div>
    </div>
    <div class="stat-item">
        <div class="stat-number">1000+</div>
        <div class="stat-label">Order Selesai</div>
    </div>
    <div class="stat-item">
        <div class="stat-number">4.9⭐</div>
        <div class="stat-label">Rating Kepuasan</div>
    </div>
</div>

<!-- Products Section -->
<div class="section">
    <div class="section-header">
        <h2 class="section-title">Produk <span>Unggulan</span></h2>
        <a href="stok_barang.php" class="section-link">Lihat Semua →</a>
    </div>

    <div class="product-grid">

        <!-- Card 1 -->
        <div class="product-card">
            <div class="img-wrap">
                <img src="baju1.jpg" alt="Baju Koko">
                <div class="badge">TERLARIS</div>
            </div>
            <div class="card-body">
                <div class="card-rating">★★★★★</div>
                <div class="card-name">Baju Koko</div>
                <div class="card-desc">Bahan katun halus, motif batik modern, cocok untuk acara formal dan casual.</div>
                <div class="card-footer">
                    <div class="price">Rp 150.000</div>
                    <a href="beli.php" class="btn-beli">Beli</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="product-card">
            <div class="img-wrap">
                <img src="baju2.jpg" alt="Baju Running">
                <div class="badge">BARU</div>
            </div>
            <div class="card-body">
                <div class="card-rating">★★★★★</div>
                <div class="card-name">Baju Running</div>
                <div class="card-desc">Bahan cotton combed 30s, nyaman dipakai, tersedia berbagai warna pilihan.</div>
                <div class="card-footer">
                    <div class="price">Rp 200.000</div>
                    <a href="beli.php" class="btn-beli">Beli</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="product-card">
            <div class="img-wrap">
                <img src="baju3.jpg" alt="Costum Supardi">
                <div class="badge">PREMIUM</div>
            </div>
            <div class="card-body">
                <div class="card-rating">★★★★★</div>
                <div class="card-name">Costum Supardi</div>
                <div class="card-desc">Bahan denim premium, desain modern, tahan lama dan fashionable untuk tampil keren.</div>
                <div class="card-footer">
                    <div class="price">Rp 350.000</div>
                    <a href="beli.php" class="btn-beli">Beli</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Features -->
<div class="features-section">
    <div class="section" style="padding-top:0; padding-bottom:0; max-width:100%;">
        <div class="features-grid">
            <div class="feature-item">
                <div class="f-icon">🚚</div>
                <h3>Pengiriman Cepat</h3>
                <p>Pengiriman ke seluruh Indonesia dengan jasa ekspedisi terpercaya</p>
            </div>
            <div class="feature-item">
                <div class="f-icon">💎</div>
                <h3>Produk Berkualitas</h3>
                <p>Setiap produk telah melalui seleksi ketat untuk memastikan kualitas terbaik</p>
            </div>
            <div class="feature-item">
                <div class="f-icon">🔄</div>
                <h3>Garansi Return</h3>
                <p>Tidak puas? Kami siap bantu proses pengembalian dengan mudah</p>
            </div>
            <div class="feature-item">
                <div class="f-icon">🛡️</div>
                <h3>Pembayaran Aman</h3>
                <p>Transaksi terlindungi dengan sistem pembayaran yang aman dan terpercaya</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer-main">
    <div class="footer-grid">
        <div class="footer-brand">
            <div class="brand">JUAL BATUBATA</div>
            <p>Toko fashion online terpercaya yang menghadirkan produk berkualitas tinggi dengan harga terjangkau. Melayani pelanggan dengan sepenuh hati.</p>
        </div>
        <div class="footer-col">
            <h4>Navigasi</h4>
            <a href="home.php">Home</a>
            <a href="profil.php">Profil</a>
            <a href="stok_barang.php">Stok Barang</a>
            <a href="kontak.php">Kontak</a>
        </div>
        <div class="footer-col">
            <h4>Kontak</h4>
            <a href="#">📞 +62 873-6736-3431</a>
            <a href="#">✉ SUMANTO@gmail.com</a>
            <a href="#">📍 Indonesia</a>
        </div>
    </div>
    <div class="footer-bottom">
        <span>&copy; <?php echo date('Y'); ?> Jual Batubata. All rights reserved.</span>
        <span>Dibuat dengan ❤️ oleh <span>Sumanto</span></span>
    </div>
</footer>

</body>
</html>
