
<!--22. Передайте в адресную строку GET-параметр date, в котором будет записана дата в формате '2023-12-31'. Преобразуйте ее в формат '31.12' (день.месяц) (DONE).-->

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

?>

<!--26. Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдитевсе пятницы 13-е в этом году. Результат выведите в виде списка дат (DONE).-->

<form action="index.php" method="get">
    Введите год в формате ГГГГ: <input type="text" name="year" />
    <input type="submit" value="Потвердить" />
</form>

<?php

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

?>

<!--27. Дана дата в формате '2023-12-31'. Определите знак зодиака, к которому относится данная дата (DONE).-->

<form action="index.php" method="post">
    Введите дату в формате ГГГГ-ММ-ДД: <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" />
</form>

<?php

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

?>

<!--28. Дан GET-параметр date, в который вводится год в формате '2023'. Узнайте, какой это будет год по восточному календарю (DONE).-->

<form action="index.php" method="get">
    Введите год в формате ГГГГ: <input type="text" name="year" />
    <br />
    <br />
    <input type="submit" value="Подтвердить" />
</form>
 
<?php

if (isset($_GET['year'])) {
    $year = $_GET['year'];

    if (strlen($year) == 4) {
        if ($year == 1960 or $year == 1972 or $year == 1984 or $year == 1996 or $year == 2008 or $year == 2020) {
            echo 'Вы крыса.';
        } else if ($year == 1961 or $year == 1973 or $year == 1985 or $year == 1997 or $year == 2009 or $year == 2021) {
            echo 'Вы бык.';
        } else if ($year == 1962 or $year == 1974 or $year == 1986 or $year == 1998 or $year == 2010 or $year == 2022) {
            echo 'Вы тигр.';
        } else if ($year == 1963 or $year == 1975 or $year == 1987 or $year == 1999 or $year == 2011 or $year == 2023) {
            echo 'Вы кролик.';
        } else if ($year == 1964 or $year == 1976 or $year == 1988 or $year == 2000 or $year == 2012 or $year == 2024) {
            echo 'Вы дракон.';
        } else if ($year == 1965 or $year == 1977 or $year == 1989 or $year == 2001 or $year == 2013 or $year == 2025) {
            echo 'Вы змея.';
        } else if ($year == 1966 or $year == 1978 or $year == 1990 or $year == 2002 or $year == 2014 or $year == 2026) {
            echo 'Вы лошадь.';
        } else if ($year == 1967 or $year == 1979 or $year == 1991 or $year == 2003 or $year == 2015 or $year == 2027) {
            echo 'Вы овца.';
        } else if ($year == 1968 or $year == 1980 or $year == 1992 or $year == 2004 or $year == 2016 or $year == 2028) {
            echo 'Вы обезьяна.';
        } else if ($year == 1969 or $year == 1981 or $year == 1993 or $year == 2005 or $year == 2017 or $year == 2029) {
            echo 'Вы петух.';
        } else if ($year == 1970 or $year == 1982 or $year == 1994 or $year == 2006 or $year == 2018 or $year == 2030) {
            echo 'Вы собака.';
        } else if ($year == 1971 or $year == 1983 or $year == 1995 or $year == 2007 or $year == 2019 or $year == 2031) {
            echo 'Вы свинья.';
        }
    } else {
        echo 'Вы не верно указали год !!!';
    }
}

?>

<?php

// 29. Узнайте какой день недели был 100 дней назад (DONE).

