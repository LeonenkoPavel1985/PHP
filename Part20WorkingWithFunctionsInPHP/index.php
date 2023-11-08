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

// 4. Сделайте функцию, которая принимает 3 параметра: день, месяц и год, а возвращает дату в формате 30-01-2023 (DONE).

function dateFormat($day, $month, $year) {
    return date("d-m-Y", mktime(0, 0, 0, $month, $day, $year));
}

$result = dateFormat(30, 1, 2023);
echo 'Дата: ' . $result . '.' . '<br>';

// На параметры по умолчанию.

// 5. Сделайте функцию, которая будет возводить число в куб. По умолчанию функция должна возводить в куб число 3 (DONE).

// Передаем параметр по умолчанию в качестве аргумента (так же функция с необязательным параметром).
function numberToCube($number = 3)
{
    return pow($number, 3);
}

$result = numberToCube();
echo 'Число 3 в кубе, будет равно: ' . $result . '.' . '<br>';

?>