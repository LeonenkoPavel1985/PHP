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
    echo '<br /><a href="test.php">test</a>';
}

?>

<!--2. Запишите в сессию время захода пользователя на сайт. При обновлении страницывыводите сколько секунд назад пользователь зашел на сайт (DONE).-->

<?php

session_start();

if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}

echo 'Пользователь заходил на сайт: ' .  time() - $_SESSION['time'] . ' секунд назад.';

?>