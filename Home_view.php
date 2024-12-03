<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesantiketku.com</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f5f5f5; }
        nav { background: #007bff; padding: 15px; color: #fff; text-align: center; }
        nav a { color: #fff; text-decoration: none; margin: 0 15px; font-weight: bold; transition: color 0.3s ease; }
        nav a:hover { color: #ffdf00; }
        .container { padding: 20px; }

        /* Banner Section */
        .banner { background-size: cover; background-position: center; color: blue; text-align: center; padding: 120px 0; margin-bottom: 30px; }
        .banner h1 { font-size: 3em; margin-bottom: 10px; }
        .banner p { font-size: 1.2em; }

        /* Search Section */
        .search-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .search-input {
            width: 70%;
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }
        .search-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-btn:hover { background-color: #0056b3; }

        /* Section for Cards */
        .section { display: flex; justify-content: space-around; flex-wrap: wrap; align-items: center; text-align: center; gap: 20px; }
        .card { background: white; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 30%; box-sizing: border-box; transition: transform 0.3s ease; }
        .card:hover { transform: translateY(-10px); }
        .card h3 { margin-top: 0; font-size: 1.5em; }
        .card p { color: #666; font-size: 1.1em; }
        .card i { font-size: 3em; margin-bottom: 15px; color: #007bff; }
        .btn { display: inline-block; background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 10px; transition: background 0.3s ease; }
        .btn:hover { background: #0056b3; }

        /* Promo Routes Section */
        .promo-routes {
            background-color: #e9f7fe;
            padding: 30px;
            margin-top: 40px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            text-align: center;
            gap: 20px;
        }

        /* Promo Cards for Different Transport Types */
        .promo-card {
            width: 30%;
            margin: 10px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .promo-card:hover { transform: translateY(-10px); }

        /* Footer */
        footer { text-align: center; padding: 15px; background: #007bff; color: #fff; margin-top: 30px; }

        /* Responsiveness */
        @media (max-width: 768px) { 
            .card { width: 48%; } 
            .promo-card { width: 48%; }
        }
        @media (max-width: 480px) { 
            .card { width: 100%; } 
            .promo-card { width: 100%; }
        }
    </style>
</head>
<body>
<nav>
    <a href="<?= base_url('ticket') ?>">Home</a>
    <a href="<?= base_url('ticket/ticket') ?>">Pesan Tiket</a>
    <a href="<?= base_url('ticket/pricing') ?>">Daftar Harga</a>
    <a href="<?= base_url('ticket/about') ?>">Tentang Kami</a>
    <a href="<?= base_url('ticket/contact') ?>">Kontak</a>
</nav>

<!-- Banner Section -->
<div class="banner">
    <h1>Selamat Datang di pesantiketku.com</h1>
    <p>Pesan tiket perjalanan dengan mudah, cepat, dan aman. Temukan rute perjalanan terbaik untuk Anda!</p>
</div>

<!-- Search Section -->
<div class="search-container">
    <input type="text" class="search-input" placeholder="Cari tiket atau rute..." />
    <button class="search-btn">Cari</button>
</div>

<!-- Main Content Section -->
<div class="container">
    <h2>Fitur Utama Kami</h2>

    <!-- Section for Cards -->
    <div class="section">
        <div class="card">
            <i class="fas fa-ticket-alt"></i>
            <h3>Pemesanan Tiket</h3>
            <p>Pesan tiket untuk perjalanan Anda dengan mudah. Pilih tujuan, jadwal, dan kursi yang tersedia!</p>
            <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Tiket</a>
        </div>

        <div class="card">
            <i class="fas fa-calendar-alt"></i>
            <h3>Jadwal Perjalanan</h3>
            <p>Lihat jadwal keberangkatan dari berbagai rute dan tujuan kami. Temukan jadwal yang sesuai dengan waktu Anda.</p>
            <a href="<?= base_url('ticket/jadwal') ?>" class="btn">Lihat Jadwal</a>
        </div>

        <div class="card">
            <i class="fas fa-dollar-sign"></i>
            <h3>Daftar Harga</h3>
            <p>Temukan informasi lengkap tentang harga tiket untuk setiap tujuan dan layanan yang kami sediakan.</p>
            <a href="<?= base_url('ticket/pricing') ?>" class="btn">Lihat Harga</a>
        </div>
    </div>

    <!-- Promo Routes for Train -->
    <div class="promo-routes">
        <h2>Promo Rute Kereta</h2>
        <div class="promo-card">
            <h3>Jakarta - Bandung</h3>
            <p>Promo perjalanan kereta Jakarta menuju Bandung dengan harga terjangkau.</p>
            <p class="price">Rp 100,000</p>
            <p><strong>Maskapai: </strong>Kereta Api Indonesia</p>
            <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Sekarang</a>
        </div>
        <div class="promo-card">
            <h3>Surabaya - Malang</h3>
            <p>Promo perjalanan kereta Surabaya menuju Malang, harga spesial!</p>
            <p class="price">Rp 75,000</p>
            <p><strong>Maskapai: </strong>Kereta Api Indonesia</p>
            <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Sekarang</a>
        </div>
    </div>

    <!-- Promo Routes for Bus -->
    <div class="promo-routes">
        <h2>Promo Rute Bus</h2>
        <div class="promo-card">
            <h3>Yogyakarta - Solo</h3>
            <p>Jalan-jalan hemat dengan promo perjalanan bus Yogyakarta ke Solo.</p>
            <p class="price">Rp 50,000</p>
            <p><strong>Maskapai: </strong>Perum Damri</p>
            <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Sekarang</a>
        </div>
        <div class="promo-card">
            <h3>Bandung - Jakarta</h3>
            <p>Promo tiket bus Bandung ke Jakarta dengan harga super murah.</p>
            <p class="price">Rp 60,000</p>
            <p><strong>Maskapai: </strong>PO Sumber Selamet</p>
            <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Sekarang</a>
        </div>
		
		<!-- Promo Routes for Airplane -->
<div class="promo-routes">
    <h2>Promo Rute Pesawat</h2>
    <div class="promo-card">
        <h3>Jakarta - Bali</h3>
        <p>Promo tiket pesawat Jakarta menuju Bali dengan harga spesial!</p>
        <p class="price">Rp 500,000</p>
        <p><strong>Maskapai: </strong>Garuda Indonesia</p>
        <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Sekarang</a>
    </div>
    <div class="promo-card">
        <h3>Surabaya - Yogyakarta</h3>
        <p>Promo tiket pesawat Surabaya menuju Yogyakarta dengan harga terjangkau.</p>
        <p class="price">Rp 450,000</p>
        <p><strong>Maskapai: </strong>AirAsia</p>
        <a href="<?= base_url('ticket/ticket') ?>" class="btn">Pesan Sekarang</a>
    </div>
	<!-- Testimoni Section -->
<div class="container">
    <h2>Testimoni Pengguna</h2>
    <div class="section">
        <div class="card">
            <i class="fas fa-user-circle"></i>
            <h3>Andi, Jakarta</h3>
            <p>"Pengalaman saya menggunakan pesantiketku.com sangat mudah dan cepat. Tiket saya selalu tersedia sesuai dengan jadwal yang diinginkan. Sangat memuaskan!"</p>
        </div>
        <div class="card">
            <i class="fas fa-user-circle"></i>
            <h3>Siti, Surabaya</h3>
            <p>"Proses pemesanan tiket bus dan pesawat melalui pesantiketku.com sangat sederhana. Harga promo yang ditawarkan juga sangat terjangkau."</p>
        </div>
        <div class="card">
            <i class="fas fa-user-circle"></i>
            <h3>Rudi, Yogyakarta</h3>
            <p>"Layanan pelanggan yang luar biasa dan harga tiket yang kompetitif. Saya pasti akan terus menggunakan pesantiketku.com untuk perjalanan saya."</p>
        </div>
    </div>
</div>

</div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 pesantiketku.com. All Rights Reserved.</p>
</footer>
</body>
</html>
