<?php

//-------------------Начало-------------------------------

// Работа с регистром символов.

// 1. Дана строка 'Привет, мир!'. Сделайте из нее строку 'ПРИВЕТ МИР!' (DONE).

// strtoupper — Преобразует строку в верхний регистр (mb_strtoupper - для русских символов).
//Вариант 1.  Для русских символов.
$text = 'Привет, мир!';

$text = mb_strtoupper($text, "UTF-8");
echo $text;

//Вариант 2.  Для английских символов.
$text = 'Hello, world!';

$text = strtoupper($text);
echo $text;

// 2. Дана строка 'PHP'. Сделайте из нее строку 'php' (DONE).

// mb_strtolower — Приведение строки к нижнему регистру (strtolower - для английских символов).
$text = 'PHP';

$text = strtolower($text);
echo $text;

// 3. Дана строка 'москва'. Сделайте из нее строку 'Москва' (DONE).

// ucfirst — Преобразует первый символ строки в верхний регистр.
mb_internal_encoding("UTF-8");
// Пишем функцию для русского регистра.
function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1); // mb_substr — Возвращает часть строки.
}

echo mb_ucfirst("москва");

// 4. Дана строка 'МОСКВА'. Сделайте из нее строку 'Москва' (DONE).

$text = 'МОСКВА';

$text = ucfirst(strtolower(mb_convert_case($text, MB_CASE_TITLE, 'UTF-8'))); // mb_convert_case — Производит смену регистра символов в строке.
echo $text;

// 5. Дана строка 'иванов иван иванович'. Сделайте из нее строку 'Иванов Иван Иванович' (DONE).

$text = 'иванов иван иванович';

$text = mb_convert_case($text, MB_CASE_TITLE, "UTF-8");
echo $text;

//--------------------Конец-------------------------------

?>
