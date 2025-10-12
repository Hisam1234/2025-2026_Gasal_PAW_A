<?php
$Lweight = array(
    "Andy" => "70",
    "Barry" => "68",
    "Charlie" => "72"
);

// Mengubah array asosiatif menjadi array nilai numerik(integer)
$values = array_values($Lweight);

// Mengakses value kedua
$secondValue = $values[1];

echo "Data kedua dari array Lweight adalah: $secondValue";
?>