<?php

// 14. Создайте массив $arr. Выведите значение массива на экран с помощью команды var_dump()(DONE).

$arr = array('text' => 'текст!', 1 => '125', 'key' => 'element');
var_dump($arr);

// 15. Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли(DONE).

$arr = array('Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$');
echo $arr['Петя'];
echo "<br/>";
echo $arr['Коля'];

// 16. Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник — первый и т.д.). Выведите на экран текущий день недели(DONE).

$days = array('1' => 'Понедельник', '2' => 'Втоник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье');
echo $days['3'];

// 17. Создайте массив $arr с ключами 'I', 'study', 'php', 'sign' и соответствующими элементами 'Я', 'учу', 'PHP', '!'. С его помощью выведите на экран фразу 'Я учу PHP!'(DONE).

$arr = ['I' => 'Я', 'study' => 'учу', 'php' => 'PHP', 'sign' => '!'];

// Первый способ.
echo $arr['I'];
echo ' ';
echo $arr['study'];
echo ' ';
echo $arr['php'];
echo ' ';
echo $arr['sign'];
echo ' ';

// Второй способ.
echo join(' ', $arr);

// PHP Part 7 Associative Arrays (DONE).

?>