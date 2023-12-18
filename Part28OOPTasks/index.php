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
?>

