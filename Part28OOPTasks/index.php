<?php

// 10. Сделайте класс-оболочку над БД. Методы класса продумайте самостоятельно (DONE).

class DatabaseShell
{
    private $link; // Связь с БД.

    public function __construct($host, $user, $password, $database) {
        $this->link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($this->link, "SET NAMES 'utf8'");
    }

    public function save($table, $data) {
        // Сохраняет запись в базу.
    }

    public function del($table, $id) {
        // Удаляет запись по ее id.
    }

    public function delAll($table, $ids) {
        // Удаляет записи по их id.
    }

    public function get($table, $id) {
        // Получает одну запись по ее id
    }

    public function getAll($table, $ids) {
        // Получает массив записей по их id
    }

    public function selectAll($table, $condition) {
        // Получает массив записей по условию
    }
}

// 11. Сделайте класс, который находит сумму квадратов всех элементов массива и извлекает квадратный корень, сумму кубов и извлекает кубический корень и так далее до 5-той степени.
// Класс должен наследовать от класса Sqrt, для возведения в степень использовать стандартную функцию pow (DONE).

class Sqrt
{
    public $sumElemArr;
    private $result;

    function secondRoot() {
        $this->result = pow($this->sumElemArr, 0.5);
        echo 'Квадратный корень суммы элементов массива возведенных в квадрат равен: ' . $this->result . '.' . '<br>';
    }

    function thirdDegree() {
        $this->result = pow($this->sumElemArr, 1/3);
        echo 'Кубический корень суммы элементов массива возведенных в куб равен: ' . $this->result . '.' . '<br>';
    }

    function fourthDegree() {
        $this->result = pow($this->sumElemArr, 1/4);
        echo 'Корень четвертой степени суммы элементов массива возведенных в четвертую степень равен: ' . $this->result . '.' . '<br>';
    }

    function fifthDegree() {
        $this->result = pow($this->sumElemArr, 1/5);
        echo 'Корень в пятой степени суммы элементов массива возведенных в пятую степень равен: ' . $this->result . '.' . '<br>';
    }
}

class SumSquare extends Sqrt
{
    public function sumSquaresElemArr($arr = []) {
        $length = count($arr);

        for ($i = 0; $i < $length; $i++) {
            $arr[$i] = pow($arr[$i], 2);
        }

        echo 'Массив с элементамми возведенными в квадрат: ' . '<br>';
        var_dump($arr);
        echo '<br>';
        $this->sumElemArr = array_sum($arr);
        echo 'Сумма элементов массива с элементами возведенными в квадрат равна: ' . $this->sumElemArr . '.' . '<br>';
        $this->secondRoot();
    }

    public function sumCubesElemArr($arr = []) {
        $length = count($arr);

        for ($i = 0; $i < $length; $i++) {
            $arr[$i] = pow($arr[$i], 3);
        }

        echo 'Массив с элементамми возведенными в куб: ' . '<br>';
        var_dump($arr);
        echo '<br>';
        $this->sumElemArr = array_sum($arr);
        echo 'Сумма элементов массива с элементами возведенными в куб равна: ' . $this->sumElemArr . '.' . '<br>';
        $this->thirdDegree();
    }

    public function sumFourthElemArr($arr = []) {
        $length = count($arr);

        for ($i = 0; $i < $length; $i++) {
            $arr[$i] = pow($arr[$i], 4);
        }

        echo 'Массив с элементамми возведенными в четвертую степень: ' . '<br>';
        var_dump($arr);
        echo '<br>';
        $this->sumElemArr = array_sum($arr);
        echo 'Сумма элементов массива с элементами возведенными в четвертую степень равна: ' . $this->sumElemArr . '.' . '<br>';
        $this->fourthDegree();
    }

    public function sumFifthElemArr($arr = []) {
        $length = count($arr);

        for ($i = 0; $i < $length; $i++) {
            $arr[$i] = pow($arr[$i], 4);
        }

        echo 'Массив с элементамми возведенными в пятую степень: ' . '<br>';
        var_dump($arr);
        $this->sumElemArr = array_sum($arr);
        echo '<br>';
        echo 'Сумма элементов массива с элементами возведенными в пятую степень равна: ' . $this->sumElemArr . '.' . '<br>';
        $this->fifthDegree();
    }

}

$sumSquare = new SumSquare();
$sumSquare->sumSquaresElemArr([2,2,2,2]);
$sumSquare->sumCubesElemArr([3, 3, 3, 3]);
$sumSquare->sumFourthElemArr([4, 4, 4, 4]);
$sumSquare->sumFifthElemArr([5, 5, 5, 5]);

echo '<br>';

