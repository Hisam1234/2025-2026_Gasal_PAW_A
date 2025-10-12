<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");
// Menghapus 
$key = array_search("Fig", $fruits);
if ($key !== false) {
    unset($fruits[$key]);
}

$fruits = array_values($fruits);

$max_index = count($fruits) - 1;
echo "Setelah penghapusan, nilai dengan indeks tertinggi adalah: " . $fruits[$max_index] . "\n";
echo "Indeks tertinggi dari array fruits setelah penghapusan adalah: " . $max_index . "\n";
?>