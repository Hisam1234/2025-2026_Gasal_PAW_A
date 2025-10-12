<?php
$array1 = array("apel", "jeruk", "pisang");
$array2 = array("mangga", "pepaya");

echo "<h3>2. array_merge()</h3>";
$merged = array_merge($array1, $array2);
print_r($merged);
?>