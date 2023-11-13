<?php

// Простые функции.

// 1. Сделайте функцию, которая возвращает квадрат числа. Число передается параметром (DONE).

function squarNumber($number) {
    return 'Квадрат числа ' . $number . ' равен: ' . $number*$number . '.' . '<br>';
}

echo squarNumber(5);

// 2. Сделайте функцию, которая возвращает сумму двух чисел (DONE).

function summNumber($numberOne, $numberTwo) {
    return 'Сумма чисел ' . $numberOne . ' и ' . $numberTwo . ' равна: ' . $numberOne + $numberTwo . '.' . '<br>';
}

echo summNumber(6, 7);

// 3. Сделайте функцию, которая отнимает от первого числа второе и делит на третье (DONE).

function threeNumbers($numberOne, $numberTwo, $numberThree ) {
    return ($numberOne - $numberTwo) / $numberThree;
}

$result = threeNumbers(10, 6, 2);
echo 'Резельтат работы функции равен: ' . $result . '.' . '<br>';

// 4. Сделайте функцию, которая принимает 3 параметра: день, месяц и год, а возвращает дату в формате 30-01-2023 (DONE).

function dateFormat($day, $month, $year) {
    return date("d-m-Y", mktime(0, 0, 0, $month, $day, $year));
}

$result = dateFormat(30, 1, 2023);
echo 'Дата: ' . $result . '.' . '<br>';

// На параметры по умолчанию.

// 5. Сделайте функцию, которая будет возводить число в куб. По умолчанию функция должна возводить в куб число 3 (DONE).

// Передаем параметр по умолчанию в качестве аргумента (так же функция с необязательным параметром).
function numberToCube($number = 3)
{
    return pow($number, 3);
}

$result = numberToCube();
echo 'Число 3 в кубе, будет равно: ' . $result . '.' . '<br>';

// На static и global.

// Глобальные и статические переменные. Глобальные видимы вне функции, статические только внутри функции.

// 6. Сделайте функцию, которая будет подсчитывать количество раз, которое ее вызвали (DONE).

// Статитеская переменная.
function countStatic() {
    static $count = 0;
    $count++;
    echo 'Функция вызывалась: ' . $count . ' раз(-а).' . '<br>';
}

countStatic();
countStatic();
countStatic();

// Глобальная переменная.
$count = 0;

function countGlobal() {
    global $count;
    $count++;
}

countGlobal();
countGlobal();
countGlobal();
countGlobal();
countGlobal();

$result = $count;
echo 'Функция вызывалась: ' . $count . ' раз(-а).' . '<br>';

// На html.

// 7. Сделайте функцию, которая подключает картинку. Параметром функция должна принимать путь к картинке, а возвращать — тег <img src='путь_к_картинке'> (DONE).

function imageOutput($image_path = "/images/advertising-money-business-label.jpeg") {
    return "<img src='$image_path'>";
}

$result = imageOutput();
echo $result . '<br>';

// 8. Сделайте функцию, которая подключает CSS на сайт (DONE).

function connectionCSS() {
    return '<link rel="stylesheet" href="style.css">';
}

connectionCSS();

// На строки.

// 9. Сделайте функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр). По умолчанию функция должна добавлять троеточие в конце
//возвращаемой строки, а третий параметр должен регулировать это поведение (true – добавить троеточие, false – не добавить). Функция должна корректно работать с кириллицей (DONE).

function firstCharactersOfLine($sting, $N, $behavior) {
    $ellipsis = '...';
    $first_n = mb_substr($sting, 0, $N, 'UTF-8');

    if ($behavior == true) {
        echo $first_n . $ellipsis . '<br>';
    } else if ($behavior == false) {
        echo $first_n . '<br>';
    }
}

firstCharactersOfLine('Павел', 3, true);
firstCharactersOfLine('Павел', 3, false);

// 10. Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит. Сделайте функцию, которая выполняет обратную операцию (DONE).

function stringTranslitEngRus($string) {
    $from = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц',
        'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
        'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я');
    $to = array('a', 'b', 'v', 'g', 'd', 'e', 'e', 'zh', 'z', 'i', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'kh', 'cz',
        'ch', 'sh', 'shh', '', 'y', '', 'e', 'yu', 'ya', 'A', 'B', 'V', 'G', 'D', 'E', 'E', 'ZH', 'Z', 'I', 'I', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'F', 'KH', 'CZ', 'CH', 'SH', 'SHH', '', 'Y', '', 'E', 'YU', 'YA');

    return str_replace($from, $to, $string);
}

$resultEng = stringTranslitEngRus('Павел');
echo $resultEng . '<br>';

function stringTranslitRusEng($string) {
    $from = array('a', 'b', 'v', 'g', 'd', 'e', 'e', 'zh', 'z', 'i', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'kh', 'cz',
        'ch', 'sh', 'shh', '', 'y', '', 'e', 'yu', 'ya', 'A', 'B', 'V', 'G', 'D', 'E', 'E', 'ZH', 'Z', 'I', 'I', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'F', 'KH', 'CZ', 'CH', 'SH', 'SHH', '', 'Y', '', 'E', 'YU', 'YA');
    $to = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц',
        'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
        'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я');

    return str_replace($from, $to, $string);
}

