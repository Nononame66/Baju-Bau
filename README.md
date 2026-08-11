<div align="center">

# 🛍️ Jual Bajubau — Web Baju

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

> **Aplikasi baju berbasis web** untuk pengelolaan toko fashion dengan tampilan modern dark-mode beraksent emas.  
> Dibangun menggunakan PHP Native + MySQL tanpa framework tambahan.

</div>

---

## ✨ Fitur Utama

| Fitur | Keterangan |
|-------|-----------|
| 🏠 **Home** | Halaman beranda dengan hero section, product showcase, dan stats |
| 🛒 **Stok Barang** | Tampilkan semua produk dari database dengan card interaktif |
| ➕ **Tambah Produk** | Form input produk baru lengkap dengan upload foto |
| 💳 **Pembelian** | Form pembelian + pilihan metode pembayaran (Transfer/E-Wallet/COD) |
| 🧾 **Struk Otomatis** | Cetak struk pembelian langsung dari browser |
| 👤 **Profil** | Halaman profil perusahaan dengan statistik & nilai bisnis |
| 📬 **Kontak** | Form pesan + info kontak lengkap |

---

## 🗂️ Struktur Project

```
penjulan/
│
├── 📄 home.php           # Halaman utama / beranda
├── 📄 profil.php         # Profil perusahaan
├── 📄 kontak.php         # Halaman kontak
├── 📄 stok_barang.php    # Daftar stok produk
├── 📄 tambah.php         # Form tambah produk baru
├── 📄 beli.php           # Form pembelian
├── 📄 prosesbeli.php     # Proses transaksi + cetak struk
├── 📄 proses_tambah.php  # Proses simpan produk ke DB
│
├── 📄 koneksi.php        # Konfigurasi koneksi database
├── 📄 database.sql       # Skema & struktur database
│
├── 🖼️ logo.jpg           # Logo toko
├── 🖼️ baju1-3.jpg        # Gambar produk contoh
│
└── 📁 uploads/           # Folder upload foto produk
    └── .gitkeep
```

---

## 🚀 Cara Menjalankan

### Prasyarat
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Browser modern

### Langkah Instalasi

**1. Clone repository ini**
```bash
git clone https://github.com/username/penjulan.git
```

**2. Pindahkan ke folder XAMPP**
```
C:\xampp\htdocs\penjulan\
```

**3. Import database**
- Buka `http://localhost/phpmyadmin`
- Buat database baru: `ecommers10`
- Import file **`database.sql`**

**4. Konfigurasi koneksi**

Edit file `koneksi.php` sesuai pengaturan lokal Anda:
```php
$host = "localhost";
$user = "root";
$pass = "";          // sesuaikan password MySQL Anda
$db   = "ecommers10";
```

**5. Jalankan aplikasi**

Buka browser dan akses:
```
http://localhost/penjulan/home.php
```

---

## 🗄️ Struktur Database

### Tabel `tmbbrg` — Data Produk
| Kolom | Tipe | Keterangan |
|-------|------|-----------|
| `id_barang` | INT (PK, AI) | ID produk |
| `seri` | VARCHAR(50) | Kode seri produk |
| `nama_barang` | VARCHAR(100) | Nama produk |
| `jenis` | VARCHAR(50) | Jenis/kategori |
| `harga` | BIGINT | Harga produk |
| `deskripsi` | TEXT | Deskripsi produk |
| `foto` | VARCHAR(225) | Nama file foto |

### Tabel `transaksi` — Data Penjualan
| Kolom | Tipe | Keterangan |
|-------|------|-----------|
| `id` | INT (PK, AI) | ID transaksi |
| `no_faktur` | VARCHAR(50) | Nomor faktur |
| `tanggal` | DATE | Tanggal transaksi |
| `nama_pembeli` | VARCHAR(100) | Nama pembeli |
| `alamat` | TEXT | Alamat pembeli |
| `ktp` | VARCHAR(50) | No. KTP pembeli |
| `id_barang` | INT | Referensi ke tmbbrg |
| `jumlah` | INT | Jumlah beli |
| `total` | BIGINT | Total harga |

---

## 🎨 Desain & UI

- 🌑 **Dark Mode** — Latar hitam elegan dengan aksen warna emas `#D4AF37`
- 🔤 **Tipografi** — Google Fonts Inter untuk tampilan modern dan bersih
- ✨ **Micro-animations** — Hover effects halus pada cards dan tombol
- 📱 **Responsive-friendly** — Layout yang nyaman di berbagai ukuran layar

---

## 📸 Screenshot

> Jalankan aplikasi di XAMPP untuk melihat tampilan lengkapnya.

---

## 🔐 Catatan Keamanan

> [!WARNING]
> Aplikasi ini adalah **project pembelajaran**. Beberapa hal yang perlu diperhatikan sebelum deploy ke produksi:
> - Gunakan **prepared statements** untuk mencegah SQL Injection
> - Validasi & sanitasi input di sisi server
> - Jangan simpan kredensial database di file yang di-commit ke GitHub
> - Aktifkan HTTPS untuk keamanan transaksi

---

## 🤝 Kontributor

| | |
|--|--|
| **Nama** | Sumanto |
| **Role** | Developer & Owner |
| **Kontak** | SUMANTO@gmail.com |
| **Telepon** | +62 873-6736-3431 |

---

## 📄 Lisensi

Project ini dibuat untuk keperluan **pembelajaran** dan **portofolio pribadi**.  
Silakan gunakan dan modifikasi sesuai kebutuhan Anda.

---

<div align="center">

Dibuat dengan ❤️ menggunakan **PHP + MySQL + HTML/CSS Vanilla**

⭐ Jangan lupa kasih **star** kalau project ini membantu!

</div>
