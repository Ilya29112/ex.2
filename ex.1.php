<?php
function calculateFactorial($number) {
    $factorial = 1;
    $i = 1;

    while ($i <= $number) {
        $factorial *= $i;
        $i++;
    }

    return $factorial;
}

echo "Введите число для вычисления факториала: ";
$number = (int)trim(fgets(STDIN));

$result = calculateFactorial($number);
echo "Факториал числа $number равен: $result\n";