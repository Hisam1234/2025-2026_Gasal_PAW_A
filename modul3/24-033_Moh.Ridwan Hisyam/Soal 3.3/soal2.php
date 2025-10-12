<?php
$Lheight = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170",
    "David" => "180",
    "Evan" => "172",
    "Fiona" => "168",
    "Grace" => "174",
    "Hannah" => "169"
);

// Menghapus data dengan key "Fiona"
unset($Lheight["Fiona"]);

$lastValueAfterUnset = end($Lheight);

$lastKeyAfterUnset = key($Lheight);

echo "Setelah penghapusan 'Fiona', nilai dengan indeks terakhir adalah: $lastValueAfterUnset (key: $lastKeyAfterUnset)";
?>