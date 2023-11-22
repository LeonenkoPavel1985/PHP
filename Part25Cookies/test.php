<?php

if (isset($_COOKIE['country'])) {
    echo 'Ваша страна: ' . $_COOKIE['country'] . '.';
    echo '<br /><a href="index.php">index</a>';
}

?>