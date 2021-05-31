<?php
$name = microtime();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = __DIR__ . '/files/' . $name .'.txt';
    file_put_contents($filename, json_encode($_POST));
    header('Location: /index.php?message=Ваши данные отправлены');
}