<?php
$input = "Hello PHP!";
$reversed = "";
$length = 0;

// First, find the length of the string
while (isset($input[$length])) {
    $length++;
}

// Loop from the end to the beginning
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $input[$i];
}

echo "Original String: $input<br/>";
echo "Reversed String: $reversed";
?>
