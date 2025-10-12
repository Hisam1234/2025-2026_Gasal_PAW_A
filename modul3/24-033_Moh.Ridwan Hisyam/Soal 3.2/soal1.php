<?php
$Lfruits = array("Avocado", "Blueberry", "Cherry");

// 5 data baru
$newFruits = array("Durian", "Elderberry", "Fig", "Grape", "Honeydew");


for ($i = 0; $i < count($newFruits); $i++) {
    $Lfruits[] = $newFruits[$i];
}

echo "Panjang array Lfruits saat ini adalah: " . count($Lfruits) . "\n";

// Menampilkan seluruh data
$arrlength = count($Lfruits);
for ($x = 0; $x < $arrlength; $x++) {
    echo $Lfruits[$x] . "\n";
}
?>