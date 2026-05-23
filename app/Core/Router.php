<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, string $action): void
    {
        $this->routes['GET'][$this->normalize($path)] = $action;
    }

    public function post(string $path, string $action): void
    {
        $this->routes['POST'][$this->normalize($path)] = $action;
    }

    public function dispatch(string $method, string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';
        $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
        $path = preg_replace('#^' . preg_quote($scriptDir, '#') . '#', '', $path);
        $path = $this->normalize($path);

        $action = $this->routes[$method][$path] ?? null;

        if (!$action) {
            http_response_code(404);
            exit('Página não encontrada.');
        }

        [$controller, $methodName] = explode('@', $action);
        $class = 'App\\Controllers\\' . $controller;

        if (!class_exists($class)) {
            http_response_code(500);
            exit('Controller não encontrado: ' . $class);
        }

        (new $class())->$methodName();
    }

    private function normalize(string $path): string
    {
        $path = '/' . trim($path, '/');
        return $path === '/' ? '/' : rtrim($path, '/');
    }
}
