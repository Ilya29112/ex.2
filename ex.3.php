<?php

echo "Введите число для вывода таблицы умножения: ";
$number = (int)trim(fgets(STDIN));

if ($number <= 0) {
    echo "Число должно быть положительным.\n";
    exit;
}

echo "Таблица умножения для числа $number:\n";

for ($i = 1; $i <= 10; $i++) {

    echo "$number x $i = " . ($number * $i) . "\n";
}