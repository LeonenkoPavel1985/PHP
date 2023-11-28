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

class calculator {
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

?>
