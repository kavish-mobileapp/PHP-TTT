<?php
$rows = 7;

for ($i = 0; $i < $rows; $i++) {
    
    for ($j = 0; $j < $i; $j++) {
        echo "  "; // Two spaces to align with "* "
    }
   
    for ($k = $i; $k < $rows; $k++) {
        echo "* ";
    }
    echo "</br>";
}
?>
