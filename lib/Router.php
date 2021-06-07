<?php

declare(strict_types=1);

class Router
{
    private static array $getRoutes = [];
    private static array $postRoutes = [];

    public static function get(string $path, string $action): void
    {
        self::$getRoutes[trim($path, '/')] = $action;
    }

    public static function post(string $path, string $action): void
    {
        self::$postRoutes[trim($path, '/')] = $action;
    }

    public static function run($path)
    {
       //print_r(self::$getRoutes);
      // print_r(self::$postRoutes);

        // в проверке смотрим в есть ли совпадение между именем пути и ключем в массиве с путями, если есть переход по адресу, если нет совпадения то страница 404
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (in_array($path, array_keys(self::$getRoutes))) {
                return self::handleRoutes(self::$getRoutes);
            }
            header('Location: /404');
        }


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return self::handleRoutes(self::$postRoutes);
        }
    }

    public static function handleRoutes(array $routes): mixed
    {
        $currentUrl = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');


        foreach ($routes as $routeUrl => $action) {

            if ($routeUrl == $currentUrl) {
                $action = explode('@', $action);
                print_r($action[1]);



                $handler = new $action[0];
                return $handler->{$action[1]}();
            }
        }
    }
}