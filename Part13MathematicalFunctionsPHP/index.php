<?php

// Работа с %.

// 1. Даны переменные $a = 10 и $b = 3. Найдите остаток от деления $a на $b(DONE).
/*
$a = 10;
$b = 3;

echo 'Остаток от деления равен: ' . $a % $b . '.';
*/

//2. Даны переменные $a и $b. Проверьте, что $a делится без остатка на $b. Если это так — выведите 'Делится' и результат деления, иначе выведите 'Делится с остатком' и остаток от деления(DONE).

$a = 4;
$b = 2;

if ($a % $b == 0 and $b != 0) {
    echo 'Делится.';
} else {
   echo 'Делится с остатком.';
}

?>
