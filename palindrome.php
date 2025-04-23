<?php
$input = "madam";
$length = 0;

// Find length manually
while (isset($input[$length])) {
    $length++;
}

// Check for palindrome by comparing characters
$isPalindrome = true;
for ($i = 0; $i < $length / 2; $i++) {
    if ($input[$i] !== $input[$length - $i - 1]) {
        $isPalindrome = false;
        break;
    }
}

if ($isPalindrome) {
    echo "\"$input\" is a palindrome.";
} else {
    echo "\"$input\" is not a palindrome.";
}
?>
