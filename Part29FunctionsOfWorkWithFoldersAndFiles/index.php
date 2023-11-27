<?php

// file_put_contents, file_get_contents, rename, copy, filesize, unlink, file_exists.

// file_put_contents — Пишет данные в файл (Функция идентична последовательным успешным вызовам функций fopen(), fwrite() и fclose()).
// file_get_contents — Считывает весь файл в строку.
// rename — Переименовывает файл или каталог.
// copy — Копирует файл.
// filesize - — Получает размер файла (возвращает размер файла в байтах).
// unlink — Удаляет файл.
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

// 2. Считайте данные из файла 'test.txt' и выведите их на экран (DONE).

// Первый способ (чтение всего файла).
$fileRead = file_get_contents('./test.txt');
echo 'Текст из указанного файла:' . '<br>' . $fileRead;

// Второй способ (чтение раздела файла).
$section = file_get_contents('./test.txt', FALSE, NULL, 2, 5); // Cмещение и длинна строки.
var_dump($section);

// 3. Переименуйте файл 'test.txt' в 'mir.txt' (DONE).

// rename('Старое имя', 'Новое имя', 'Ресурс контекстного потока')
rename('./test.txt', 'mir.txt');
echo 'Файл переименован.';

// 4. Создайте копию файла 'mir.txt' и назовите ее 'world.txt' (DONE).

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

// 6. Удалите файл 'world.txt' (DONE).

// Просто удаляем.
unlink('world.txt');
echo 'Файл успешно удален.';

// С созданием и удалением.
$file = fopen('world.txt', 'a');
fwrite($file, 'Привет, мир!');
fclose($file);
echo 'Файл: ' . $file . ' успешно создан.' . '<br>';

unlink('world.txt');
echo 'Файл успешно удален.';

// 7. Проверьте существование файлов 'world.txt' и 'mir.txt' (DONE).

$fileName_1 = './world.txt';
$fileName_2 = './mir.txt';

if (file_exists($fileName_1)) {
    echo 'Файл ' . $fileName_1 . ' существует.' . '<br>';
} else {
    echo 'Файл ' . $fileName_1 . ' не существует.' . '<br>';
}

if (file_exists($fileName_2)) {
    echo 'Файл ' . $fileName_2 . ' существует.' . '<br>';
} else {
    echo 'Файл ' . $fileName_2 . ' не существует.' . '<br>';
}

// Работа с file, PHP_EOL.

// 8. Создайте массив с элементами 'Иванов', 'Петров', 'Сидоров'. Запишите содержимое этого массива в файл 'file.txt' так, чтобы все элементы располагались на разных строках.
// Воспользуйтесь константой PHP_EOL (DONE).

$arr = array('Иванов', 'Петров', 'Сидоров');
file_put_contents('./file.txt', implode(PHP_EOL, $arr)); // PHP_EOL - корректный символ конца строки, используемый на данной платформе.

echo 'Создание файла и запись в него массива прошли успешно.';

// 9. Считайте содержимое файла 'file.txt' с помощью функции file. Запишите результат в массив $file (DONE).

// file — Читает содержимое файла и помещает его в массив.

$arrFile = file('file.txt');

echo 'Содержимое файла в виде массива:' . '<br>';
print_r($arrFile);

// Загрузка файлов на сервер.

// На scandir.

// scandir — Получает список файлов и каталогов, расположенных по указанному пути.

// 10. Создайте папку с названием 'folder' (DONE).

// mkdir — Создаёт директорию.

// Простое создание папки.
mkdir('./folder', 0700);
echo 'Папка создана.';

// Со структурой папок.
$structure = './folder1//folder2//folder3/';

// Для создания вложенной структуры необходимо указать параметр $recursive в mkdir().

if (!mkdir($structure, 0777, true)) {
    echo 'Не удалось создать директории...';
} else {
    echo 'Директория успешно создана...';
}

// 11. Выведите на экран название всех файлов из папки (DONE).

$dir = './folder';

$files = scandir($dir, SCANDIR_SORT_DESCENDING);
print_r($files);

// 12. Выведите на экран название всех файлов с расширением txt из папки (DONE).

// Первый способ. Использование функции glob(). glob — Находит файловые пути, совпадающие с шаблоном.
$files = glob('./folder/*.txt');

echo 'Файлы с расширением txt в указанной папке: ' . '<br>';
foreach ($files as $file) {
    echo $file . '<br>';
}

// Второй способ.Использование функции scandir().
$dir = './folder';
$files = scandir($dir);

foreach ($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);

    if ($extension == 'txt') {
        echo $file . '<br>';
    }
}

// Part 29 Functions Of Work With Folders And Files (DONE).

?>
