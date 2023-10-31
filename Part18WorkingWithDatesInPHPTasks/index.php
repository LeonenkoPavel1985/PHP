
<!--22. Передайте в адресную строку GET-параметр date, в котором будет записана дата в формате '2013-12-31'. Преобразуйте ее в формат '31.12' (день.месяц) (DONE).-->

<form action="index.php" method="get">
    Введите дату в формате ГГГГ-ММ-ДД: <input type="text" name="date" />
    <input type="submit" value="Отправить" />
</form>

<?php
    if (isset($_GET['date'])) {
    $date = date('d.m', strtotime($_GET['date']));
    echo 'Преобразованная дата: ' .  $date;
    }
?>
