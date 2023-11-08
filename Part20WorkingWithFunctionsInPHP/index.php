<?php

// Простые функции.

// 1. Сделайте функцию, которая возвращает квадрат числа. Число передается параметром (DONE).

function squarNumber($number) {
    return 'Квадрат числа ' . $number . ' равен: ' . $number*$number . '.' . '<br>';
}

echo squarNumber(5);

// 2. Сделайте функцию, которая возвращает сумму двух чисел (DONE).

function summNumber($numberOne, $numberTwo) {
    return 'Сумма чисел ' . $numberOne . ' и ' . $numberTwo . ' равна: ' . $numberOne + $numberTwo . '.' . '<br>';
}

echo summNumber(6, 7);

// 3. Сделайте функцию, которая отнимает от первого числа второе и делит на третье (DONE).

function threeNumbers($numberOne, $numberTwo, $numberThree ) {
    return ($numberOne - $numberTwo) / $numberThree;
}

$result = threeNumbers(10, 6, 2);
echo 'Резельтат работы функции равен: ' . $result . '.' . '<br>';

?>