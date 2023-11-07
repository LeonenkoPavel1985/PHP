<?php
/*------------------------------------------------------------------------------------------
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

// 2. Дан массив $arr. Подсчитайте количество элементов этого массива (DONE).

// Заполненный вручную.
$arr = ['1', '60', '28', '87', '90', '77', '28'];

$countArr = count($arr);

echo 'Элементов в массиве: ' . $countArr . '.';

// Заполненный через range.
$arr = range(0, 25);
echo join(' ', $arr) . '<br>';
$countArr = count($arr);

echo 'Элементов в массиве: ' . $countArr . '.';

// 3. Дан массив $arr. Выведите на экран первый и последний элемент данного массива (DONE).

// Первый вариант.
$arr = array(4, 25, 78, 99, 15);

$first = array_shift($arr); // array_shift — Сдвинуть элемент с начала массива. сдвигает первое значение off arrayи возвращает его, сокращая arrayна один элемент и перемещая все вниз.
echo 'Первый элемент массива: ' . $first . '.' . '<br>';

$end = $arr[count($arr) - 1];
echo 'Последний элемент массива: ' . $end . '.';

// Второй вариант.
$arr = array(4, 25, 78, 99, 15);

$first = current($arr); //current — Возвращает текущий элемент массива. У каждого массива имеется внутренний указатель на его "текущий" элемент, который инициализируется первым элементом, добавленным в массив.
echo 'Первый элемент массива: ' . $first . '.' . '<br>';

$end = end($arr); // end — Устанавливает внутренний указатель массива на его последний элемент.
echo 'Последний элемент массива: ' . $end . '.';
--------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------------------------------
// На array_sum и array_product.

// array_sum — Вычислить сумму значений в массиве.
// array_product — Вычислить произведение значений массива.

// 4. Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов данного массива (DONE).

$arr = [10, 25, 50, 75, 5, 9, 11];

$averageValue = array_sum($arr)/count($arr);
echo 'Среднее арифметическое элементов массива равно: ' . round($averageValue, 2) . '.';

// 5. Создайте массив, заполненный числами от 1 до 300. Найдите произведение элементов данного массива (DONE).

$arr = range(1, 300);

$productElements = array_product($arr);
echo 'Произведение элементов массива равно: ' . $productElements . '.'; // Получается бесконечность.
---------------------------------------------------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------------------------------------------------
// На array_merge и array_slice.

// array_merge — Объединить один или несколько массивов.
// array_slice — Извлекает фрагмент массива. array_slice() возвращает последовательность элементов массиваarray, указанную параметрами offsetиlength.

// 6. Даны два массива: первый с элементами '1', '2', '3', второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами '1', '2', '3', 'a', 'b', 'c' (DONE).

$arr1 = array('1', '2', '3');
$arr2 = array('a', 'b', 'c');

$arrUnion = array_merge($arr1, $arr2);
echo 'Объедененные массивы: ' . join(' ', $arrUnion) . '.' . '<br>';
var_dump($arrUnion);

// 7. Дан массив с элементами '1', '2', '3', '4', '5'. С помощью функции array_slice создайте массив $b с элементами '2', '3', '4' (DONE).

$arr = ['1', '2', '3', '4', '5'];

$b = array_slice($arr, 1, 3); // Аргумента массив, начало массива, конец массива.
echo join(' ', $b) . '<br>';
var_dump($b);
----------------------------------------------------------------------------------------------------------------------*/

// На array_keys, array_values, array_combine.

// array_keys — Возвращает все или некоторое подмножество ключей массива.
// array_values — Выбирает все значения массива.
// array_combine — Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений.


// 8. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Запишите в массив $key английские названия цветов, а в $values – русские (DONE).
/*---------------------------------------------------------------------------------------------------------------------
$arr = array('green' => 'зеленый', 'blue' => 'голубой', 'red' => 'красный');

$key = array_keys($arr);
echo join(' ', $key) . '<br>';
print_r($key);

echo '<br>';

$values = array_values($arr);
echo join(' ', $values) . '<br>';
print_r($values);

// 9. Даны два массива: 'green', 'blue', 'red' и ''зеленый', 'голубой', 'красный'. Создайте с их помощью массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Используйте
// функцию array_combine (DONE).

$arr_one = ['green', 'blue', 'red'];
$arr_two = ['зеленый', 'голубой', 'красный'];

$arr = array_combine($arr_one, $arr_two); // Первый аргумент - первый массив (keys), второй аргумент - второй массив (values).
print_r($arr);
----------------------------------------------------------------------------------------------------------------------*/

// На array_flip, array_count_values, array_reverse, array_unique.

// array_flip — Меняет все ключи на связанные с ними значения в массиве.
// array_count_values — Подсчитывает количество вхождений каждого отдельного значения в массиве.
// array_reverse — Возвращает массив с элементами в обратном порядке.
// array_unique — Убирает повторяющиеся значения из массива.

// 10. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Поменяйте местами ключи и значения (DONE).
/*
$arr = array('green' => 'зеленый', 'blue' => 'голубой', 'red' => 'красный');
print_r($arr);
echo '<br>';

$arr_result = array_flip($arr);
print_r($arr_result);
*/

// 11. Дан массив с элементами '1', '2', '3', '4', '5'. Создайте массив с элементами '5', '4', '3', '2', '1' (DONE).
/*
$arr = ['1', '2', '3', '4', '5'];
echo join(' ', $arr) . '<br>';
print_r($arr);

echo '<br>';

$arr_result = array_reverse($arr);
echo join(' ', $arr_result) . '<br>';
print_r($arr_result);
*/

// 12. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы (DONE).

$arr = array('a', 'b', 'c', 'b', 'a');
echo join(' ', $arr) . '<br>';
print_r($arr);

echo '<br>';

$arr_result = array_unique($arr);
echo join(' ', $arr_result) . '<br>';
print_r($arr_result);


?>
