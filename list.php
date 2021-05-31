<?php

// определеяем директорию
$dir = __DIR__ . '/files';

//массив для хранения файлов после получения их по имени
$arr = [];

//ищем по директории поиска файлы и получаем их имена в массиве
$files = scandir($dir);

//убираем фильтрацией точки (которые обозначают пути) из массива с именами файлов
$names = array_diff($files, [".",".."]);

//проходим циклом по именам, кладем в переменную содержимое файла в виде строки, передаем в новый элемент массива эту строку, декодированую в массив
foreach ($names as $name) {
    $content = file_get_contents(__DIR__ . '/files/' . $name);
    $arr[] = json_decode($content, true);
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
<ul style="padding: 0">
    <ul>
        <li>
            <a href="index.php" style="font-size: 25px;">Form</a>
        </li>
        <li>
            <a href="list.php" style="font-size: 25px;">List</a>
        </li>
    </ul>
</ul>

<ul>
    <?php foreach ($arr as $item): ?>
        <br>
        <li>
            Name:
            <?= $item['name'] ?>
            <br>
            Age:
            <?= $item['age'] ?>
            <br>
            Email:
            <?= $item['email'] ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
