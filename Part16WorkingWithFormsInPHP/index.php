<!--Формы.-->

<!--В методе GET данные отправляются в виде параметров URL, которые обычно представляют собой строки пар имени и значения, разделенные амперсандами (&).-->
<!--В методе POST данные отправляются на сервер в виде пакета в отдельном сообщении со скриптом обработки. Данные, отправленные с помощью метода POST, не будут отображаться в URL-адресе.-->

<!--1. Спросите имя пользователя с помощью формы. Результат запишите в переменую $name. Выведите на экран фразу 'Привет, %Имя%' (DONE).-->
<!--
<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Введите ваше имя" />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php
/*
if (isset ($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет, ' . $name . ' !!!';
}
*/
?>
-->

<!--2. Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (textarea). Выведите эти данные на экран в формате, приведенном под данной . Позаботьтесь о том, 
    чтобы пользователь не мог вводить теги и таким образом сломать сайт (DONE). 
    Привет, ... , ... лет.
    Твое сообщение: ...-->

<form action="index.php" method="get">
    <p>
        Введите ваше имя: <input type="text" name="name" />
    </p>
    <p>
        Введите ваш возраст: <input type="number" name="age" />
    </p>
    <textarea name="text" id="" cols="42" rows="10" placeholder="Введите сообщение"></textarea> 
    <br />
    <br />
    <input type="submit" value="Подтвердить" name="submit" />

</form>

<?php

if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $text = $_REQUEST['text'];

    echo 'Привет, ' . $name . ' ,' . $age . ' лет.' . '<br>';
    echo 'Твое сообщение: ' . $text;
}

?>