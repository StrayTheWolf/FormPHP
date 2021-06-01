<?php

session_start();

include 'lib/lib.php';

switch (trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/')) {
    case '':
        echo template('index', ['title' => 'Home', 'subtitle' => '']);
        break;

    case 'about':
        echo template('about',['title' => 'About', 'subtitle' => '']);
        break;

    case 'form':
        echo template('form' ,['title' => 'Form', 'subtitle' => '']);
        break;

    case 'list':
        $dir = __DIR__ . '/files/';
        $arr = [];
        $files = scandir($dir);
        $names = array_diff($files, [".", ".."]);
        foreach ($names as $name) {
            $content = file_get_contents(__DIR__ . '/files/' . $name);
            $arr[] = json_decode($content, true);
        }
        $_SESSION['list'] = $arr;
        echo template('list', ['title' => 'List', 'subtitle' => '']);
        break;

    case 'handler':
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           file_put_contents('files/' . microtime() . '.txt', json_encode($_POST));
           $_SESSION['message'] = 'Form successfully send';
           header('Location: /');
           exit;
       }
        break;

    default:
        echo template('404' ,['title' => '404' , 'subtitle' => 'This is 404 page']);
        break;
}

