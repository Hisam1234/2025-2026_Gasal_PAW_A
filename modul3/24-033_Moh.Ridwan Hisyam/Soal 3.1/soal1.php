<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Menambahkan lima data baru
array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");


$max_index = count($fruits) - 1; // indeks paling tinggi itu jumlah elemen - 1
echo "Nilai dengan indeks tertinggi adalah: " . $fruits[$max_index]. "." . "\n";
echo "Indeks tertinggi dari array fruits adalah: " . $max_index . "\n";
?>