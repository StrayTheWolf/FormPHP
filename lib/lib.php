<?php

declare(strict_types=1);

include 'Router.php';
include 'Page.php';
//include 'readBase.php';

function view(string $template = 'index', array $data = [])
{
    extract($data);

    ob_start();
    include __DIR__ . '/../pages/'. $template . '.php';
    $content = ob_get_contents();
    ob_get_clean();

    ob_start();
    include __DIR__ . '/../pages/layout.php';
    $page = ob_get_contents();
    ob_get_clean();

    return $page;
}