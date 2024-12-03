<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportasi Online - Pesan Tiket</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f5f5f5; }
        nav { background: #007bff; padding: 10px; color: #fff; text-align: center; }
        nav a { color: #fff; text-decoration: none; margin: 0 10px; }
        .container { padding: 20px; }
        footer { text-align: center; padding: 10px; background: #007bff; color: #fff; }
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

<div class="container">

<?php if ($page == 'ticket'): ?>
    <h1>Pesan Tiket Transportasi</h1>
    <form action="<?= base_url('ticket/ticket_confirm') ?>" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="transport_type">Jenis Transportasi:</label>
        <select id="transport_type" name="transport_type" required>
            <option value="bus">Bus</option>
            <option value="kereta">Kereta</option>
            <option value="pesawat">Pesawat</option>
        </select>
        <label for="departure">Keberangkatan:</label>
        <input type="text" id="departure" name="departure" required>
        <label for="destination">Tujuan:</label>
        <input type="text" id="destination" name="destination" required>
        <label for="date">Tanggal:</label>
        <input type="date" id="date" name="date" required>
        <label for="passengers">Jumlah Penumpang:</label>
        <input type="number" id="passengers" name="passengers" min="1" required>
        <button type="submit">Pesan Tiket</button>
    </form>

    <?php if (isset($name)): ?>
    <h2>Konfirmasi Pemesanan</h2>
    <p><strong>Nama:</strong> <?= $name ?></p>
    <p><strong>Jenis Transportasi:</strong> <?= ucfirst($transport_type) ?></p>
    <p><strong>Keberangkatan:</strong> <?= $departure ?></p>
    <p><strong>Tujuan:</strong> <?= $destination ?></p>
    <p><strong>Tanggal:</strong> <?= $date ?></p>
    <p><strong>Jumlah Penumpang:</strong> <?= $passengers ?></p>
    <?php endif; ?>

<?php endif; ?>

</div>
<footer>
    &copy; <?= date('Y'); ?> Transportasi Online
</footer>
</body>
</html>
