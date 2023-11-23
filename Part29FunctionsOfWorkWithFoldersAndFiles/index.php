<?php

// file_put_contents, file_get_contents, rename, copy, filesize, unset, file_exists.

// file_put_contents — Пишет данные в файл (Функция идентична последовательным успешным вызовам функций fopen(), fwrite() и fclose()).
// file_get_contents — Считывает весь файл в строку.
// rename — Переименовывает файл или каталог.
// copy — Копирует файл.
// filesize - — Получает размер файла (возвращает размер файла в байтах).
// unset — Удаляет переменную.
// file_exists — Проверяет, существует ли файл или каталог.

// 1. Создайте файл 'test.txt' и запишите в него фразу 'Привет, мир!' (DONE).
/*
// Первый способ:

$text = 'Привет, мир!';
file_put_contents('./test.txt', $text);

echo 'Файл создан и записан или дозаписан если существует.';

// Второй способ:

$file = './test.txt';
// Открываем файл для получения существующего содержимого.
$current = file_get_contents($file);
// Добавляем новую запись в файл.
$current .= "Привет, мир!\n";
// Пишем содержимое обратно в файл.
file_put_contents($file, $current);

echo 'Файл создан и записан или дозаписан если существует.';

// Третий способ.

$file = './test.txt';
// Добавляем новую запись в файл.
$text = 'Привет, мир!';
// Пишем содержимое в файл, используя флаг FILE_APPEND для дописывания содержимого в конец файла и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время.
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);

echo 'Файл создан и записан или дозаписан если существует.'
*/

// 2. Считайте данные из файла 'test.txt' и выведите их на экран (DONE).
/*
// Первый способ (чтение всего файла).
$fileRead = file_get_contents('./test.txt');
echo 'Текст из указанного файла:' . '<br>' . $fileRead;

// Второй способ (чтение раздела файла).
$section = file_get_contents('./test.txt', FALSE, NULL, 2, 5); // Cмещение и длинна строки.
var_dump($section);
*/

// 3. Переименуйте файл 'test.txt' в 'mir.txt' (DONE).
/*
// rename('Старое имя', 'Новое имя', 'Ресурс контекстного потока')
rename('./test.txt', 'mir.txt');
echo 'Файл переименован.';
*/

// 4. Создайте копию файла 'mir.txt' и назовите ее 'world.txt' (DONE).
/*
// Первый способ:
copy('mir.txt', 'world.txt');
echo 'Файл скопирован с новым именем.';

// Второй способ:
$file = 'mir.txt';
$copyFile = 'world_2.txt';

if (!copy($file, $copyFile)) {
    echo "Не удалось скопировать $file...\n";
} else {
    echo 'Файл скопирован с новым именем.';
}
*/

// 5. Определите размер файла 'world.txt'. Выведите его на экран (DONE).

$file = 'world.txt';

$fileSize = filesize($file);
echo 'Размер файла составляет: ' . $fileSize . ' байт.' . '<br>';

// Дополнительно.
$fileSizeKilobyte = $fileSize / 1000;
echo 'Размер файла составляет: ' . $fileSizeKilobyte . ' килобайт.' . '<br>';

$fileSizeMegabyte = $fileSizeKilobyte / 1000;
echo 'Размер файла составляет: ' . $fileSizeMegabyte . ' мегабайт.' . '<br>';

$fileSizeGigabyte = $fileSizeMegabyte / 1000;
echo 'Размер файла составляет: ' . $fileSizeGigabyte . ' гагабайт.' . '<br>';



?>
