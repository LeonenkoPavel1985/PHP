<?php

// РАБОТА С ДАТАМИ В PHP.

// Timestamp: time и mktime.

// time() — Возвращает текущий момент времени в формате timestamp. Формат timestamp — это количество секунд, прошедшее с 1-го января 1970 года по заданный момент времени.
// mktime() — Переводит заданную дату в формат timestamp.
// date() — Выводит дату в заданном формате. 1-м параметром функция принимает формат, а 2-м необязательным параметром — момент времени в формате timestamp. Если 2-й параметр
// не указан — возратится текущий момент времени, если указан — то заданный.

// 1. Выведите текущее время в формате timestamp (DONE).

// timestamp php - Это текущее время в секундах начиная с 1 января 1970, 00:00:00.
// time() — Возвращает текущую временную метку Unix. Возвращает текущее время, измеряемое в секундах с начала эпохи Unix (1 января 1970 г., 00:00:00 по Гринвичу).

// Первый вариант.

echo 'Текущее время: ' . time() . '.' . "<br>"; // Возвращаемое значение — большое целое число, которое представляет количество секунд, прошедших с начала эпохи.

// Второй вариант.
// date — Форматирует временную метку Unix.
// Функция date() имеет два параметра. Первый параметр определяет формат даты и времени. Вот полный список допустимых форматов даты и времени. Второй параметр — целое число, указывающее временную метку.

$cerrent_time = time();
echo 'Текущее время: ' . date('Y-m-d g:ia', $cerrent_time) . '.' . "<br>";

// 2. Выведите 1 января 2025 года в формате timestamp (DONE).

// mktime — Получить временную метку Unix для даты.

// Первый вариант.

echo 'Дата в секундах с начала эпохи: ' .  mktime(0, 0, 0, 1, 1, 2025) . '.' . "<br>"; // количество секунд сначала эпохи. Аргументы часы, минуты, секунды, месяц, день, год.

// Второй вариант.

echo 'Указанная дата: ' . date("d-M-Y", mktime(0, 0, 0, 1, 1, 2025)) . '.' . "<br>";

// 3. Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен (DONE).

$yearThis = date('Y'); // Задаем текущий год.
$date = date("d-M-Y", mktime(0, 0, 0, 12, 31, $yearThis));

echo '31 декабря текущего года: в секундах с начала эпохи: ' . mktime(0, 0, 0, 12, 31, $yearThis) . '.' . "<br>";
echo '31 декабря текущего года: ' . $date . '.' . "<br>";

// 4. Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента (DONE).

$dateTimeTodey = time(); // Текущая дата.
$startTimeDate = mktime(13, 12, 59, 3, 15, 2000);
$seconds = $dateTimeTodey - $startTimeDate;

echo 'Количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента равно: ' . $seconds . '.' . "<br>";

// 5. Найдите количество секунд $sec, прошедших с 7:23:48 1-го числа текущего месяца до настоящего момента. Найдите количество минут, часов и дней, содержащихся в $sec
// (не одновременно, а последовательно: сначала минуты, потом часы и т.д.) (DONE).

$dateTimeTodey = time();
$startTimeDate = mktime(7, 23, 48, 10, 1, 2023);

$sec = $dateTimeTodey - $startTimeDate;
$min = $sec/60;
$hours = $min / 60;
$days = $hours / 24;

echo 'Количество секунд, прошедших с 7:23:48 1-го числа текущего месяца до настоящего момента равно: ' . $sec . '.' . '<br>';
echo 'Количесво минут в указанном периоде: ' . round($min, 2) . ' минут(-ы).' . '<br>';
echo 'Количесво часов в указанном периоде: ' . round($hours, 2) . ' часа(-ов).' . '<br>';
echo 'Количесво дней в указанном периоде: ' . round($days, 2) . ' дня(-ей).';

// Функция date.

// date — Форматирует временную метку Unix (принимает формат - разделитель можно указать самому и дату) (DONE).

// 6. Выведите на экран текущий год, день, месяц, час, минуту, секунду.

$today = date('Y.m.d , H:i:s');

echo 'Сейчас: ' . $today . '.' . '<br>';

// 7. Выведите текущую дату-время в форматах '2013-12-31', '31.12.2013', '31.12.13', '12:59:59' (DONE).

