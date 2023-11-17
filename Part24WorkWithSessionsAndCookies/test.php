
<?php

session_start(); // Запуск сессии.

//Если есть данные в сессии о стране.

if (isset($_SESSION['country'])) {
    echo $_SESSION['country']; // Вывод страны на страницу.
    echo '<br /><a href="index.php">index</a>';
}

?>

