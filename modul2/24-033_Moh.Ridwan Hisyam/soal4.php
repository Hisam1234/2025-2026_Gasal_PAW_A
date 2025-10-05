<?php
$favcolor = "red"; // mengenang Javascript

switch ($favcolor) {
    case "red": // case dalam switch itu kata kunci 
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
