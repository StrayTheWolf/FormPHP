<?php

include_once 'initBase.php';

function readBase()
{
//запрос из базы
    $query = initBase()->query('SELECT * FROM form ORDER BY id');

//получение результатов запроса и возврат их в вызов функции
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

