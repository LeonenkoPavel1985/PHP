<!--Формы.-->

<!--В методе GET данные отправляются в виде параметров URL, которые обычно представляют собой строки пар имени и значения, разделенные амперсандами (&).-->
<!--В методе POST данные отправляются на сервер в виде пакета в отдельном сообщении со скриптом обработки. Данные, отправленные с помощью метода POST, не будут отображаться в URL-адресе.-->

<!--1. Спросите имя пользователя с помощью формы. Результат запишите в переменую $name. Выведите на экран фразу 'Привет, %Имя%' (DONE).-->

<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Введите ваше имя" />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет, ' . $name . ' !!!';
}

?>

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

<!--3. Спросите возраст пользователя. Если форма была отправлена и введен возраст, товыведите его на экран, а форму уберите. Если же форма не была отправлена (это
будет пр и первом заходе на страницу) — просто покажите ее (DONE).-->

<form action="index.php" method="get">
    <p>
        Сколько вам лет: <input type="number" name="age" />
    </p>
    <input type="submit" value="Подтвердить" name="submit" />

</form>

<?php

if (isset($_REQUEST['age'])) {
    $age = $_REQUEST['age'];
    echo $age;
} 

if (!isset($_REQUEST['age'])) :
    ?>
    <form method="get">
    <p>
        Сколько вам лет: <input type="number" name="age" />
    </p>
    <input type="submit" value="Подтвердить" name="submit" />
</form>
<?php endif; ?>

<!--4. Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. 
Если все верно — выведите 'Доступ разрешен!', в противном случае — 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь (DONE).-->

<form action="index.php" method="post">
    <input type="text" name="login" placeholder="Введите логин" />
    <input type="password" name="password" placeholder="Введите пароль" />
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php

$login = 'Pavel';
$pass = 'Pavel1985';
if (isset($_REQUEST['login']) and isset($_REQUEST['password'])) {
    $login = trim($_REQUEST['login']);
    $password = trim($_REQUEST['password']);

    if ($login == $login and $password == $pass) {
        echo 'Доступ разрешен!';
    } else {
        echo 'Доступ запрещен!';
    }
}

?>


<!--GET-запросы и функция include.-->

<!---->
<!--Выражение include включает и выполняет указанный файл.-->

<!--5. Отправьте GET-запрос. Запишите номер страницы в переменную $page (DONE).-->

<form action="index.php" method="get">
    Ввдите номер страницы: <input type="text" name="page" />
    <br />
    <input type="submit" value="Отправить" name="submit" />
</form>

<?php

$page = 'не определена';

if (isset ($_GET["page"])) {
    $page = $_GET["page"];
}

echo 'Номер страницы: ' . $page . '.';

?>

<!--Атрибуты value и placeholder.-->

<!--value - значение вводимых данных пользователем в поле ввода.-->

<!--6. Спросите имя пользователя с помощью формы. Результат запишите в переменую $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали (DONE).-->

<form action="index.php" method="post">
    <p>
        Введите ваше имя: <input type="text" name="name" value="<?=$name;?>" />
        <br />
        <input type="submit" value="Подтвердить" name="submit" />
    </p>
</form>

<?php

$name = '';

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo $name;
}

?>

<!--7. Спросите у пользователя имя, а также попросите его ввести сообщение (textarea).Сделайте так, чтобы после отправки формы значения ее полей не пропадали (DONE).-->

<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Введите имя" value="<?= $name; ?>" />
    <br />
    <textarea name="message" id="" cols="42" rows="10" placeholder="Введите сообщение"><?= $message; ?></textarea>
    <input type="submit" value="Подтвердить" name="submit" />
</form>

<?php
$message = '';
$name = '';
if (isset($_REQUEST['name']) and isset($_REQUEST['message'])) {
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];
    echo 'Привет, ' . $name . '<br>' . $message;
}
?>

<!--Part 16 Working With Forms In PHP (DONE).-->

