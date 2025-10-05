<?php
$total = 0;
$nama = '';
$harga = 0;
$subtotal = 0;

if (isset($_POST['pilih']) && isset($_POST['jumlah'])) {
    $pilih = (int)$_POST['pilih'];
    $jumlah = (int)$_POST['jumlah'];

    if ($jumlah > 0) {
        if ($pilih == 1) {
            $nama = 'Nasi Goreng';
            $harga = 15000;
        } elseif ($pilih == 2) {
            $nama = 'Mie Ayam';
            $harga = 12000;
        } elseif ($pilih == 3) {
            $nama = 'Es Teh';
            $harga = 5000;
        } elseif ($pilih == 4) {
            $nama = 'Air Mineral';
            $harga = 3000;
        } else {
            $nama = '';
            $harga = 0;
        }

        if ($harga > 0) {
            $subtotal = $harga * $jumlah;
            $total = $subtotal;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
</head>
<body>
    <h1>Kasir Sederhana</h1>
    <form method="post" action="">
        <label>Pilih Menu:</label>
        <select name="pilih" required>
            <option value="">--Pilih--</option>
            <option value="1">Nasi Goreng - Rp 15,000</option>
            <option value="2">Mie Ayam - Rp 12,000</option>
            <option value="3">Es Teh - Rp 5,000</option>
            <option value="4">Air Mineral - Rp 3,000</option>
        </select><br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1" required><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php if ($subtotal > 0): ?>
        <h2>Hasil</h2>
        <p>Barang: <?= htmlspecialchars($nama) ?></p>
        <p>Jumlah: <?= $jumlah ?></p>
        <p>Harga Satuan: Rp <?= number_format($harga) ?></p>
        <p>Subtotal: Rp <?= number_format($subtotal) ?></p>
        <p><b>Total Harga: Rp <?= number_format($total) ?></b></p>
    <?php endif; ?>
</body>
</html>