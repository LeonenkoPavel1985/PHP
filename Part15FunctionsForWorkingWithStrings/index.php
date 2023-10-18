<?php

//-------------------Начало-------------------------------
/*
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
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------
/*
// Работа с strlen, substr.

// strlen — Получить длину строки.
// substr — Возвращает часть строки.

// 6.  Дана строка 'я учу PHP!'. Найдите количество символов в этой строке (DONE).

$text = 'я учу PHP!';

echo 'Количество символов в троке равно: ' . iconv_strlen($text) . '.'; // iconv_strlen() — Возвращает количество символов строки (включая пробелы).

// 7. Дана строка 'я учу PHP!'. Вырежите из нее слово 'учу' и слово 'PHP' (DONE).

$text = 'я учу PHP!';

echo "$text <br>";
$pos = mb_strpos($text, 'я'); // mb_strpos — Поиск позиции первого вхождения одной строки в другую.
$new = mb_substr($text, 0, $pos + 1); // mb_substr — Возвращает часть строки.
echo $new;

// 8. Дана переменная $str, в которой хранится какой-либо текст. Реализуйте обрезание длинного текста по следующему принципу: если количество символов этого текста
// больше заданного в переменной $n, то в переменную $result запишем первые $n символов строки $str и добавим в конец троеточие '...'. В противном случае в переменную $result запишем содержимое переменной $str (DONE).

$str = 'Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку.';
$n = 30; // Меняем количество символов для теста.

if ($n > 20) {
$result = wordwrap($str, $n, "...<br>\n"); // wordwrap — Переносит строку по указанному количеству символов.
    echo $result;
} else {
    echo $str;
}

// 9. Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что
// пароль подходит, иначе сообщение о том, что нужно придумать другой пароль (DONE).

$password = 'Евдокия';
$len = mb_strlen($password); // Длинна строки (mb_strlen — Получает длину строки).

if ($len > 5 and $len < 10) {
    echo 'Пароль подходит.';
} else {
    echo 'Пароль не подходит.';
}
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------

// Работа с str_replace.

// str_replace — Заменить все вхождения строки поиска строкой замены.

// 10. Дана строка 'Я-учу-PHP!'. Замените все дефисы на тег '<br>' (DONE).
/*
$str = 'Я-учу-PHP!';

echo str_replace('-', "<br>", $str); // Первый аргумент - что меняем, второй - на что меняем, третий наша строка.
*/

// 11. Дана строка '31.12.2013'. Замените все точки на дефисы (DONE).
/*
$str = '31.12.2013';

echo str_replace('.', '-', $str);
*/

// 12. Дана строка $str. Замените смайлики ':)', ':(', '^-^', которые встречаются в этой строке на соответсвующие картинки (<img src=''>) (DONE).
/*
$str = 'Павел :), Антон :(, Андрей ^-^';

$smiley_1 = ':)';
$smiley_2 = ':(';
$smiley_3 = '^-^';

$imagePath_1 = __DIR__ . './images/1.png';
$imagePath_2 = __DIR__ . './images/2.png';
$imagePath_3 = __DIR__ . './images/3.png';

str_replace($smiley_1, '<img src="$imagePath_3">', $str);
str_replace($smiley_2, '<img src="$imagePath_1">', $str);
str_replace($smiley_3, '<img src="$imagePath_2">', $str);

echo $str;
*/

// 13. Дана переменная $str, в которой хранится строка русского текста. Напишите скрипт, который запишет транслит этого текста в переменную $translit. Напишите
// также скрипт, который выполнит обратную операцию (DONE).

$str = 'Леоненко Павел';

$arr_en = array('Леоненко' => 'Leonenko', 'Павел' => 'Pavel');
$translit_en = str_replace(array_keys($arr_en), array_values($arr_en), $str);

echo $translit_en . "<br>";

$arr_ru = array('Leonenko' => 'Леоненко', 'Pavel' => 'Павел');
$translit_ru = str_replace(array_keys($arr_ru), array_values($arr_ru), $translit_en);

echo $translit_ru;

//--------------------Конец-------------------------------

?>
