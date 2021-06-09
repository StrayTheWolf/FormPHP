<?php

/* Подключение к базе данных MySQL с помощью вызова драйвера */
$dsn = 'mysql:dbname=questionnaire;host=127.0.0.1';
$user = 'root';
$password = 'Werewolf1989*';

$dbh = new PDO($dsn, $user, $password);
$dbh->exec(file_get_contents(__DIR__ . 'install.sql'));

