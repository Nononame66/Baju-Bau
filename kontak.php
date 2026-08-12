<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Jual Batubata</title>
    <meta name="description" content="Hubungi kami untuk informasi lebih lanjut tentang produk dan layanan Jual Batubata.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            height: 100%;
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Inter', sans-serif;
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
        .header-top span { letter-spacing: 0.5px; }
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

        /* ===== PAGE CONTENT ===== */
        .page-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 24px 80px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 56px;
        }
        .page-header .label {
            display: inline-block;
            background: rgba(212,175,55,0.12);
            color: var(--gold);
            border: 1px solid rgba(212,175,55,0.3);
            border-radius: 20px;
            padding: 4px 16px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }
        .page-header h1 {
            font-size: 36px;
            font-weight: 700;
            color: white;
            margin-bottom: 12px;
        }
        .page-header h1 span { color: var(--gold); }
        .page-header p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.7;
        }

        /* ===== CONTACT GRID ===== */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        /* Info Cards */
        .info-section { display: flex; flex-direction: column; gap: 16px; }

        .info-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 22px 24px;
            display: flex;
            align-items: flex-start;
            gap: 18px;
            transition: border-color 0.3s, transform 0.3s;
        }
        .info-card:hover {
            border-color: var(--gold-dark);
            transform: translateY(-2px);
        }
        .info-card .icon {
            width: 46px;
            height: 46px;
            background: rgba(212,175,55,0.1);
            border: 1px solid rgba(212,175,55,0.25);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 20px;
        }
        .info-card .info-body { flex: 1; }
        .info-card .info-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 4px;
        }
        .info-card .info-value {
            font-size: 15px;
            font-weight: 500;
            color: white;
            line-height: 1.5;
        }
        .info-card .info-sub {
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 2px;
        }

        /* ===== FORM ===== */
        .form-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 32px;
        }
        .form-card h2 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 24px;
            color: white;
        }
        .form-card h2 span { color: var(--gold); }

        .form-group { margin-bottom: 18px; }
        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: #aaa;
            margin-bottom: 8px;
            text-transform: uppercase;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            background: #1a1a1a;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 11px 14px;
            color: white;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: border-color 0.25s, box-shadow 0.25s;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212,175,55,0.08);
        }
        .form-group textarea { resize: vertical; min-height: 110px; }
        .form-group select option { background: #1a1a1a; }

        .btn-submit {
            width: 100%;
            background: var(--gold);
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 13px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: background 0.25s, transform 0.2s;
            margin-top: 6px;
        }
        .btn-submit:hover {
            background: var(--gold-light);
            transform: translateY(-1px);
        }
        .btn-submit:active { transform: translateY(0); }

        /* ===== SUCCESS ALERT ===== */
        .alert-success {
            background: rgba(212,175,55,0.1);
            border: 1px solid rgba(212,175,55,0.3);
            border-radius: 10px;
            padding: 14px 18px;
            color: var(--gold);
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
            display: none;
        }

        /* ===== MAP SECTION ===== */
        .map-section {
            margin-top: 48px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }
        .map-header {
            padding: 20px 28px;
            border-bottom: 1px solid var(--border);
        }
        .map-header h2 { font-size: 16px; font-weight: 600; }
        .map-header p { font-size: 13px; color: var(--text-muted); margin-top: 4px; }
        .map-placeholder {
            background: #0f0f0f;
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
            color: var(--text-muted);
        }
        .map-placeholder .pin { font-size: 40px; }
        .map-placeholder p { font-size: 14px; }

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
        <a href="profil.php">Profil</a>
        <a href="stok_barang.php">Stok Barang</a>
        <a href="tambah.php">Tambah Penjualan</a>
        <a href="kontak.php" class="active">Kontak</a>
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

    <!-- Header -->
    <div class="page-header">
        <div class="label">📬 Hubungi Kami</div>
        <h1>Kontak & <span>Informasi</span></h1>
        <p>Kami siap membantu Anda. Jangan ragu untuk menghubungi kami<br>melalui form di bawah atau informasi kontak yang tersedia.</p>
    </div>

    <!-- Contact Grid -->
    <div class="contact-grid">

        <!-- Info Cards -->
        <div class="info-section">

            <div class="info-card">
                <div class="icon">📞</div>
                <div class="info-body">
                    <div class="info-label">Telepon</div>
                    <div class="info-value">+62 873-6736-3431</div>
                    <div class="info-sub">Senin – Sabtu, 08.00 – 17.00 WIB</div>
                </div>
            </div>

            <div class="info-card">
                <div class="icon">✉️</div>
                <div class="info-body">
                    <div class="info-label">Email</div>
                    <div class="info-value">SUMANTO@gmail.com</div>
                    <div class="info-sub">Balasan dalam 1x24 jam kerja</div>
                </div>
            </div>

            <div class="info-card">
                <div class="icon">📍</div>
                <div class="info-body">
                    <div class="info-label">Alamat</div>
                    <div class="info-value">Jl. Batu Bata No. 1, Kota Anda</div>
                    <div class="info-sub">Indonesia</div>
                </div>
            </div>

            <div class="info-card">
                <div class="icon">💬</div>
                <div class="info-body">
                    <div class="info-label">WhatsApp</div>
                    <div class="info-value">+62 873-6736-3431</div>
                    <div class="info-sub">Chat langsung untuk respons cepat</div>
                </div>
            </div>

            <div class="info-card">
                <div class="icon">🕐</div>
                <div class="info-body">
                    <div class="info-label">Jam Operasional</div>
                    <div class="info-value">Senin – Sabtu: 08.00 – 17.00</div>
                    <div class="info-sub">Minggu & Hari Libur: Tutup</div>
                </div>
            </div>

        </div>

        <!-- Contact Form -->
        <div class="form-card">
            <h2>Kirim <span>Pesan</span></h2>

            <div class="alert-success" id="successAlert">
                ✅ Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.
            </div>

            <form id="contactForm" action="proses_kontak.php" method="post" onsubmit="handleSubmit(event)">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" placeholder="email@contoh.com" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="telepon" placeholder="+62 8xx-xxxx-xxxx">
                </div>
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <select id="subjek" name="subjek">
                        <option value="">-- Pilih Subjek --</option>
                        <option value="informasi_produk">Informasi Produk</option>
                        <option value="pemesanan">Pemesanan</option>
                        <option value="keluhan">Keluhan / Komplain</option>
                        <option value="kerjasama">Kerjasama</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn-submit" id="submitBtn">✉ Kirim Pesan</button>
            </form>
        </div>

    </div>

    <!-- Map Section -->
    <div class="map-section">
        <div class="map-header">
            <h2>📍 Lokasi Kami</h2>
            <p>Kunjungi toko kami langsung untuk melihat produk secara langsung</p>
        </div>
        <div class="map-placeholder">
            <div class="pin">📍</div>
            <p>Jl. Batu Bata No. 1, Kota Anda, Indonesia</p>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <span>&copy; <?php echo date('Y'); ?> Jual Batubata</span>
    <span>Hubungi: <span>+62 873-6736-3431</span></span>
</div>

<script>
    function handleSubmit(e) {
        e.preventDefault();
        const btn = document.getElementById('submitBtn');
        btn.textContent = '⏳ Mengirim...';
        btn.disabled = true;

        setTimeout(() => {
            document.getElementById('contactForm').reset();
            document.getElementById('successAlert').style.display = 'block';
            btn.textContent = '✉ Kirim Pesan';
            btn.disabled = false;

            setTimeout(() => {
                document.getElementById('successAlert').style.display = 'none';
            }, 5000);
        }, 1200);
    }
</script>

</body>
</html>