$resultRus = stringTranslitRusEng('Pavel');
echo $resultRus . '<br>';

// 11. Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым
// параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех (DONE).

function numberNoun ($number, $string_1, $string_2, $string_3) {
    if ($number == 1) {
        return $number . ' ' . $string_1 . '.' . '<br>';
    }  else if ($number >= 2 and $number <= 4) {
        return $number . ' ' . $string_2 . '.' . '<br>';
    } else if ($number >= 5) {
        return $number . ' ' . $string_3 . '.' . '<br>';
    }
}

$result = numberNoun(5, 'яблоко', 'яблока', 'яблок');
echo $result;

// На даты.

// 12. Сделайте функцию, которая принимает 3 параметра: день, месяц и год, а возвращает дату в различных форматах (30.01.2023, 30-01-2023, 2023-01-30). Формат задается четвертым параметром (DONE).

function dateFormats($day, $month, $year, $choice) {
    switch($choice) {
        case 1:
            return date("d.m.Y", mktime(0, 0, 0, $month, $day, $year));
        case 2:
            return date("d-m-Y", mktime(0, 0, 0, $month, $day, $year));
        case 3:
            return date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));
    }
}

$resultDate = dateFormats(30, 1, 2023, 3);
echo $resultDate . '<br>';

// 13. Сделайте функцию, которая берет дату в формате sql (2023-01-31) и делает из нее нормальный формат (30.01.2023, 30-01-2023, 2023-01-30) (DONE).

function sqlDateFormatNormal($sqlDate, $chose) {
    switch($chose) {
        case 1:
            $phpDate = strtotime($sqlDate);
            return date("d.m.Y", $phpDate);
        case 2:
            $phpDate = strtotime($sqlDate);
            return date("d-m-Y", $phpDate);
        case 3:
            $phpDate = strtotime($sqlDate);
            return date("Y-m-d", $phpDate);
    }
}

$resultPhpDate = sqlDateFormatNormal('2023-01-31', 1);
echo $resultPhpDate . '<br>';

// 14. Сделайте функцию, которая принимает дату в нормальном формате (31.12.2023), а возвращает в sql формате. Совет: воспользуйтесь функцией explode (DONE).

function normalDateFormatSql($normalDate) {
    $arrDate = explode('.', $normalDate);
    $sqlDate = mktime(0, 0, 0, $arrDate[1], $arrDate[0], $arrDate[2]);
    return date('Y-m-d', $sqlDate);
}

$resultSqlDate = normalDateFormatSql('31.12.2023');
echo $resultSqlDate . '<br>';

// 15. Сделайте функцию, которая принимает два параметра — месяц и год, а возвращает последнее число месяца (подсказка: покопайтесь в функции date, есть готовая реализация) (DONE).

function lastDayMonth($month, $year) {
    $lastDay = date('t', mktime(0, 0, 0, $month, 1, $year));
    return $lastDay;
}

echo 'Последним числом месяца будет: ' .  lastDayMonth(11, 2023) . '.' . '<br>';

// 16. Сделайте функцию, которая принимает день и месяц, а возвращает какой в эту дату праздник. Массив праздников храните прямо в функции (DONE).

function holidayDay($day, $month) {
    $arrHolidays = [
    '3112' => 'Новый год', '0701' => 'Рождество', '2302' => 'День защитника Отечества', '0803' => 'Международный женский день',
    '0105' => 'Праздник Весны и Труда', '0905' => 'День победы', '1206' => 'День России', '0411' => 'День народного единства'];

    $date = date('dm', mktime(0, 0, 0, $month, $day));

    if (array_key_exists($date, $arrHolidays)) {
        return 'Сейчас: ' . $arrHolidays[$date] . ' !!!';
    }
}

$resultHoliday = holidayDay(4,11);
echo $resultHoliday . '<br>';

// 17. Сделайте функцию, которая находит разницу между двумя датами: количество лет, месяцев, дней, часов, минут, секунд. Результат должен выводиться в виде массива с ключами y, m, d, h, i, s (DONE).

function dateComparison($dateOne, $dateTwo) {
    $date_1 = strtotime($dateOne);
    $date_2 = strtotime($dateTwo);

    $diff = abs($date_2 - $date_1); // Разница между двумя датами.

    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
    $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
    $minutes = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
    $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minutes * 60));

    $arrDiffDate = array('y' => $years, 'm' => $months, 'd' => $days, 'h' => $hours, 'i' => $minutes, 's' => $seconds);

    return print_r($arrDiffDate);
}

$resultDiffDate = dateComparison('2022-06-01 20:15:15', '2023-11-10 13:47:00');
echo $arrDiffDate . '<br>';

// 18. Сделайте функцию, которая принимает параметром число от 1 до 12, а возвращает название месяца на русском языке (DONE).

