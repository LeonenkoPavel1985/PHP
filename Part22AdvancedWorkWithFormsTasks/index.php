<?php

// Задачи.

// 7. Сделайте функцию, которая создает инпут type text или password. Функция должна иметь следующие параметры: type, name, value, placeholder (DONE).
// 8. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки (DONE).


function inputText($type, $name, $value, $placeholder) {
    if (isset($_REQUEST['name'])) {
        $value = $_REQUEST['name'];
    }
    return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" placeholder="' . $placeholder . '">';
}

echo inputText('text', 'name', '2', 'Введите текст');

// 9. Сделайте функцию, которая создает textarea. Функция должна иметь следующие параметры: name, value, placeholder.

?>
