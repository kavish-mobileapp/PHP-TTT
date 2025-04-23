<?php
$amount = 1280;

$hundreds = intdiv($amount, 100);
$amount %= 100;

$fifties = intdiv($amount, 50);
$amount %= 50;

$tens = intdiv($amount, 10);
$amount %= 10;

echo "Number of 100 rupees notes: $hundreds<br>";
echo "Number of 50 rupees notes: $fifties<br>";
echo "Number of 10 rupees notes: $tens<br>";

?>
