<?php
// Daftar produk dan harga
$produk = array(
    "Laptop" => 10000000,
    "Smartphone" => 5000000,
    "Keyboard" => 300000,
    "Mouse" => 150000,
    "Monitor" => 2500000
);

foreach ($produk as $produksi => $harga) {
    echo "Produk: $produksi, Harga: Rp " . $harga, 0, '.' . "<br>";
}
?>