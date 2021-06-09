<?php
include_once 'initBase.php';

function writeToBase()
{
    //записываем в массив данные из инпутов
    $data = array('login' => $_POST['login'], 'password' => $_POST['password'], 'name' => $_POST['name'],
                  'last_name' => $_POST['last_name'], 'email' => $_POST['email'], 'phone_number' => $_POST['phone'],
                  'age' => $_POST['age'], 'sex' => $_POST['sex'], 'about_yourself' => $_POST['about'],
                  'agree_promo' => $_POST['agree_promo']);

    //подготавливаем запрос в базу
    $query = initBase()->prepare('INSERT INTO form (login, password, name, last_name, email, phone_number, age, sex, about_yourself, agree_promo) 
                                        VALUES (:login, :password, :name, :last_name, :email, :phone_number, :age, :sex, :about_yourself, :agree_promo)');

    //выполняем запрос в базу
    $query->execute($data);

    //передача сообщения в сессию для вывода
    $_SESSION['message'] = 'Form successfully send';
    //редирект на главную страницу
    header('Location: /');
    exit;
}

