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
/*
// Работа с str_replace.

// str_replace — Заменить все вхождения строки поиска строкой замены.

// 10. Дана строка 'Я-учу-PHP!'. Замените все дефисы на тег '<br>' (DONE).

$str = 'Я-учу-PHP!';

echo str_replace('-', "<br>", $str); // Первый аргумент - что меняем, второй - на что меняем, третий наша строка.

// 11. Дана строка '31.12.2013'. Замените все точки на дефисы (DONE).

$str = '31.12.2013';

echo str_replace('.', '-', $str);

// 12. Дана строка $str. Замените смайлики ':)', ':(', '^-^', которые встречаются в этой строке на соответсвующие картинки (<img src=''>) (DONE).

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

// 13. Дана переменная $str, в которой хранится строка русского текста. Напишите скрипт, который запишет транслит этого текста в переменную $translit. Напишите
// также скрипт, который выполнит обратную операцию (DONE).

$str = 'Леоненко Павел';

$arr_en = array('Леоненко' => 'Leonenko', 'Павел' => 'Pavel');
$translit_en = str_replace(array_keys($arr_en), array_values($arr_en), $str);

echo $translit_en . "<br>";

$arr_ru = array('Leonenko' => 'Леоненко', 'Pavel' => 'Павел');
$translit_ru = str_replace(array_keys($arr_ru), array_values($arr_ru), $translit_en);

echo $translit_ru;
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------

// Работа с explode, implode.

// explode — Разбивает строку с помощью разделителя. Возвращает массив строк, полученных разбиением строки string с использованием separator в качестве разделителя.
// implode — Соединяет элементы массива строкой.

// 14. Дана строка 'я учу PHP!'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива (DONE).
/*
$str = 'я учу PHP!';

$arr = explode("  ", $str); // Первый аорумент разделитель, второй строка.
echo $arr[0];
echo $arr[1];
echo $arr[2];

// 15.  Дан массив с элементами 'html', 'css', 'php', 'js'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми (DONE).

$arr = ['html', 'css', 'php', 'js'];

//var_dump(implode(", ", $arr)); // var_dump — Выводит информацию о переменной.

$string = (implode(", ", $arr));
echo $string;

// 16. В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013' (DONE).

$date = '2013-12-31';

$date_arr = explode("-", $date); // Преобразуем в массив.
$date_implode = implode(".", array_reverse($date_arr)); // Преобразуем обратно в строку с новым разделителем (array_reverse — Возвращает массив с элементами в обратном порядке).

echo $date_implode;

// 17. В переменной $date лежит дата в формате '31.12.2013'. Преобразуйте эту дату в формат '2013-12-31' (DONE).

$date = '31.12.2013';

$date_arr = explode(".", $date);
$date_implode = implode("-", array_reverse($date_arr));

echo $date_implode;
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------
/*
// Работа с trim, ltrim, rtrim.

// trim — Удаляет пробелы (или другие символы) из начала и конца строки.
// ltrim — Удаляет пробелы (или другие символы) из начала строки.
// rtrim — Удаляет пробелы (или другие символы) из конца строки.

// 18. Дана строка ' php '. Сделайте из нее 3 разных строки с помощью функций класса trim: 'php', ' php', 'php ' (DONE).

$str = ' php ';

echo trim($str) . "<br>";
echo ltrim($str) . "<br>";
echo rtrim($str);
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------
/*
// Работа с strip_tags и htmlspecialchars.

// strip_tags — Удаляет теги HTML и PHP из строки.
// htmlspecialchars — Преобразует специальные символы в объекты HTML.

// 19. Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки (DONE).

$str = 'html, <b>php</b>, js';

echo strip_tags($str);


// 20. Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный (DONE).

$str = 'html, <b>php</b>, js';

echo htmlspecialchars($str);
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------
/*
// Работа с chr и ord.

// chr — Генерирует односимвольную строку по заданному числу.
// ord — Конвертирует первый байт строки в число от 0 до 255.

// 21. Узнайте код символов 'a', 'b', 'c', пробела (DONE).

echo 'Код символа a - ' . ord('a') . '.' . "<br>";
echo 'Код символа b - ' . ord('b') . '.' . "<br>";
echo 'Код символа c - ' . ord('c') . '.' . "<br>";
echo 'Код символа пробел - ' . ord(' ');

// 22. Изучите таблицу ASCII http://www.asciitable.com/. Определите границы, в которых располагаются буквы английского алфавита (DONE).

// 23. Выведите на экран символ с кодом 33 (DONE).

echo chr('33');

// 24. Запишите в переменную $str случайный символ — большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита (DONE).

// Первый вариант.

$str = mt_rand(65, 90); //mt_rand — Генерирует случайное значение методом с помощью генератора простых чисел на базе Вихря Мерсенна (от и до).
$str = chr($str);

echo $str;


// Второй вариант.
// A B C D E F G H I J K L M N O P Q R S T U V W X Y Z

$str = 'L';
echo ord($str);

// 25. Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while (DONE).

$str = '';
$len = 5;

for ($i = 1; $i <= $len; $i++) {
    $str .= chr(mt_rand(97, 122));
}

echo $str;
*/
//--------------------Конец-------------------------------


