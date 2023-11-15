
<!--Checkbox.-->

<!--1. Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, то поприветствуйте пользователя, если не отмечен — попрощайтесь с пользователем (DONE).-->

<form action="index.php" method="post">
    <p>Введите имя: <input type="text" name="name" /></p>
    <p><input type="hidden" name="checkbox" value="0" /></p>
    <p><input type="checkbox" name="checkbox" value="1" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['name']) and $_REQUEST['checkbox'] == 1) {
    $name = strip_tags($_REQUEST['name']);
    echo 'Приветсвую ' . $name . '.';
} else if (isset($_REQUEST['name']) and $_REQUEST['checkbox'] == 0) {
    $name = strip_tags($_REQUEST['name']);
    echo 'До скорой встречи ' . $name . '.';
}

?>

<!--2. Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь. Если пользователь не
отметил ни один язык — выведите на экран сообщение об этом (DONE).-->

<form action="index.php" method="post">
    <h4>Какие языки программирования вы знаете ?</h4>
    <p>html:<input type="checkbox" name="languages[]" value="html" /></p> 
    <p>css:<input type="checkbox" name="languages[]" value="css" /></p>
    <p>php:<input type="checkbox" name="languages[]" value="php" /></p>
    <p>javascript:<input type="checkbox" name="languages[]" value="javascript" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['languages'])) {
    $languages = $_REQUEST['languages'];

    if (empty($languages)) {
        echo("Вы не выбрали ни одного языка !!!");
    } else {
        foreach ($languages as $item) {
            echo $item . '<br>';
        }
    }
}

?>