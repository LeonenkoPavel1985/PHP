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
        echo 'Результат сложения двух чисел равен: ' . $this->result . '.' . '<br>';

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

// 4. Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие методы: REQUEST_URI, SERVER_ADDR, DOCUMENT_ROOT, HTTP_HOST, HTTP_USER_AGENT', QUERY_STRING (DONE).

// $_SERVER - это суперглобальная переменная PHP, которая содержит информацию о заголовках, путях и расположении скриптов.
// В массиве $_SERVER хранятся важные переменные, которые помещаются в него php-интерпритатором.
// $_SERVER['REQUEST_URI'] - показывает часть адреса или ссылки.
// $_SERVER['SERVER_ADDR'] - IP-адрес, с которого пользователь просматривает текущую страницу.
// $_SERVER['DOCUMENT_ROOT'] - корневой каталог документа, в котором выполняется текущий сценарий, как определено в файле конфигурации сервера.
// $_SERVER['HTTP_HOST'] - возвращает заголовок Host из текущего запроса.
// $_SERVER['HTTP_USER_AGENT'] - необходим для вывода информации об операционной системе клиента и версии и названии браузера.
// $_SERVER['QUERY_STRING'] - позволяет получить часть ссылки после знака вопроса, то есть параметры, переданные скрипту.

class ShellServer {

    function requestUri() {
        echo 'Просмотр части ссылки: ' . $_SERVER['REQUEST_URI'] . '<br>';
    }

    function serverAddr() {
        echo 'IP-адрес, с которого пользователь просматривает текущую страницу: ' . $_SERVER['SERVER_ADDR'] . '<br>';
    }

    function documentRoot() {
        echo 'Корневой каталог документа, в котором выполняется текущий сценарий: ' . $_SERVER['DOCUMENT_ROOT'] . '<br>';
    }

    function httpHost() {
        echo 'Заголовок Host из текущего запроса: ' . $_SERVER['HTTP_HOST'] . '<br>';
    }

    function httpUserAgent() {
        echo 'Определение версии браузера и операционки клиента: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
    }

    function queryString() {
        echo 'Параметры, переданные скрипту: ' . $_SERVER['QUERY_STRING']  . '<br>';
    }
}

$shellServer = new ShellServer();

$shellServer->requestUri();
$shellServer->serverAddr();
$shellServer->documentRoot();
$shellServer->httpHost();
$shellServer->httpUserAgent();
$shellServer->queryString();

?>