$todayOne = date('Y-m-d');
$todayTwo = date('d.m.Y');
$todayThree = date('d.m.y');
$todayFour = date('H:i:s');

echo $todayOne . '<br>';
echo $todayTwo . '<br>';
echo $todayThree . '<br>';
echo $todayFour;

// 8. С помощью функций mktime и date выведите 13 февраля 2015 года в формате '31.12.2013' (DONE).

$date = date('d.m.Y', mktime(0, 0, 0, 2, 13, 2015)); // Аргументы mktime(часы, минуты, секунды, месяц, день, год).

echo 'Указанная дата: ' . $date . '.';

// 9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения (DONE).

$week = array('Воскресенье', 'Понедельник', 'Втоник', 'Среда', 'Четверг', 'Пятница', 'Суббота'); // Смещается на один день, массив с воскресенья (нумерация индексов массива с 0 элмента).

$thisDay = $week[date('w', time())]; // w – день недели (0 - воскресенье, 1 - понедельник и т.д.).
$birthday = $week[date('w', mktime(5, 30, 45, 7, 9, 2006))];

echo 'Название текущего дня недели: ' . $thisDay . '.' . '<br>';
echo 'Днем недели в мой день рождения 09.07.2006 был(-о): ' . $birthday . '.';

// 10. Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date (DONE).

