<?php

declare(strict_types=1);

session_start();

include 'lib/lib.php';

//имя пути (url) без слеша
$path = trim($_SERVER['REQUEST_URI'], '/');

Router::get('/', 'Page@index');
Router::get('/about', 'Page@about');
Router::get('/form', 'Page@form');
Router::get('/list', 'Page@list');
Router::get('/404', 'Page@e404');
Router::post('/handler', 'Page@handler');

echo Router::run($path);
