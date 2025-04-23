<?php
// Input string
$str = "Hello, this is a PHP vowel counter!";
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count = 0;

// Convert string to lowercase to make comparison easy
$str = strtolower($str);

// Loop through each character
for ($i = 0; isset($str[$i]; $i++) {
    if (in_array($str[$i], $vowels)) {
        $count++;
    }
}

echo "Total number of vowels: $count";
?>