$month = ['0', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']; // Первый элемент 0 нумерация элементов с нулевого.

$currentMonth = $month[date('n', time())];

echo 'Текущий месяц: ' . $currentMonth . '.';

// 11. Найдите номер текущего дня от начала месяца (DONE).

$thisDay = date('j', time()); // j – номер дня в месяце без предваряющего нуля.

echo 'Номер текущего дня от начала месяца: ' . $thisDay . '.';

// 12. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен (DONE).

$amountDays = date('t', time()); // t – количество дней в указанном месяце.

echo 'Количество дней в текущем месяце: ' . $amountDays . '.';

?>

<!--// 13. Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год (DONE).-->

<form action="index.php" method="post">
    Введите год: <input type="text" name="year" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

if (isset($_REQUEST['year'])) {
    $year = trim(strip_tags($_REQUEST['year'])); // trim — Удаляет пробелы (или другие символы) из начала и конца строки. Strip_tags — Удаляет теги HTML и PHP из строки.

    if (strlen($year) == 4) { // Проверяем на 4 цифры. strlen — Получить длину строки.
        if (date('L', mktime(0, 0, 0, 1, 1, $year))) { // L – 1, если високосный год, 0, если не високосный.
            echo 'Високосный год.';
        } else {
            echo 'Не високосный год.';
        }
    } else {
        echo 'Ошибка ввода (число должно быть четырехзначным) !!!';
    }
}

?>

<!--14. Сделайте форму, которая спрашивает дату в формате '31.12.2013'. С помощью функций explode и mktime переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату (DONE).-->

<form action="index.php" method="post">
    Введите дату в формате 'ДД.ММ.ГГГГ': <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

if (isset($_REQUEST['date'])) {
    $date = trim(strip_tags($_REQUEST['date']));
    $arrDate = explode('.', $date); // Дату преобразуем в массив с разделителем точкой (explode — Разбивает строку с помощью разделителя).
    $newDate = mktime(0, 0, 0, $arrDate[1], $arrDate[0], $arrDate[2]);
    $wordsDate = ['Воскресенье', 'Понедельник', 'Втоник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    echo 'Указанная дата: ' . $wordsDate[date('w', $newDate)] . '.';
}

?>

<!--15. Сделайте форму, которая спрашивает дату в формате '2013-12-31'. С помощью функций explode и mktime переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату (DONE).-->

<form action="index.php" method="post">
    Введите дату в формате 'ГГГГ-ММ-ДД': <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

if (isset($_REQUEST['date'])) {
    $date = explode('-', trim(strip_tags($_REQUEST['date'])));
    $newDate = mktime(0, 0, 0, $date[1], $date[2], $date[0]);
    $wordsDate = [1=> 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']; // Начало с 1.
    echo 'Месяц указанной вами даты: ' . $wordsDate[date('n', $newDate)] . '.';
}

?>

<!--16. Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025' (DONE).-->

<form action="index.php" method="post">
    Веедите дату в формате 'ГГГГ-ММ-ДД ЧЧ:ММ:СС': <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

    if (isset($_REQUEST['date'])) {
       $formatDate = date('H:i:s d.m.Y', strtotime($_REQUEST['date'])); // strtotime — анализирует любое текстовое описание даты и времени на английском языке в временную метку Unix.
       echo $formatDate;
    }
    
?>

<!--Сравнение дат-->

<!--17. Сделайте форму, которая спрашивает две даты в формате '2013-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран (DONE).-->

<form action="index.php" method="post">
    Введите первую дату в формаие 'ГГГГ-ММ-ДД': <input type="text" name="date1" />
    <br />
    <br />
    Введите вторую дату в формате 'ГГГГ-ММ-ДД': <input type="text" name="date2" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

if (isset($_REQUEST['date1']) and isset($_REQUEST['date2'])) {
    $date1 = explode('-', strip_tags(trim($_REQUEST['date1'])));
    $date2 = explode('-', strip_tags(trim($_REQUEST['date2'])));
    $dateNew1 = mktime(0, 0, 0, $date1[1], $date1[2], $date1[0]);
    $dateNew2 = mktime(0, 0, 0, $date2[1], $date2[2], $date2[0]);

    if ($dateNew1 > $dateNew2) {
        echo 'Первая дата: ' . date('Y-m-d', $dateNew1) . ' больше второй: ' . date('Y-m-d', $dateNew2) . '.';
    } else if ($dateNew1 < $dateNew2) {
        echo 'Вторая дата: ' . date('Y-m-d', $dateNew2) . ' больше первой: ' . date('Y-m-d', $dateNew1) . '.';
    }
}

?>

<!--На strtotime.-->

<?php

// strtotime — анализирует любое текстовое описание даты и времени на английском языке в временную метку Unix.

// 18. Дана дата в формате '2013-12-31'. С помощью функции strtotime преобразуйте ее в формат '31-12-2013' (DONE).

$date = '2013-12-31';

echo date('d-m-Y', strtotime($date));

?>

<!--19. Сделайте форму, которая спрашивает дату-время в формате '2013-12-31T12:13:59'. С помощью функции strtotime преобразуйте ее в формат '12:13:59 31.12.2013' (DONE).-->

<form action="index.php" method="post">
    Введите дату в формате 'ГГГГ-ММ-ДД ЧЧ:ММ:СС': <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

if (isset($_REQUEST['date'])) {
    echo 'Дата в формаие ЧЧ:ММ:СС ГГГГ-ММ-ДД: ' . date('H:i:s d.m.Y', strtotime($_REQUEST['date'])) . '.';
}

?>

<?php

// Прибавление и отнимание от дат.

// date_modify — Изменение временной метки. Позволяет прибавлять и отнимать от даты определенные промежутки времени (DateTime::modify).
// Дата при этом должна быть объектом, созданным функцией date_create. Функция изменяет сам переданный объект, и возвращает также измененный объект 'дата'.
// date_create — Создаёт новый объект DateTime.
// Псевдоним DateTime::format(). Возвращает дату, отформатированную согласно переданному формату.

// 20. Прибавьте к дате 31.12.2013 один день. Результат выведите в том же формате (DONE).

$date = date_create('31.12.2013');

// Первый способ Процедурный стиль.
date_modify($date, '+ 1 day');
echo date_format($date, 'd.m.Y') . '<br>'; // Первый аргумент дата, второй формат.

// Второй способ (Объектно-ориентированный стиль).

$date->modify('+1 day');
echo $date->format('d.m.Y');

// 21. В переменной $date лежит дата в формате '2013-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня (DONE).

$date = date_create('2013-12-31');

echo 'К дате 2013-12-31 прибавляем 2 дня: ' . date_format(date_modify($date, '+ 2 day'), 'Y-m-d') . '.' . '<br>';
echo 'К дате 2014-01-02 прибавляем 1 месяц и 3 дня: ' . date_format(date_modify($date, '+ 1 month 3 day'), 'Y-m-d') . '.' . '<br>';
echo 'К дате 2014-02-05 прибавляем 1 год: ' . date_format(date_modify($date, '+ 1 year'), 'Y-m-d') . '.' . '<br>';
echo 'К дате 2015-02-05 отнимаем 3 дня: ' . date_format(date_modify($date, '- 2 day'), 'Y-m-d') . '.';

?>

<!--Part 17 Working With Dates In PHP (DONE).-->