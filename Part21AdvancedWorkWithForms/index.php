
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

<!--Radio.-->

<!--3. Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен (DONE).-->

<form action="index.php" method="post">
    <h3>Знаете ли вы PHP ?</h3>
    <p>Да<input type="radio" name="answer" value="Да" title="Да" /></p>
    <p>Нет<input type="radio" name="answer" value="Нет" title="Нет" checked /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['answer']) and $_REQUEST['answer'] == 'Да') {
    echo 'Я знаю PHP.';
} else if (isset($_REQUEST['answer']) and $_REQUEST['answer'] == 'Нет') {
    echo 'Я не знаю PHP.';
}

?>

<!--4. Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30 (DONE).-->

<form action="index.php" method="post">
    <h3>Сколько вам лет ?</h3>
    <p>Менее 20<input type="radio" name="age" value="Менее 20" title="Менее 20" /></p>
    <p>20 - 25<input type="radio" name="age" value="20 - 25" title="20 - 25" /></p>
    <p>26 - 30<input type="radio" name="age" value="26 - 30" title="26 - 30" /></p>
    <p>Более 30<input type="radio" name="age" value="Более 30" title="Более 30" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['age'])) {
    echo 'Ваш возраст: ' . $_REQUEST['age'] . '.';
}

?>

<!--5. Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30 (DONE).-->

<form action="index.php" method="post">
    <h3>Сколько вам лет ?</h3>
    <select name="age" id="">
        <option value="менее 20">менее 20</option> 
        <option value="20-25">20-25</option>
        <option value="26-30">26-30</option>
        <option value="более 30">более 30</option>
    </select>
    <p><input type="submit" value="Подтвердить" /></p>

</form>

<?php

if (isset($_REQUEST['age'])) {
    echo 'Ваш возраст: ' . $_REQUEST['age'] . '.';
}

?>

<!--6. Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь (DONE).-->

<form action="index.php" method="post">
    <h4>Какие языки программирования вы знаете ?</h4>
    <select name="proglanguage[]" size="4" multiple="multiple" id="">
        <option value="html">html</option>
        <option value="css">css</option>
        <option value="php">php</option>
        <option value="javascript">javascript</option>
    </select>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['proglanguage'])) {
    echo 'Я знаю: ' . implode(', ', $_REQUEST['proglanguage']) . '.';
}

?>