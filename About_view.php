<!-- application/views/about_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Transportasi Online</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f5f5f5; }
        nav { background: #007bff; padding: 10px; color: #fff; text-align: center; }
        nav a { color: #fff; text-decoration: none; margin: 0 10px; }
        .container { padding: 20px; }
    </style>
</head>
<body>
<nav>
    <a href="<?= base_url('home') ?>">Home</a>
    <a href="<?= base_url('home/ticket') ?>">Pesan Tiket</a>
    <a href="<?= base_url('home/pricing') ?>">Daftar Harga</a>
    <a href="<?= base_url('home/about') ?>">Tentang Kami</a>
    <a href="<?= base_url('home/contact') ?>">Kontak</a>
</nav>
    <div class="container">
        <h1>Tentang Kami</h1>
        <p>Kami adalah penyedia layanan tiket transportasi online terpercaya, menawarkan kemudahan dalam pemesanan tiket bus, kereta, dan pesawat secara online.</p>
    </div>
    <footer style="text-align: center; padding: 10px; background: #007bff; color: #fff;">
        &copy; <?= date('Y'); ?> Transportasi Online
    </footer>
</body>
</html>
