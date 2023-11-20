
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