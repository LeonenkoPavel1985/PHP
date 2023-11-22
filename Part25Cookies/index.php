
<!--Работа со cookie.-->

<!--10. Сделайте две страницы: index.php и test.php. При заходе на index спросите с помощью формы страну пользователя, запишите ее в куки с именем country. При заходе на test.php выведите 
    страну пользователя (DONE).-->

<form action="index.php" method="get">
    <p>Введите страну: <input type="text" name="country" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['country'])) {
   // setcookie('country', $_REQUEST['country']); // Просто устанавливаем cookee.
    setcookie('country', $_REQUEST['country'], time() + 3600); // Cookee сроком действия 1 час.
    echo '<br /><a href="test.php">test</a>' . '<br>';
}

?>