$date = date_create('02.11.2023'); // Для теста меняем дату.
$daysWeek= ['Воскресенье', 'Понедельник', 'Втоник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];

date_modify($date, '- 100 day');
$day = date_format($date, 'w');

echo 'Был день: ' . $daysWeek[$day] . '.';

// 30. Сделайте массив праздников. Если пользователь заходит на сайт в праздник — поздравьте его с этим праздником (DONE).

$arrHolidays = [
    '3112' => 'Новый год', '0701' => 'Рождество', '23.02' => 'День защитника Отечества', '0803' => 'Международный женский день',
    '0105' => 'Праздник Весны и Труда', '0905' => 'День победы', '1206' => 'День России', '0411' => 'День народного единства'];

$date = date('dm', time());

if (array_key_exists($date, $arrHolidays)) { // array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс.
    echo 'С праздником: ' . $arrHolidays[$date] . ' !!!';
}

?>

<!--31. Рассчитайте дату пасхи в заданном году. Алгоритм ее расчета найдите в поисковых системах (DONE).-->

<form action="index.php" method="get">
Введите год в формате ГГГГ: <input type="text" name="year" />
<input type="submit" value="Подтвердить" />
</form>

<?php

if (isset($_GET['year'])) {
    $year = $_GET['year'];
    $dateEaster = date('d M Y', easter_date($year)); // easter_date — Получить метку времени Unix, соответствующую полуночи на Пасху в заданном году.
    echo 'В ' . $year . ' будет: ' . $dateEaster . '.';
}

?>

<!--32. Сделайте сайт-гороскоп: пользователь заходит на сайт и вводит дату своего рождения. Сайт определяет его знак зодиака и выдает гороскоп на день захода
пользователя на сайт. Гороскопы храните в многомерном массиве, на неделю вперед (DONE).-->

<form action="index.php" method="get">
    Введите дату рождения в формате ДД.ММ.ГГГГ: <input type="text" name="date" />
    <br />
    <br />
    <input type="submit" value="Подтведтить" />
</form>

<?php

$horoscope = [
    'Овен' => ['10.10' => 'овен 10.10', '11.10' => 'овен 11.10'],
    'Телец' => ['10.10' => 'телец 10.10', '11.10' => 'телец 11.10'],
    'Близнецы' => ['10.10' => 'близнецы 10.11', '11.10' => 'близнецы 11.10'],
    'Рак' => ['10.10' => 'рак 10.10', '11.10' => 'рак 11.10'],
    'Лев' => ['10.10' => 'лев 10.10', '11.10' => 'лев 11.10'],
    'Дева' => ['10.10' => 'дева 10.10', '11.10' => 'дева 11.10'],
    'Весы' => ['10.10' => 'весы 10.10', '11.10' => 'весы 11.10'],
    'Скорпион' => ['10.10' => 'скорпион 10.10', '11.10' => 'скорпион 11.10'],
    'Стрелец' => ['10.10' => 'стрелец 10.10', '11.10' => 'стрелец 11.10'],
    'Козерог' => ['10.10' => 'козерог 10.10', '11.10' => 'козерог 11.10'],
    'Водолей' => ['10.10' => 'водолей 10.10', '11.10' => 'водолей 11.10'],
    'Рыбы' => ['10.10' => 'рыбы 10.10', '11.10' => 'рыбы 11.10']
];

if (isset($_GET['date'])) {
    $date = explode('.', $_REQUEST['date']);
    $dateStr = $date[1] . $date[0];

    $sign = ''; // Знак задиака.

    if ($dateStr >= '0321' and $dateStr <= '0419') {
        $sign = 'Овен';
    }
    if ($dateStr >= '0420' and $dateStr <= '0520') {
        $sign = 'Телец';
    }
    if ($dateStr >= '0521' and $dateStr <= '0620') {
        $sign = 'Близнецы';
    }
    if ($dateStr >= '0621' and $dateStr <= '0722') {
        $sign = 'Рак';
    }
    if ($dateStr >= '0723' and $dateStr <= '0822') {
        $sign = 'Лев';
    }
    if ($dateStr >= '0823' and $dateStr <= '0922') {
        $sign = 'Дева';
    }
    if ($dateStr >= '0923' and $dateStr <= '1022') {
        $sign = 'Весы';
    }
    if ($dateStr >= '1023' and $dateStr <= '1121') {
        $sign = 'Скорпион';
    }
    if ($dateStr >= '1122' and $dateStr <= '1221') {
        $sign = 'Стрелец';
    }
    if (($dateStr >= '1222' and $dateStr <= '1231') or ($dateStr >= '0101' and $dateStr <= '0119')) {
        $sign = 'Козерог';
    }
    if ($dateStr >= '0120' and $dateStr <= '0218') {
        $sign = 'Водолей';
    }
    if ($dateStr >= '0219' and $dateStr <= '0320') {
        $sign = 'Рыбы';
    }

    $now = date('Y-m-d', time());
    $now = date_create($now);
    date_modify($now, '1 day');
    $nextDay = date_format($now, 'd.m');
    echo $horoscope[$sing][$nextDay];
}

?>

<!--Part 18 Working With Dates In PHP Tasks (DONE).-->