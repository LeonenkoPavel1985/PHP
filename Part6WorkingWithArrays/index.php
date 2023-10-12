<?php

// 6. Создайте массив $arr=array('joomla', 'wordpress', 'netcat'). Выведите значение массива на экран с помощью команды var_dump()(DONE).

$arr = array('joomla', 'wordpress', 'netcat');

// var_dump — выводит информацию о переменной.
var_dump($arr);

// 7. С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов(DONE).

$arr = array('joomla', 'wordpress', 'netcat');

// Первый способ.
// Так как нумерация элементов в массиве идет с 0, то первый элемен будет 0.
echo $arr[0];
echo $arr[1];
echo $arr[2];

// Второй способ.
print_r($arr);

// 8. Создайте массив $arr=array('html', 'css', 'php') и с его помощью выведите на экран строку 'php, html, css'(DONE).

$arr = array('html', 'css', 'php');

// Первый способ.
echo 'Массив: ' . $arr[0] . ' ' . $arr[1] . ' ' . $arr[2] . '.';

// Второй способ.
// Функции implode() или join(). С их помощью можно "склеить" элементы массива в строку, через любой разделитель. Одно и тоже. Просто псевдоним. Первый аргумент разделитель, второй массив.
echo implode(' ', $arr);
echo join(' ', $arr);

// 9. Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массивана второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной(DONE).

$arr = [2, 5, 3, 9];

$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo 'Результат: ' . $result . '.';

// 10. Создайте массив $arr с элементами 'a', 'b', 'c', 78 двумя различными способами(DONE).

// Первый способ.
$arr = array('a', 'b', 'c', 78);
echo join(' ', $arr);

// Второй способ.
$arr = ['a', 'b', 'c', 78];
echo join(' ', $arr);

// 11. Создайте массив $arr с элементами 'Я', 'учу', 'PHP', '!'. С его помощью выведите на экран фразу 'Я учу PHP!'(DONE).

$arr = array('Я', 'учу', 'PHP', '!');
echo implode(' ', $arr);

//12. Создайте массив $arr=array('a', 'b', 'c', 'd', 'e'). С помощью одной переменной $var поменяйте местами элементы 'b' и 'c'(DONE).

$arr = array('a', 'b', 'c', 'd', 'e');
//Сохраняем элемент массива 'b' в переменную $var.
$var = $arr[1];
// Заменяем  элемент 'b' массива на элемент 'c'.
$arr[1] = $arr[2];
// А теперь заменяем элемент 'c' значением из переменной $var.
$arr[2] = $var;
echo join(' ', $arr);


// 13. Создайте массив $arr=array('a', 'b', 'c', 'd', 'e'). С помощью одной переменной $var сделайте из него массив array('e', 'd', 'c', 'b', 'a')(DONE).
$arr = array('a', 'b', 'c', 'd', 'e');

//Функция array_reverse — возвращает массив с элементами в обратном порядке.
$var = array_reverse($arr);
echo join(' ', $var);

// Part 6 Working With Arrays (DONE).

?>
