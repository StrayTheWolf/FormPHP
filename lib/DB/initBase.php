<?php

//инициализация доступа к базе
function initBase()
{
    $dsn = 'mysql:dbname=questionnaire;host=127.0.0.1';
    $user = 'root';
    $password = 'Werewolf1989*';

    return new PDO($dsn, $user, $password);
}

