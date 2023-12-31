<?php

// Работа с %.

// 1. Даны переменные $a = 10 и $b = 3. Найдите остаток от деления $a на $b(DONE).

$a = 10;
$b = 3;

echo 'Остаток от деления равен: ' . $a % $b . '.';

//2. Даны переменные $a и $b. Проверьте, что $a делится без остатка на $b. Если это так — выведите 'Делится' и результат деления, иначе выведите 'Делится с остатком' и остаток от деления(DONE).

$a = 4;
$b = 2;

if ($a % $b == 0 and $b != 0) {
    echo 'Делится.';
} else {
   echo 'Делится с остатком.';
}

// Работа с модулем.

// 3. Даны переменные $a и $b. Найдите найдите модуль разности $a и $b. Проверьте работу скрипта самостоятельно для различных $a и $b(DONE).

$a = 10;
$b = 5;
$c = $a - $b;

if ($c < 0) {
    echo "Это число отрицательное : $c.<br>";
    echo "Модуль разности равен: " . abs($c) . "."; // abs — Абсолютное значение (модуль числа).
} else if ($c > 0) {
    echo "Это число положительное: $c.<br>";
    echo "Модуль разности равен : " . abs($c) . "."; // abs — Абсолютное значение (модуль числа).
}

// 4. Даны переменные $a и $b. Отнимите от $a переменную $b и результат присвойте переменной $c. Сделайте так, чтобы в любом случае в переменную $c записалось положительное значение.
//Проверьте работу скрипта при $a и $b, равных соответственно 3 и 5, 6 и 1(DONE).

$a = 3;
$b = 5;

$c = abs($a - $b);
echo 'Результат: ' . $c . '.';

// Работа со степенью и корнем.

//  5. Возведите 2 в 10 степень. Результат запишите в переменную $st(DONE).

$st = pow(2, 10); // pow — Возведение в степень.
echo '2 в 10 степени будет: ' . $st . '.';

// 6. Найдите квадратный корень из 245(DONE).

echo 'Квадратный корень числа 245 равен: ' . sqrt(245) . '.'; // sqrt — Квадратный корень.

// 7. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите квадратный корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом foreach(DONE).

$arr = [4, 2, 5, 19, 13, 0, 10];
$squareResult = 0;

foreach ($arr as $value) {
    $squareResult += pow($value, 2); // pow — Возведение в степень.
}

echo 'Сумма элементов массива в квадрах: ' . $squareResult . '.' . "<br>";
echo 'Квадратный корень из суммы квадратов его элементов равен:' . sqrt($squareResult) . '.';

// Работа с функциями округления.

// 8. Найдите квадратный корень из 379. Результат округлите до целых, до десятых, до сотых(DONE).

$squareResult = sqrt(379); // sqrt — Квадратный корень.

// round — Округляет число типа float.
echo 'Округление до целых: ' . round($squareResult) . '.' . '<br>';
echo 'Округление до десятых: ' . round($squareResult, 1) . '.' . '<br>';
echo 'Округление до сотых: ' . round($squareResult, 2) . '.';

// 9. Найдите квадратный корень из 587. Округлите результат в большую и меньшую сторону, запишите результаты округления в ассоциативный массив с ключами 'floor' и 'ceil'(DONE).

$squareResult = sqrt(587);
$fl = floor(round($squareResult, 2));
$ce = ceil(round($squareResult));

$arr = array('floor' => $fl, 'ceil' => $ce);

echo $squareResult . '<br>';
echo $arr['floor'] . '<br>';
echo $arr['ceil'] . '<br>';

// Работа с min и max.

// 10. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное числа(DONE).

// max — Возвращает наибольшее значение.
// min — Находит наименьшее значение.

echo 'Максимальное значение: ' . max(4, -2, 5, 19, -130, 0, 10) . '.' . '<br>';
echo 'Минимальное значение: ' . min(4, -2, 5, 19, -130, 0, 10) . '.';

// Работа с рандомом.

// 11. Выведите на экран случайное число от 1 до 100(DONE).

// rand — Генерирует случайное число.
echo 'Слуайное число от 1 до 100: ' . rand(1, 100) . '.' . '<br>';

// mt_rand() - Генерирует случайное значение методом с помощью генератора простых чисел на базе Вихря Мерсенна.
echo 'Слуайное число от 1 до 100: ' . mt_rand(1, 100) . '.';


// 12. Сделайте так, чтобы каждый раз при обновлении страницы на экран выводилась случайным образом одна из трех картинок(DONE).

echo "<img src='" . mt_rand(1, 3) . ".png'>";

// 13. Заполните массив 10-ю случайными числами. (Подсказка: нужно воспользоваться циклами for или while)(DONE).

$arr = array();

for ($i = 1; $i <= 10; $i++) {
    $arr[$i] = rand(1, 10);
}

echo join(' ', $arr);

// Part 13 Mathematical Functions PHP (DONE).

?>