function monthName($month) {
    $months = ['0' => '0', '1' => 'Январь', '2' => 'Февраль', '3' => 'Март', '4' => 'Апрель', '5' => 'Май',
        '6' => 'Июнь', '7' => 'Июль', '8' => 'Август', '9' => 'Сентябрь', '10' => 'Октябрь', '11' => 'Ноябрь', '12' => 'Декабрь'];

    if ($month >= 1 and $month <= 12) {
        return $months[date('n', mktime(0, 0, 0, $month))];
    } else {
        return 'Не верно указан месяц.';
    }
}

$resultmonthName = monthName(11);
echo $resultmonthName . '<br>';

// 19. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке (DONE).

function dayName($day) {
    $days = array('0' => '0', '1' => 'Понедельник', '2' => 'Втоник', '3' => 'Среда', '4' => 'Четверг',
        '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье');

    if ($day >= 1 and $day <= 7) {
        return $days[$day];
    } else {
        return 'Не верно указан день.';
    }
}

$resultDayName = dayName(5);
echo $resultDayName . '<br>';

// 20. Сделайте функцию, которая возвращает текущую дату в формате '31 января, пятница'. Вынесите код, который преобразует число в название месяца по-русски в родительном падеже
// в отдельную функцию. Аналогично поступите с кодом, который преобразует число в день недели по-русски (DONE).

// Дата на русском языке.
function getDateRus() {
    $months = [1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля', 5 => 'мая',
        6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'];
    return ((int) date('d') . ' ' . $months[(date('n'))]);
}

// День недели на русском языке.
function getDayRus() {
    $days = [1 => 'понедельник', 2 => 'втоник', 3 => 'среда', 4 => 'четверг',
        5 => 'пятница', 6 => 'суббота', 7 => 'воскресенье'];
    return $days[(date('w'))];
}

function inputDateRus() {
    return 'Сегодня: ' . getDateRus() . ', ' . getDayRus() . '.' . '<br>';
}

echo inputDateRus();

// 21. Сделайте функцию, которая принимает параметром название дня недели на английском языке, а возвращает число от 1 до 7 (DONE).

function daysNumber($dayName) {
    $daysNumber = array('Monday' => '1', 'Tuesday' => '2', 'Wednesday' => '3', 'Thursday' => '4', 'Friday' => '5',
        'Saturday' => '6', 'Sunday' => '7');
    return $daysNumber[$dayName];
}

$resultmonthsNumbers = daysNumber('Monday');
echo $resultmonthsNumbers . ' день недели.' . '<br>';

// 22. Сделайте функцию, которая принимает параметром число, а возвращает день недели на определенном языке. Язык должен указываться вторым параметром ('ru'
// — русский, 'en' — англ., 'ge' — немецкий). По умолчанию функция должна возвращать русское название (DONE).

function languageDays($day, $lang = 'ru') {

    if ($lang == 'ru') {
        $days = array('1' => 'Понедельник', '2' => 'Втоник', '3' => 'Среда', '4' => 'Четверг',
        '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье');
        if ($day >= 1 and $day <= 7) {
            return $days[$day] . '<br>';
        } else {
            return 'Не верно указан день.';
        }
    } else if ($lang == 'en') {
        if ($day >= 1 and $day <= 7) {
            $days = array('1' => 'Monday', '2' => 'Tuesday', '3' => 'Wednesday', '4' => 'Thursday',
        '5' => 'Friday', '6' => 'Saturday', '7' => 'Sunday');
            return $days[$day] . '<br>';
        } else {
            return 'Не верно указан день.';
        }
    } else if ($lang == 'ge') {
        if ($day >= 1 and $day <= 7) {
            $days = array('1' => 'Montag', '2' => 'Dienstag', '3' => 'Mittwoch', '4' => 'Donnerstag',
        '5' => 'Freitag', '6' => 'Samstag', '7' => 'Sonntag');
            return $days[$day] . '<br>';
        } else {
            return 'Не верно указан день.';
        }
    }
}

echo languageDays(4, 'ru');
echo languageDays(2, 'en');
echo languageDays(7, 'ge');

// На ссылки.

// 23. Сделайте функцию, которая делает ссылку. Она должна принимать два параметра: адрес ссылки и текст ссылки и возвращать тег <a href='адрес_ссылки'>текст_ссылки</a> (DONE).

function createLink($link, $text) {
    return '<a href="' . $link . '">' . $text . '</a>';
}

$link = "https://www.rambler.ru/";
$text = "Просто ссылка.";
echo createLink($link, $text) . '<br>';

// 24. Сделайте функцию, которая делает ссылку в случае, если дата, заданная в параметре больше или равна текущей дате. Иначе функция должна вернуть обычный текст. Такая задача часто нужна,
// если вы реализуете автоматическое добавление страниц на сайте (они появляются в заданную дату и в эту же дату должны появится и ссылки на эти страницы!) (DONE).

function createLinkDate($date) {
    $currentDate = date('d-m-Y');
    $link = "https://www.rambler.ru/";
    $text = "Просто ссылка.";

    if ($date >= $currentDate) {
        return '<a href="' . $link . '">' . $text . '</a>';
    } else {
        return $text;
    }
}

echo createLinkDate('14-11-2023') . '<br>';
echo createLinkDate('05-11-2023') . '<br>';


?>