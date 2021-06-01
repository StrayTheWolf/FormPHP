<?php

function template($template = 'index', $data = [])
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