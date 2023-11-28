<?php

// Работа с классами.

// 1. Сделайте класс Power, который возводит число в нужную степень (не используя стандартную функцию pow). Класс должен иметь следующие методы: 2, 3, 4, 5 степени (DONE).

class Power
{
    public $number = 2;

    function secondDegree()
    {
        echo 'Указанное число во второй степени: ' . $this->number * 2 . '.' . '<br>';
    }

    function thirdDegree()
    {
        echo 'Указанное число в третьей степени: ' . $this->number * 2 * 2 . '.' . '<br>';
    }

    function fourthDegree()
    {
        echo 'Указанное число в четвертой степени: ' . $this->number * 2 * 2 * 2 . '.' . '<br>';
    }

    function fifthDegree()
    {
        echo 'Указанное число в пятой степени: ' . $this->number * 2 * 2 * 2 * 2 . '.' . '<br>';
    }
}

$power = new Power();

$power->secondDegree();
$power->thirdDegree();
$power->fourthDegree();
$power->fifthDegree();

// 2. Сделайте класс-калькулятор. Класс должен иметь следующие методы: сложение, вычитание, умножение, деление. Каждый метод должен принимать параметром два числа (DONE).

class calculator 
{
    private $result;

    function addition($number_1, $number_2) {
        $this->result = $number_1 + $number_2;
        echo 'Результат сложения двух чисел равна: ' . $this->result . '.' . '<br>';

    }

    function subtraction($number_1, $number_2) {
        $this->result = $number_1 - $number_2;
        echo 'Результат вычитания двух чисел равен: ' . $this->result . '.' . '<br>';
    }

    function multiplication($number_1, $number_2) {
        $this->result = $number_1 * $number_2;
        echo 'Результат умножения двух чисел равен: ' . $this->result . '.' . '<br>';
    }

    function division($number_1, $number_2) {
        $this->result = $number_1 / $number_2;
        echo 'Результат деления двух чисел равен: ' . $this->result . '.' . '<br>';
    }
}

$calculator = new Calculator();

$calculator->addition(2, 3);
$calculator->subtraction(10, 6);
$calculator->multiplication(3, 3);
$calculator->division(12, 6);

// 3. Сделайте класс Sqrt, который извлекает из числа корень нужной степени (используя pow: pow(4, 0.5) – это квадратный корень). Класс должен иметь следующие методы: корни 2, 3, 4, 5 степени (DONE).

class Sqrt
{
    private $result;

    function secondRoot($number)
    {
        $this->result = pow($number,0.5);
        echo 'Корень во второй степени вашего числа равен: ' . $this->result . '.' . '<br>';
    }

    function thirdDegree($number) {
        $this->result = pow($number, 1 / 3);
        echo 'Корень в третьей степени вашего числа равен: ' . $this->result . '.' . '<br>';
    }

    function fourthDegree($number) {
        $this->result = pow($number, 1 / 4);
        echo 'Корень в четвертой степени вашего числа равен: ' . $this->result . '.' . '<br>';
    }

    function fifthDegree($number) {
        $this->result = pow($number, 1 / 5);
        echo 'Корень в пятой степени вашего числа равен: ' . $this->result . '.' . '<br>';
    }

}

$sqrt = new Sqrt();
$sqrt->secondRoot(16);
$sqrt->thirdDegree(27);
$sqrt->fourthDegree(174);
$sqrt->fifthDegree(1000);

?>
