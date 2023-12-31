<?php
use UI\Controls\Form;

// 13. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10(DONE).

$arr = [4, 2, 5, 19, 13, 0, 10];

foreach ($arr as $element) {
    if ($element > 3 and $element < 10) {
        echo "$element <br/>";
    }
};

// 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4(DONE).
//Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'(DONE).

$e = 2;
//$e = 3;
//$e = 4;

$arr = array (4, 2, 5, 19, 13, 0, 10);

foreach ($arr as $value) {
    if ($value == 2 or $value == 3 or $value == 4 or $value==$e) {
        echo "Есть!</br>";
        break;
    }
    else {
        echo "Нет!</br>";
        break;
    }
}

// 15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10(DONE).

$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;

foreach ($arr as $value) {
    $count++;
}
echo 'Количество элементов в массиве: ' . $count . '.';

// 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке(DONE).
// 1, 2, 3 <br>
// 4, 5, 6 <br>
// 7, 8, 9 <br>

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 1;

foreach ($arr as $value) {
    if($count%3 == 0) {
        echo "$value<br>";
        $count = 1;
    }
    else {
        echo "$value, ";
        $count++;
    }
}

// 17. Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным (<b></b>). Текущий месяц должен храниться в переменной $month(DONE).

$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$month = getdate(); // getdate() - возвращает информацию о дате/времени. Только английское именование месяцев.

foreach ($arr as $arr) {
    if ($arr == $month["month"]) {
        echo "<b> $arr </b> <br>";
    }
    else {
        echo "$arr <br>";
    }
}

// 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным (<b></b>)(DONE).

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($arr as $value) {
    if ($value == 'Суббота' or $value == 'Воскресенье') {
        echo "<b>$value</b> </br>";
    }
    else
    {
        echo "$value </br>";
    }
}

// 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом (<i></i>). Текущий день должен храниться в переменной $day(DONE).

$arr = array ('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$day = getdate(); // Только английское именование дней.

foreach ($arr as $value) {
    if ($value == $day["weekday"]) {
        echo "<i>$value</i> <br>";
    }
    else {
        echo "$value <br>";
    }
}

// 20. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5(DONE).
// x
// xx
// xxx
// xxxx
// xxxxx

$i = 0;
$element = 'x';

while ($i < 20) {
    echo "$element <br>";
    $element = $element . 'x';
    $i++;
}

// 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5(DONE).
// 1
// 22
// 333
// 4444
// 55555

for ($i = 1; $i < 10; $i++) {
    $j = $i;
    while ($j > 0) {
        echo $i;
        $j--;
    }
    echo "<br>";
}

// 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while(DONE).
// xx
// xxxx
// xxxxxx
// xxxxxxxx
// xxxxxxxxxx

$elenment = 'xx';
for ($i = 0; $i < 5; $i++) {
    echo "$element <br>";
    $element = $element . 'xx';
}

// Part 12 Cycles Foreach While For Tasks (DONE).

?>
