<?php
$Lheight = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

// Data baru
$newHeights = array(
    "David" => "180",
    "Evan" => "172",
    "Fiona" => "168",
    "Grace" => "174",
    "Hannah" => "169"
);

foreach ($newHeights as $name => $height) {
    $Lheight[$name] = $height;
}

// Menggunakan fungsi end() untuk mendapatkan nilai elemen terakhir
$lastValue = end($Lheight);

// Menggunakan fungsi key() untuk mendapatkan key elemen terakhir
$lastKey = key($Lheight);

echo "Nilai dengan indeks terakhir pada array Lheight adalah: $lastValue (key: $lastKey)";
?>