<?php

declare(strict_types=1);

class Page
{
    public function index()
    {
        return view('index', ['title' => 'Home', 'subtitle' => '']);
    }

    public function about()
    {
        return view('about',['title' => 'About', 'subtitle' => '']);
    }

    public function form()
    {
        return view('form' ,['title' => 'Form', 'subtitle' => '']);
    }

    public function list()
    {
        $dir = __DIR__ . '../../files/';
        $arr = [];
        $files = scandir($dir);
        $names = array_diff($files, [".", ".."]);
        foreach ($names as $name) {
            $content = file_get_contents(__DIR__ . '../../files/' . $name);
            $arr[] = json_decode($content, true);
        }
        return view('list', ['title' => 'List', 'subtitle' => '', 'list' => $arr]);
    }

    public function handler()
    {
        $saveFolder = __DIR__ . '../../files/';
        file_put_contents($saveFolder . microtime() . '.txt', json_encode($_POST));
        $_SESSION['message'] = 'Form successfully send';
        header('Location: /');
        exit;
    }

    public function e404()
    {
        return view('404' ,['title' => '404' , 'subtitle' => '']);
    }
}