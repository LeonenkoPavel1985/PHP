<meta charset="utf-8" />

<?php

// 10. Создайте переменую $text и присвойте ей значение 'Мама мыла раму!'. Выведите символы: ы, м, а, у, ! всеми возможными способами (DONE).

$text = 'Мама мыла раму!';

// Обращаемся к отдельным символам строки как к элементам массива по числовому индексу. Индексация символов, как и в массиве, начинается с нуля.

echo $text;

echo $text[6];
echo $text[2];
echo $text[1];
echo $text[13];
echo $text[14];

// mb_strpos - используем функцию возвращающую позицию подстроки или символа в стороке.

$search = "!";
$position = mb_strpos($text, $search);
echo $position;

// 11. Создайте переменую $game и присвойте ей значение 'Путешественник'.Обращаясь с этим словом как с отдельными символами составьте различные русские слова.

$game = 'Путешественник';

// Путник.

echo $game[0];
echo $game[1];
echo $game[2];
echo $game[11];
echo $game[12];
echo $game[13];

// Свет.

echo $game[6];
echo $game[8];
echo $game[9];
echo $game[2];

// PHP Part3 Accessing String Characters(DONE).

?>