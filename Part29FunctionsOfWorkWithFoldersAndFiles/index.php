<?php

// file_put_contents, file_get_contents, rename, copy, filesize, unset, file_exists.

// file_put_contents — Пишет данные в файл (Функция идентична последовательным успешным вызовам функций fopen(), fwrite() и fclose()).
// file_get_contents — Считывает весь файл в строку.
// rename — Переименовывает файл или каталог.
// copy — Копирует файл.
// filesize - — Получает размер файла.
// unset — Удаляет переменную.
// file_exists — Проверяет, существует ли файл или каталог.

// 1. Создайте файл 'test.txt' и запишите в него фразу 'Привет, мир!' (DONE).

// Первый способ:

$text = 'Привет, мир!';
file_put_contents('./test.txt', $text);

echo 'Файл создан и записан или дозаписан если существует.';

// Второй способ:

$file = './test.txt';
// Открываем файл для получения существующего содержимого.
$current = file_get_contents($file);
// Добавляем новой записи в файл.
$current .= "Привет, мир!\n";
// Пишем содержимое обратно в файл.
file_put_contents($file, $current);

echo 'Файл создан и записан или дозаписан если существует.';

// Третий способ.

$file = './test.txt';
// Добавляем новой записи в файл.
$text = 'Привет, мир!';
// Пишем содержимое в файл, используя флаг FILE_APPEND для дописывания содержимого в конец файла и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время.
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);

echo 'Файл создан и записан или дозаписан если существует.'

?>
