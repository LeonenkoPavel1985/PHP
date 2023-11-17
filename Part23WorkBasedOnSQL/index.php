<?php

// Соединение с базой данных.

$servername = 'MSI\SQLEXPRESS'; // instance и порт - необязательные параметры
$options = [
    'UID' => 'PavelL',
    // имя пользователя, имеющего доступ к БД
    'PWD' => 'root',
    // пароль
    'Database' => 'PhpWorkersDb' // название БД, к которой подключаемся
];
$conn = sqlsrv_connect($servername, $options);
if ($conn === false) {
    die(print_r(sqlsrv_errors()));
} else {
    echo 'Соединение установлено';
}

?>
