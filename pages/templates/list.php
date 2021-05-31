<?php
// определеяем директорию
$dir = __DIR__ . './../files';

//массив для хранения файлов после получения их по имени
$arr = [];

//ищем по директории поиска файлы и получаем их имена в массиве
$files = scandir($dir);

//убираем фильтрацией точки (которые обозначают пути) из массива с именами файлов
$names = array_diff($files, [".", ".."]);

//проходим циклом по именам, кладем в переменную содержимое файла в виде строки, передаем в новый элемент массива эту строку, декодированую в массив
foreach ($names as $name) {
    $content = file_get_contents(__DIR__ . '../files/' . $name);
    $arr[] = json_decode($content, true);
}