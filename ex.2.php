<?php

echo "Введите число : ";
$handle = fopen("php://stdin", "r");
$number = fgets($handle);
$number = (int)$number;

echo "Простые числа от 1 до " . $number . ":\n";
for ($i = 2; $i <= $number; $i++) {
    $isPrime = true;

    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j === 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $i . "\n";
    }
}
