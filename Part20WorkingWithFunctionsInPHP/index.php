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

?>