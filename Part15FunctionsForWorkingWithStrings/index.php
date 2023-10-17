<?php

//-------------------Начало-------------------------------

// Работа с регистром символов.

// 1. Дана строка 'Привет, мир!'. Сделайте из нее строку 'ПРИВЕТ МИР!' (DONE).
/*
// strtoupper — Преобразует строку в верхний регистр.
//Вариант 1.  Для русских символов.
$text = 'Привет, мир!';

$text = mb_strtoupper($text, "UTF-8");
echo $text;

//Вариант 2.  Для английских символов.
$text = 'Hello, world!';

$text = strtoupper($text);
echo $text;
*/

// 2. Дана строка 'PHP'. Сделайте из нее строку 'php' (DONE).

// mb_strtolower — Приведение строки к нижнему регистру (strtolower).
$text = 'PHP';

$text = strtolower($text);
echo $text;


//--------------------Конец-------------------------------

?>
