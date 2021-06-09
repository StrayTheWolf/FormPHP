<?php

declare(strict_types=1);

include 'DB/readBase.php';
include 'DB/writeToBase.php';


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
        return view('list', ['title' => 'List', 'subtitle' => '', 'list' => readBase()]);
    }

    public function handler()
    {
        writeToBase();
    }

    public function e404()
    {
        return view('404' ,['title' => '404' , 'subtitle' => '']);
    }
}