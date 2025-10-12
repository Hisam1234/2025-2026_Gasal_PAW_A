<?php
// 1. Mendeklarasikan array asosiatif awal $Lheight
$Lheight = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

// Menambahkan lima data baru ke array $Lheight
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

// Menampilkan nilai dengan "indeks terakhir" dari array $Lheight
// Karena array asosiatif tidak berindeks numerik, kita ambil elemen terakhir menggunakan end()
$lastValue = end($Lheight);
$lastKey = key($Lheight);
echo "Nilai dengan indeks terakhir pada array Lheight adalah: $lastValue (key: $lastKey)\n";

// 2. Menghapus satu data tertentu dari array $Lheight, misalnya "Fiona"
unset($Lheight["Fiona"]);

// Menampilkan nilai dengan indeks terakhir setelah penghapusan
$lastValueAfterUnset = end($Lheight);
$lastKeyAfterUnset = key($Lheight);
echo "Setelah penghapusan 'Fiona', nilai dengan indeks terakhir adalah: $lastValueAfterUnset (key: $lastKeyAfterUnset)\n";

// 3. Membuat array baru $Lweight dengan tiga data
$Lweight = array(
    "Andy" => "70",
    "Barry" => "68",
    "Charlie" => "72"
);

// Menampilkan data kedua dari array $Lweight
// Karena array asosiatif, kita akses elemen kedua dengan mengubah array menjadi array numerik indeks sementara
$values = array_values($Lweight);
$secondValue = $values[1]; // indeks 1 adalah elemen kedua
echo "Data kedua dari array Lweight adalah: $secondValue\n";
?>