//-------------------Начало-------------------------------

// Работа с substr_count, str_word_count, str_split.

// substr_count — Возвращает число вхождений подстроки.
// str_word_count — Возвращает информацию о словах, входящих в строку (0 - возвращает количество найденных слов, 1 - возвращается массив, содержащий все слова, входящие в строку string, 2 - возвращается массив, индексами которого являются позиции в строке string, а значениями - соответствующие слова..
// str_split — Преобразует строку в массив.

// 26. Дана строка 'Мама мыла раму'. Узнайте количество букв 'a' и 'м', входящих в эту строку (DONE).
/*
$str = 'Мама мыла раму';

$count_a = substr_count($str, 'а'); // Первый аргумент строка, второй символ.
$count_m = substr_count($str, 'м');

echo 'Буква а встречается в строке: ' . $count_a . ' раза.' . "<br>";
echo 'Буква м встречается в строке: ' . $count_m . ' раза.' . "<br>";
*/

// 27. Скопируйте весь текст со страницы http://www.php.su/functions/?cat=strings, запишите его в переменную $str. Подсчитайте количество символов и количество слов в даннной строке (DONE).
/*
$str = 'Текст — зафиксированная на каком-либо материальном носителе человеческая мысль; в общем плане связная и полная последовательность символов.';

$count_symbols = strlen($str); // strlen — Получить длину строки.
$count_words = str_word_count($str, 0 , "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя"); // Для распознавания русских букв.

echo 'Количество символов в строке равно: ' . $count_symbols . '.' . "<br>";
echo 'Количество слов в строке равно: ' . $count_words . '.' . "<br>";
*/

// 28. Создайте массив гласных букв. С помощью этого массива подсчитайте количество гласных в строке $str. Результат представьте в виде ассоциативного массива, где ключами
// будут буквы, а элементами их количество (DONE).
/*
$arr = ['а', 'я', 'у', 'ю', 'о', 'е', 'ё', 'э', 'и', 'ы'];
$str = 'Мама мыла раму.';

$vowelsCounts = array_sum(array_intersect_key(array_count_values(str_split(strtolower($str))), array_flip($arr)));

echo $vowelsCounts;
*/

//29. Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90' (DONE).
/*
$str = '1234567890';

$arr = str_split($str, 2); // 1 - строка, 2 количество символов в элементе массива.

print_r($arr);
*/
//--------------------Конец-------------------------------


//---------------------Начало-----------------------------

// Работа с str_repeat, strrev.

// str_repeat — Возвращает повторяющуюся строку.
// strrev — Переворачивает строку задом наперёд.


// 30. Проверьте, является ли пара слов палиндромом (одинаково читается во всех направлениях, кот-ток, нос-сон) (DONE).
/*
$str = 'кот-ток';
$str = 'нос-сон';

function mb_strrev($str, $encoding = 'UTF-8') // Функция для русского языка.
{
    return mb_convert_encoding(strrev(mb_convert_encoding($str, 'UTF-16BE', $encoding)), $encoding, 'UTF-16LE');
}

$palindrome_str = mb_strrev($str);

if ($str == $palindrome_str) {
    echo 'Строка является палиндромом.';
} else {
    echo 'Строка не является палиндромом.';
}
*/

// 31. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat (DONE).
// x
// xx
// xxx
// xxxx
// xxxxx
/*
for ($i = 1; $i < 10; $i++)
    echo str_repeat('x', $i) . '<br>';
*/

// 32. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat (DONE).
// 1
// 22
// 333
// 4444
// 55555

for ($i = 1; $i < 10; $i++)
    echo str_repeat($i, $i) . '<br>';

//--------------------Конец-------------------------------


?>
