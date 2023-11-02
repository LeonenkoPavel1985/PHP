<?php

// На count и range.

// count — Подсчитывает количество элементов массива или Countable объекте.
// range — Создаёт массив, содержащий диапазон элементов.

// 1. Создайте массив, заполненный числами от 1 до 100 (DONE).

// Первый способ.
$arr = array();

foreach (range(0, 100) as $arr) {
    echo $arr;
}

// Второй способ.
$arr = range(0, 100);

echo join(' ', $arr) . '<br>';
print_r($arr);

?>
