<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - Jual Batubata</title>
    <meta name="description" content="Profil perusahaan Jual Batubata — penyedia produk fashion berkualitas terpercaya.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --gold: #D4AF37;
            --gold-light: #F0D060;
            --gold-dark: #A88820;
            --bg-dark: #0A0A0A;
            --bg-card: #111111;
            --bg-card2: #181818;
            --border: #2a2a2a;
            --text-muted: #888;
        }

        html, body {
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Inter', sans-serif;
            min-height: 100%;
        }

        /* ===== HEADER ===== */
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

        .navbar {
            background: #0d0d0d;
            border-bottom: 1px solid var(--border);
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
        }
        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-area img {
            width: 50px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid var(--gold-dark);
        }
        .logo-area .brand-name {
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
            color: var(--gold);
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .menu a {
            color: #ccc;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.25s ease;
            letter-spacing: 0.3px;
        }
        .menu a:hover, .menu a.active {
            background: var(--gold);
            color: #000;
        }

        .search-area form {
            display: flex;
            gap: 6px;
        }
        .search-area input[type="text"] {
            background: #1a1a1a;
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 7px 14px;
            color: white;
            font-size: 13px;
            outline: none;
            transition: border-color 0.25s;
            width: 180px;
        }
        .search-area input[type="text"]:focus { border-color: var(--gold); }
        .search-area input[type="submit"] {
            background: var(--gold);
            color: #000;
            border: none;
            border-radius: 6px;
            padding: 7px 16px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.25s;
        }
        .search-area input[type="submit"]:hover { background: var(--gold-light); }

        /* ===== PAGE ===== */
        .page-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 24px 80px;
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            display: flex;
            align-items: center;
            gap: 48px;
            margin-bottom: 64px;
        }
        .hero-logo {
            flex-shrink: 0;
        }
        .hero-logo-circle {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid var(--gold);
            overflow: hidden;
            box-shadow: 0 0 40px rgba(212,175,55,0.2);
        }
        .hero-logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .hero-info .label {
            display: inline-block;
            background: rgba(212,175,55,0.12);
            color: var(--gold);
            border: 1px solid rgba(212,175,55,0.3);
            border-radius: 20px;
            padding: 4px 16px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }
        .hero-info h1 {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 14px;
        }
        .hero-info h1 span { color: var(--gold); }
        .hero-info p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.8;
            max-width: 500px;
        }

        /* ===== DIVIDER ===== */
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, var(--border), transparent);
            margin: 48px 0;
        }

        /* ===== STATS ROW ===== */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 48px;
        }
        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 24px 20px;
            text-align: center;
            transition: border-color 0.3s, transform 0.3s;
        }
        .stat-card:hover {
            border-color: var(--gold-dark);
            transform: translateY(-3px);
        }
        .stat-card .stat-icon { font-size: 28px; margin-bottom: 10px; }
        .stat-card .stat-number {
            font-size: 28px;
            font-weight: 800;
            color: var(--gold);
            margin-bottom: 4px;
        }
        .stat-card .stat-label {
            font-size: 12px;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* ===== ABOUT GRID ===== */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 48px;
        }
        .about-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 28px;
            transition: border-color 0.3s;
        }
        .about-card:hover { border-color: var(--gold-dark); }
        .about-card h3 {
            font-size: 15px;
            font-weight: 700;
            color: var(--gold);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .about-card p {
            color: #aaa;
            font-size: 14px;
            line-height: 1.8;
        }

        /* ===== VALUES SECTION ===== */
        .values-section { margin-bottom: 48px; }
        .section-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 24px;
            color: white;
        }
        .section-title span { color: var(--gold); }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
        .value-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 24px 20px;
            text-align: center;
            transition: all 0.3s;
        }
        .value-card:hover {
            border-color: var(--gold);
            background: rgba(212,175,55,0.05);
            transform: translateY(-3px);
        }
        .value-card .v-icon { font-size: 32px; margin-bottom: 12px; }
        .value-card h4 {
            font-size: 14px;
            font-weight: 700;
            color: white;
            margin-bottom: 8px;
        }
        .value-card p { font-size: 13px; color: var(--text-muted); line-height: 1.6; }

        /* ===== TEAM SECTION ===== */
        .team-section { margin-bottom: 48px; }
        .team-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 32px;
            display: flex;
            align-items: center;
            gap: 28px;
        }
        .team-avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(212,175,55,0.15);
            border: 2px solid var(--gold-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            flex-shrink: 0;
        }
        .team-info h3 {
            font-size: 20px;
            font-weight: 700;
            color: white;
            margin-bottom: 4px;
        }
        .team-info .team-role {
            color: var(--gold);
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }
        .team-info p { color: var(--text-muted); font-size: 14px; line-height: 1.7; }

        /* ===== FOOTER ===== */
        .footer {
            border-top: 1px solid var(--border);
            padding: 24px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: var(--text-muted);
        }
        .footer span { color: var(--gold); }

        /* ===== COUNTER ANIMATION ===== */
        @keyframes countUp {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .stat-number { animation: countUp 0.6s ease both; }
    </style>
</head>
<body>

<!-- Header Top Bar -->
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
        <a href="index.php">HOME</a>
        <a href="profil.php" class="active">Profil</a>
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

<!-- Page Content -->
<div class="page-wrapper">

    <!-- Hero -->
    <div class="hero-section">
        <div class="hero-logo">
            <div class="hero-logo-circle">
                <img src="logo.jpg" alt="Logo Jual Batubata">
            </div>
        </div>
        <div class="hero-info">
            <div class="label">🏢 Tentang Kami</div>
            <h1>Profil <span>Perusahaan</span></h1>
            <p>Kami adalah toko fashion terpercaya yang menghadirkan produk berkualitas tinggi dengan harga terjangkau. Melayani pelanggan dengan penuh dedikasi sejak berdiri.</p>
        </div>
    </div>

    <!-- Stats -->
    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-icon">🛍️</div>
            <div class="stat-number" id="cnt-produk">150+</div>
            <div class="stat-label">Produk Tersedia</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">😊</div>
            <div class="stat-number">500+</div>
            <div class="stat-label">Pelanggan Puas</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">📦</div>
            <div class="stat-number">1000+</div>
            <div class="stat-label">Order Selesai</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">⭐</div>
            <div class="stat-number">4.9</div>
            <div class="stat-label">Rating Kepuasan</div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- About Grid -->
    <div class="about-grid">
        <div class="about-card">
            <h3>🎯 Visi Kami</h3>
            <p>Menjadi toko fashion online terkemuka yang dikenal atas kualitas produk, pelayanan prima, dan kepuasan pelanggan yang tak tertandingi di seluruh Indonesia.</p>
        </div>
        <div class="about-card">
            <h3>🚀 Misi Kami</h3>
            <p>Menghadirkan produk fashion berkualitas tinggi dengan harga bersaing, memberikan layanan pelanggan terbaik, dan terus berinovasi untuk memenuhi kebutuhan pelanggan.</p>
        </div>
        <div class="about-card">
            <h3>📜 Sejarah</h3>
            <p>Didirikan dengan semangat kewirausahaan, kami memulai perjalanan dari skala kecil dan terus berkembang menjadi toko yang dipercaya oleh ratusan pelanggan setia.</p>
        </div>
        <div class="about-card">
            <h3>🤝 Komitmen</h3>
            <p>Setiap produk yang kami jual telah melalui seleksi ketat untuk memastikan kualitas terbaik sampai ke tangan pelanggan, didukung layanan purna jual yang responsif.</p>
        </div>
    </div>

    <!-- Values -->
    <div class="values-section">
        <div class="section-title">Nilai <span>Utama</span> Kami</div>
        <div class="values-grid">
            <div class="value-card">
                <div class="v-icon">💎</div>
                <h4>Kualitas</h4>
                <p>Setiap produk dipilih dengan standar kualitas tinggi untuk kepuasan pelanggan.</p>
            </div>
            <div class="value-card">
                <div class="v-icon">⚡</div>
                <h4>Cepat & Andal</h4>
                <p>Proses pemesanan mudah, pengiriman cepat, dan pelayanan yang selalu siap.</p>
            </div>
            <div class="value-card">
                <div class="v-icon">🛡️</div>
                <h4>Terpercaya</h4>
                <p>Kepercayaan pelanggan adalah aset terbesar yang selalu kami jaga dengan sepenuh hati.</p>
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="team-section">
        <div class="section-title">Tim <span>Kami</span></div>
        <div class="team-card">
            <div class="team-avatar">👨‍💼</div>
            <div class="team-info">
                <h3>Sumanto</h3>
                <div class="team-role">Founder &amp; CEO</div>
                <p>Memimpin bisnis dengan pengalaman lebih dari 5 tahun di industri fashion retail. Berkomitmen menghadirkan produk terbaik dan layanan pelanggan yang memuaskan bagi setiap pelanggan setia kami.</p>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <span>&copy; <?php echo date('Y'); ?> Jual Batubata</span>
    <span>Hubungi: <span>+62 873-6736-3431</span></span>
</div>

</body>
</html>
