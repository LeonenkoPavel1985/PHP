
<!--Работа с сессиями.-->

<!--1. Сделайте две страницы: index.php и test.php. При заходе на index спросите с помощью формы страну пользователя, запишите ее в сессию. При заходе на test.php выведите страну пользователя (DONE).-->

<form action="" method="get">
    <p>Введите страну: <input type="text" name="country" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['country'])) { // При условии если поле заполнено.
    session_start(); // Запуск сессии.
    $_SESSION['country'] = $_REQUEST['country']; // Запись в сессию.
    echo '<br /><a href="test.php">test</a>' . '<br>';
}

?>

<!--2. Запишите в сессию время захода пользователя на сайт. При обновлении страницывыводите сколько секунд назад пользователь зашел на сайт (DONE).-->

<?php

session_start();

if (!empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}

echo 'Пользователь заходил на сайт: ' . time() - $_SESSION['time'] . ' секунд назад.' . '<br>';

?>

<!--3. Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено (DONE).-->

<form action="" method="get">
    <p>Введите ваш email:<input type="text" name="email" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
    <p></p>
</form>

<?php

if(!empty($_SESSION['email'])) { // При условии если поле заполнено.
    session_start();
    $_SESSION['email'] = $_REQUEST['email']; // Запись email в сессию.
}

?>

<?php

session_start();

// Если телефон email есть в сессии записываем его в переменную $email.
if (!empty($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    $email = '';
}

?>

<form action="" method="get">
    <p>Введите имя: <input type="text" name="name" /></p>
    <p>Введите фамилию: <input type="text" name="surname" /></p>
    <p>Введите пароль: <input type="text" name="password" /></p>
    <!-- Заполняем атрибут value переменной $email.-->
    <p>Введите email: <input type="text" name="email" value="<?php echo $email ?>" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<!--4. Сделайте счетчик обновления страницы пользователем. Данные храните в сессии. Скрипт должен выводить на экран количество обновлений. При первом заходе на страницу он должен вывести 
    сообщение о том, что вы еще не обновляли страницу (DONE).-->

<?php

session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
    echo 'Вы впервый раз посетили страницу.' . '<br>';
} else {
    ++$_SESSION['counter'];
}

echo 'Вы обновили страницу: ' . $_SESSION['counter'] . ' раз(-а).' . '<br>';

?>

<!--5. Сделайте две страницы: index.php и form.php. При заходе на index спросите с помощью формы город и возраст пользователя. На form.php сделайте форму с полями 'Имя', 'Возраст', 'Город'. 
    При заходе на form.php сделайте так, чтобы поля 'Возраст' и 'Город' уже были заполнены (DONE).
    6. Добавьте в предыдущую задачу страницу logout.php. При заходе на нее разрушайте сессию пользователя (DONE).-->

<form action="" method="get">
    <p>Введите город: <input type="text" name="town" /> </p>
    <p>Введите возраст: <input type="text" name="age" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (!empty($_SESSION['town']) and !empty($_SESSION['age'])) {
    session_start();
    $_SESSION['town'] = $_REQUEST['town'];
    $_SESSION['age'] = $_REQUEST['age'];
    echo '<br /><a href="form.php">Form</a>' . '<br>';
}

?>