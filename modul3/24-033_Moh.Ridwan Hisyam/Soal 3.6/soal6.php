<?php
$array1 = array("apel", "jeruk", "pisang");
$array2 = array("mangga", "pepaya");

echo "<h3>6. Sorting Array</h3>";
// Sort ascending
sort($array1);
echo "Sort ascending: ";
print_r($array1);

// Sort descending
rsort($array1);
echo "Sort descending: ";
print_r($array1);

// Asosiatif array
$assoc = array("a" => "apel", "b" => "jeruk", "c" => "pisang");
asort($assoc);
echo "Asort (value ascending): ";
print_r($assoc);

ksort($assoc);
echo "Ksort (key ascending): ";
print_r($assoc);
?>