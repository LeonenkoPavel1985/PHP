<?php

session_start();

if (!empty($_SESSION['town']) and !empty($_SESSION['age'])) {
    $town = $_SESSION['town'];
    $age = $_SESSION['age'];
} else {
    $town = '';
    $age = '';
}

?>

<form action="" method="get">
    <p>Введите Имя: <input type="text" name="name" /></p>
    <p>Введите возраст: <input type="text" name="age" value="<?php echo $age ?>" /></p>
    <p>Введите город: <input type="text" name="town" value="<?php echo $town ?>" /></p>
    <p><input type="submit" value="Подтвердить" /></p>
</form>

<?php

echo '<br /><a href="index.php">index</a>';

?>