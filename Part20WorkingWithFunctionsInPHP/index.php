<?php

// Простые функции.

// 1. Сделайте функцию, которая возвращает квадрат числа. Число передается параметром (DONE).

function squarNumber($number) {
    return 'Квадрат числа: ' . $number . ' равен: ' . $number*$number . '.';
}

echo squarNumber(5);

?>