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

?>