<?php

namespace App\Core;

class Controller
{
    protected function view(string $view, array $data = [], string $layout = 'public'): void
    {
        extract($data);
        require_once dirname(__DIR__) . '/Core/Helpers.php';

        $viewPath = dirname(__DIR__) . '/Views/' . $view . '.php';
        $layoutPath = dirname(__DIR__) . '/Views/layouts/' . $layout . '.php';

        if (!file_exists($viewPath)) {
            http_response_code(404);
            exit('View não encontrada.');
        }

        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        require $layoutPath;
    }

    protected function requireAuth(): void
    {
        if (!Session::get('user_id')) {
            redirect('login');
        }
    }

    protected function securityHeaders(): void
    {
        header('X-Frame-Options: SAMEORIGIN');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
    }
}