// 12. Сделайте класс для работы с датами. Класс должен уметь находить разницу между двумя датами, принимать дату в sql-формате, а возвращать в заданном, принимать дату в формате
// '31.12.2023', а возвращать в заданном. Также класс должен должен определять текущий день недели и месяц (словом, по-русски) и иметь для этого соответствующие методы.
// Класс должен иметь public свойство today, в котором хранится текущая дата (заполняется в __construct). Класс должен иметь public свойство weekday, в котором хранится текущий день недели
// (по-русски). Класс должен иметь public свойство month, в котором хранится текущий месяц (по-русски). Класс должен иметь и использовать метод, который принимает количество секунд
// $num, а возращает массив, в котором содержится количество лет, месяцев, дней, часов, минут, секунд в $num. Добавьте несколько методов на свой вкус (DONE).

class WorkingWithDates {
    public $today;
    public $weekday;
    public $month;

    function __construct($today) {
        $this->today = $today;
    }

    function getCurrentDate() {
        echo 'Текущая дата: ' . $this->today . '.' . '<br>';
    }

    function differenceDatesToday($dateEnd) {
        $difference = abs(strtotime($dateEnd) - strtotime($this->today));
        $years = floor($difference / (365 * 60 * 60 * 24));
        $months = floor(($difference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($difference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        echo 'Разница между датами от текущего дня равна: ' . $days . ' дня(-ей),' . $months . ' месяца(-ев),' . $years . ' год(лет).' . '<br>';
    }

    function differenceDatesTwoDate($dateStart, $dateEnd) {
        $difference = abs(strtotime($dateEnd) - strtotime($dateStart));
        $years = floor($difference / (365 * 60 * 60 * 24));
        $months = floor(($difference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($difference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        echo 'Разница между заданными датами равна: ' . $days . ' дня(-ей),' . $months . ' месяца(-ев),' . $years . ' год(лет).' . '<br>';
    }

    function sqlFormatDate($dateSql) {
        $dateNormal = date('d.m.Y', strtotime($dateSql));
        echo 'Дата формата sql переведенная в заданный формат: ' . $dateNormal . '.' . '<br>';
    }

    function normalFormatDate($dateNormal) {
        $dateSql = date('Y-m-d', strtotime($dateNormal));
        echo 'Дата нормального формата переведенная в заданный формат sql: ' . $dateSql . '.' . '<br>';

    }

    function rusDayWeek() {
        $week = array('Воскресенье', 'Понедельник', 'Втоник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
        $this->weekday = $week[date('w', time())];
        echo 'Текущий день недели: ' . $this->weekday . '.' . '<br>';
    }

    function rusMonths() {
        $month = ['0', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
        $this->$month = $month[date('n', time())];
        echo 'Текущий месяц: ' . $this->$month . '.' . '<br>';
    }

    function secondDate($num) {
        $secondsInMinutes = 60;
        $secondsInHours = 60 * $secondsInMinutes;
        $secondsInDays = 24 * $secondsInHours;

        // Расчет дней.
        $days = floor($num / $secondsInDays);

        // Расчет часов.
        $hourSeconds = $num % $secondsInDays;
        $hours = floor($hourSeconds / $secondsInHours);

        // Расчет минут.
        $minuteSeconds = $hourSeconds % $secondsInHours;
        $minutes = floor($minuteSeconds / $secondsInMinutes);

        // Расчет оставшихся секунд.
        $remainingSeconds = $minuteSeconds % $secondsInMinutes;
        $seconds = ceil($remainingSeconds);

        // Форматирование и возврат значения массива.
        $timeParts = [];
        $sections = [
            'день(-я,-ей)' => (int) $days,
            'час(-а,-ов)' => (int) $hours,
            'минут(-ы)' => (int) $minutes,
            'секунд(-ы)' => (int) $seconds,
        ];

        foreach ($sections as $name => $value) {
            if ($value > 0) {
                $timeParts[] = $value . ' ' . $name . ($value == 1 ? '' : '');
            }
        }
        echo 'В указанном в секундах интервале: ' .  implode(', ', $timeParts) . '.' . '<br>';
    }
}

$workingWithDates = new WorkingWithDates(date('d.m.Y'));
$workingWithDates->getCurrentDate();
$workingWithDates->differenceDatesToday('25.12.2024');
$workingWithDates->differenceDatesTwoDate('15.06.2023', '20.12.2024');
$workingWithDates->sqlFormatDate('2023-11-02');
$workingWithDates->normalFormatDate('02.11.2023');
$workingWithDates->rusDayWeek();
$workingWithDates->rusMonths();
$workingWithDates->secondDate(5500000);

?>
