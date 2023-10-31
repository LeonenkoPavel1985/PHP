
<!--22. Передайте в адресную строку GET-параметр date, в котором будет записана дата в формате '2013-12-31'. Преобразуйте ее в формат '31.12' (день.месяц) (DONE).-->

<form action="index.php" method="get">
    Введите дату в формате ГГГГ-ММ-ДД: <input type="text" name="date" />
    <input type="submit" value="Отправить" />
</form>

<?php

    if (isset($_GET['date'])) {
    $date = date('d.m', strtotime($_GET['date']));
    echo 'Преобразованная дата: ' .  $date;
    }

?>

<?php

// 23. Найдите количество дней, часов, минут, секунд, прошедших с 5:49:59 1-го числа текущего месяца до настоящего момента (DONE).
/*
$dateTimeNow = time();
$startTimeDate = mktime(5, 49, 59, 10, 1, 2023);

$sec = abs($dateTimeNow - $startTimeDate);
echo 'Количство секунд в указанном периоде: ' . $sec . ' секунд.' . '<br>'; // abs — Абсолютное значение.

$min = abs($sec / 60);
echo 'Количество минут в указанном периоде: ' . round($min,2) . ' минут(-ы).' . '<br>';

$hours = abs($min / 60);
echo 'Количество часов в указанном периоде: ' . round($hours, 2) . ' часа(-ов).' . '<br>';

$days = abs($hours / 24);
echo 'Количество дней в указанном периоде: ' . round($days, 2) . ' дня(-ей).';
*/

// 24. Узнайте сколько дней осталось до Нового Года (DONE).

$dateTimeNow = time();
$startTimeDate = mktime(0, 0, 0, 12, 31, 2023);

$newYear = abs(($dateTimeNow - $startTimeDate) / 60 / 60 / 24);
echo 'До Нового Года осталось: ' . round($newYear) . ' дня(-ей).';

?>