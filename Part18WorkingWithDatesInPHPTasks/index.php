
<!--22. Передайте в адресную строку GET-параметр date, в котором будет записана дата в формате '2013-12-31'. Преобразуйте ее в формат '31.12' (день.месяц) (DONE).-->
<!--*******************
<form action="index.php" method="get">
    Введите дату в формате ГГГГ-ММ-ДД: <input type="text" name="date" />
    <input type="submit" value="Отправить" />
</form>

<?php
/*
    if (isset($_GET['date'])) {
    $date = date('d.m', strtotime($_GET['date']));
    echo 'Преобразованная дата: ' .  $date;
    }
    */
?>
******************-->

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

// 24. Узнайте сколько дней осталось до Нового Года (DONE).

$dateTimeNow = time();
$startTimeDate = mktime(0, 0, 0, 12, 31, 2023);

$newYear = abs(($dateTimeNow - $startTimeDate) / 60 / 60 / 24);
echo 'До Нового Года осталось: ' . round($newYear) . ' дня(-ей).';

// 25. Найдите сколько воскресений будет в определенном году $year (DONE).

$year = 2023;
$count = 0; // Счетчик воскресений.

// Создадим цикл, который будет проходить по каждому дню года и проверять, является ли этот день воскресеньем.
// date() используется для получения номера дня недели ($weekday). Эта функция используется для проверки, является ли день воскресеньем: 0 – воскресенье;
//1 – понедельник; 2 – вторник; 3 – среда; 4 – четверг; 5 – пятница; 6 – суббота.

for ($day = 1; $day <= 365; $day++) {
    $date = date('Y-m-d', strtotime($year . "-01-01 + {$day} days"));
    $weekday = date('w', strtotime($date));
    if ($weekday == 0) {
        $count++;
    }
}

echo 'В ' . $year . ' году: ' . $count . ' воскресенья(-ий).';
*/
?>

<!--26. Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдитевсе пятницы 13-е в этом году. Результат выведите в виде списка дат (DONE).-->
<!--*************
<form action="index.php" method="get">
    Введите год в формате ГГГГ: <input type="text" name="year" />
    <input type="submit" value="Потвердить" />
</form>

<?php
/*
if (isset($_GET['year'])) {
    $year = $_GET['year'];
    $friday = [];
    for ($i = 1; $i <= 12; $i++) {
        $timestamp = mktime(0, 0, 0, $i, 13, $year);
        if (date('w', $timestamp) == 5) {
            $friday[] = date('d.m.Y', $timestamp);
        }
    }
    var_dump($friday);
}
*/
?>
*************-->

<!--27. Дана дата в формате '2013-12-31'. Определите знак зодиака, к которому относится данная дата (DONE).-->
<!--****************
<form action="index.php" method="post">
    Введите дату в формате ГГГГ-ММ-ДД: <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" />
</form>
    -->
<?php
/*
if (isset($_REQUEST['date'])) {
    $date = explode('-', $_REQUEST['date']);
    $dateStr = $date[1] . $date[2]; // Склеиваем массив в строку. Год выпускаем, так как он не играет роли для определения знака задиака.

    if ($dateStr >= '0321' and $dateStr <= '0419') {
        echo 'Вы овен.';
    } else if ($dateStr >= '0420' and $dateStr <= '0520') {
        echo 'Вы телец.';
    } else if ($dateStr >= '0521' and $dateStr <= '0620') {
        echo 'Вы близнецы.';
    } else if ($dateStr >= '0621' and $dateStr <= '0722') {
        echo 'Вы рак.';
    } else if ($dateStr >= '0723' and $dateStr <= '0822') {
        echo 'Вы лев.';
    } else if ($dateStr >= '0823' and $dateStr <= '0922') {
        echo 'Вы дева.';
    } else if ($dateStr >= '0923' and $dateStr <= '1022') {
        echo 'Вы весы.';
    } else if ($dateStr >= '1023' and $dateStr <= '1121') {
        echo 'Вы скорпион.';
    } else if ($dateStr >= '1122' and $dateStr <= '1221') {
        echo 'Вы стрелец.';
    } else if (($dateStr >= '1222' and $dateStr <= '1231') or ($dateStr >= '0101' and $dateStr <= '0119')) {
        echo 'Вы козерог.';
    } else if ($dateStr >= '0120' and $dateStr <= '0218') {
        echo 'Вы водолей.';
    } else if ($dateStr >= '0219' and $dateStr <= '0320') {
        echo 'Вы рыба.';
    }
}
*/
?>

<!--28. Дан GET-параметр date, в который вводится год в формате '2013'. Узнайте, какой это будет год по восточному календарю.-->