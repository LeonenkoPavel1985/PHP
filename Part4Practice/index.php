<?php

// 12. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце (DONE).

// Секунды в часе:
$hour = 60 * 60;
echo "В часе: $hour секунд. <br/>";

// Секунды в сутках:
$day = $hour * 24;
echo "В сутках: $day секунд. <br/>";

// Секунды в месяце:
$month = $day * 30;
echo "В месяце: $month секунды. <br/>";

// 13. Создайте три переменные — час, минута, секунда. С их помощью выведите времяначала нашего занятия в формате 'час:минута:секунда' (DONE).

$hour = 13;
$minute = 59;
$second = 30;
echo 'Время: ' . $hour . ':' . $minute . ':' . $second;

// 14. Создайте переменную, присвойте ей число. Возведите это число в квадрат. Выведите его на экран (DONE).

// Первый способ.
$number = 2;
$number **= $number;
echo "Число 2 в квадрате равно: $number. <br/>";

// Второй способ. Pow() - используется для вычисления основания, возведенного в степень экспоненты. Это универсальная функция, которую можно использовать с числом, возведенным в любое значение.
$number = 2;
echo 'Число 2 в квадрате равно: ' . pow($number, $number) . '.';

// 15. Напишите скрипт, который переводит температуру из градусов Цельсия в градусы Фарингейта. Формула: Tc=5⋅(T f −32)/9.  Подсказка: для градусов Фарингейта следует ввести переменную и записать в нее температуру, которую нужно перевести (DONE).

$degreesFahrenheit = 120;

$degreesCelsius = 5 * ($degreesFahrenheit - 32) / 9;
echo '120 градусов Фарингейта равно: ' . $degreesCelsius . ' градусов Цельсия.';

// PHP Part4 Practice (DONE).

?>
