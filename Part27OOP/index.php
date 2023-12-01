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

echo '<br>';

// Private и public.

// public: к свойствам и методам, объявленным с данным модификатором, можно обращаться из внешнего кода и из любой части программы.
// protected: свойства и методы с данным модификатором доступны из текущего класса, а также из классов-наследников.
// private: свойства и методы с данным модификатором доступны только из текущего класса.

// 5. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той степени. Класс должен
// иметь private методы возведения в степень (без pow) и public методы суммирования (DONE).

class Adder {
    private $degreeNum1; // Степень числа 1.
    private $degreeNum2; // Степень числа 2.
    private $summ; // Сумма.

    public function summ($number_1, $number_2){
        $this->summ = $number_1 + $number_2;
        echo "Сумма чисел $number_1 и $number_2 равна: $this->summ.<br>";
    }

    private function secondDegree($number_1, $number_2) {
        $this->degreeNum1 = $number_1 * $number_1;
        $this->degreeNum2 = $number_2 * $number_2;
        echo "Квадраты чисел $number_1 и $number_2 равны: $this->degreeNum1 и $this->degreeNum2 соответственно.<br>";
    }

    public function summSquaresNumbers() {
        $this->secondDegree(2, 2);
        $this->summ = $this->degreeNum1 + $this->degreeNum2;
        echo "Сумма квадратов указанных чисел равна: $this->summ.<br>";
    }

    private function cubesNumbers($number_1, $number_2) {
        $this->degreeNum1 = $number_1 * $number_1 * $number_1;
        $this->degreeNum2 = $number_2 * $number_2 * $number_2;
        echo "Кубы чисел $number_1 и $number_2 равны: $this->degreeNum1 и $this->degreeNum2 соответственно.<br>";
    }

    public function summCubesNumbers() {
        $this->cubesNumbers(3, 3);
        $this->summ = $this->degreeNum1 + $this->degreeNum2;
        echo "Сумма кубов указанных чисел равна: $this->summ.<br>";
    }

    private function fourthDegreeNumbers($number_1, $number_2) {
        $this->degreeNum1 = $number_1 * $number_1 * $number_1 * $number_1;
        $this->degreeNum2 = $number_2 * $number_2 * $number_2 * $number_2;
        echo "Числа $number_1 и $number_2 в четвертой степени равны: $this->degreeNum1 и $this->degreeNum2 соответственно.<br>";
    }

    public function summFourthDegreeNumbers() {
        $this->fourthDegreeNumbers(4, 4);
        $this->summ = $this->degreeNum1 + $this->degreeNum2;
        echo "Сумма чисел в четвертой степени равна: $this->summ.<br>";
    }

    private function fifthDegreeNumbers($number_1, $number_2) {
        $this->degreeNum1 = $number_1 * $number_1 * $number_1 * $number_1 * $number_1;
        $this->degreeNum2 = $number_2 * $number_2 * $number_2 * $number_2 * $number_2;
        echo "Числа $number_1 и $number_2 в пятой степени равны: $this->degreeNum1 и $this->degreeNum2 соответственно.<br>";
    }

    public function summFifthDegree() {
        $this->fifthDegreeNumbers(5, 5);
        $this->summ = $this->degreeNum1 + $this->degreeNum2;
        echo "Сумма чисел в пятой степени равна: $this->summ.<br>";
    }
}

$adder = new Adder();

$adder->summ(2, 2);
$adder->summSquaresNumbers();
$adder->summCubesNumbers();
$adder->summFourthDegreeNumbers();
$adder->summFifthDegree();

// 6. Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор функций: сохранение куки, удаление куки, редактирование куки, считывание куки.
// По умолчанию кука должна устанавливаться на 1 год (DONE).

class CookieShell
{
    public function setCookies($name, $value, $time = 31536000)
    {
        setcookie($name, $value, time() + $time, "/");
        echo 'Cookie сохранены (по умолчанию хранятся 1 год).' . '<br>';
    }

    public function getCookies($name)
    {
        if (isset($_COOKIE[$name])) {
            echo $_COOKIE[$name];
        } else {
            echo 'Cookie пуст.' . '<br>';
        }
    }

    public function updateCookie($name, $value, $time = 31536000)
    {
        setcookie($name, $value, time() + $time, "/");
        echo 'Cookie изменены (по умолчанию хранятся 1 год).' . '<br>';
    }

    public function deleteCookies($name)
    {
        setcookie($name, time() - 3600);
        echo 'Cookie удален.' . '<br>';
    }
}

$cookieShell = new CookieShell();
$cookieShell->setCookies('1', 'Павел');
$cookieShell->getCookies('');
$cookieShell->updateCookie('2', 'Иван');
$cookieShell->deleteCookies('');

?>
