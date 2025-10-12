<?php
$array1 = array("apel", "jeruk", "pisang");
$array2 = array("mangga", "pepaya");

echo "<h3>4. array_search()</h3>";
$key = array_search("jeruk", $array1);
echo "Index dari 'jeruk' adalah: " . $key;
?>