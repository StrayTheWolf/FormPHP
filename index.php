<?php
switch (trim($_SERVER['REQUEST_URI'], '/')) {
    case '':
        include __DIR__ . '/pages/index.php';
        break;

    case 'about':
        include __DIR__ . '/pages/about.php';
        break;

    case 'form':
        include __DIR__ . '/pages/form.php';
        break;

    case 'list':
        include __DIR__ . '/pages/list.php';
        break;

    default:
        include __DIR__ . '/pages/404.php';
        break;
}


