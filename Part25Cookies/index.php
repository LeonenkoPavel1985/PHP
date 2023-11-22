
<!--Работа со cookie.-->

<!--10. Сделайте две страницы: index.php и test.php. При заходе на index спросите с помощью формы страну пользователя, запишите ее в куки с именем country. При заходе на test.php выведите 
    страну пользователя (DONE).-->
<!--11. Удалите куку с именем country (DONE).-->

<form action="index.php" method="get">
    <p>Введите страну: <input type="text" name="country" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

if (isset($_REQUEST['country'])) {
   // setcookie('country', $_REQUEST['country']); // Просто устанавливаем cookee.
   setcookie('country', $_REQUEST['country'], time() + 3600); // Cookee сроком действия 1 час.
   // Для удаления cookie достаточно в качестве срока действия указать какое-либо время в прошлом.
   setcookie('country', $_REQUEST['country'], time() - 3600);
   echo '<br /><a href="test.php">test</a>' . '<br>';
}

?>

<?php

// 12. Установите куку с именем age. Запишите туда случайное число от 10 до 70 (с помощью mt_rand). Сделайте так, чтобы эта кука установилась на 1 час, на 3 часа,
// на 1 день, на год, на 10 лет, до конца текущего дня, до конца текущего года (DONE).

$age = mt_rand(10, 70);

setcookie('age', $age, time() + 3600); // Cookee сроком действия 1 час.
setcookie('age', $age, time() + 10800); // Cookee сроком действия 3 часа.
setcookie('age', $age, time() + 60 * 60 * 24); // Cookee сроком действия 1 день.
setcookie('age', $age, time() + 31556926); // Cookee сроком действия 1 год.
setcookie('age', $age, time() + (365 * 24 * 60 * 60)); // Cookee сроком действия 1 год.
setcookie('age', $age, time() + ((365 * 24 * 60 * 60)*10)); // Cookee сроком действия 10 лет.
setcookie('age', $age, time() + (10 * 365 * 24 * 60 * 60)); // Cookee сроком действия 10 лет.
setcookie('age', $age, 86400 - 3600 * date("H") - 60 * date("i") - date("s")); // Cookee сроком действия до конца текущего дня.
setcookie('age', $age, date("Y-m-d H:i:s", strtotime("December 31"))); // Cookee сроком действия до конца текущего года.

?>