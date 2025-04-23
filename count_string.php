<?php
$str = "Hello my name is Kavish";
$count = 1;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == ' ') {
        $count++;
    }
}

echo "Total words in the given string = $count";
?>