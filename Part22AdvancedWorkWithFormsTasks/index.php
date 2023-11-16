<?php

// Задачи.

// 7. Сделайте функцию, которая создает инпут type text или password. Функция должна иметь следующие параметры: type, name, value, placeholder (DONE).

function inputText($type, $name, $value, $placeholder) {
    if (isset($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }
    return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" placeholder="' . $placeholder . '">' . '<br>';
}

echo inputText('text', 'name', '', 'Введите текст');

// 8. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки (DONE).

function inputTextSave($type, $name, $value, $placeholder)
{
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    }
    return '<input type="' . $type . '" name="' . $name . '" value= "' . $value = htmlspecialchars($_GET['name']) . '" placeholder="' . $placeholder . '">' . '<br>';
}

echo inputTextSave('text', 'name', '111', 'Введите текст');

// 9. Сделайте функцию, которая создает textarea. Функция должна иметь следующие параметры: name, value, placeholder (DONE).

function inputTextArea($name, $value, $placeholder) {
    if (isset($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }
    return '<input type="textarea"' . '"name="' . $name . '"value="' . $value . '"placeholder="' . $placeholder . '">' . '<br>';
}

echo inputTextArea('textarea', '', 'textarea(Введите текст)');

// 10. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение textarea после отправки (DONE).

function inputTextAreaSave($name, $value, $placeholder) {
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    }
    return '<input type="textarea"' . '"name="' . $name . '"value="' . $value = htmlspecialchars($_GET['name']) . '"placeholder="' . $placeholder . '">' . '<br>';
}

echo inputTextAreaSave('textarea', '111', 'textarea(Введите текст)');

?>
