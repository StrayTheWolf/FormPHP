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

    public static function run(): mixed
    {

        if ($_SERVER['REQUEST_METHOD'] = 'GET') {
           return self::handleRoutes(self::$getRoutes);
        }

        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
           return self::handleRoutes(self::$postRoutes);
        }
    }

    public static function handleRoutes(array $routes): mixed
    {
        $currentUrl = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        foreach ($routes as $routeUrl => $action) {
            if ($routeUrl == $currentUrl) {
                $action = explode('@', $action);
                $handler = new $action[0];
                return $handler->{$action[1]}();
            }
        }
    }
}