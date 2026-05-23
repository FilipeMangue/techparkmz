<?php

namespace App\Core;

class Csrf
{
    public static function token(): string
    {
        $name = Config::get('security.csrf_token_name', '_csrf');

        if (!Session::get($name)) {
            Session::put($name, bin2hex(random_bytes(32)));
        }

        return Session::get($name);
    }

    public static function field(): string
    {
        $name = Config::get('security.csrf_token_name', '_csrf');
        $token = htmlspecialchars(self::token(), ENT_QUOTES, 'UTF-8');
        return '<input type="hidden" name="' . $name . '" value="' . $token . '">';
    }

    public static function verify(): void
    {
        $name = Config::get('security.csrf_token_name', '_csrf');
        $sent = $_POST[$name] ?? '';
        $stored = Session::get($name, '');

        if (!$sent || !$stored || !hash_equals($stored, $sent)) {
            http_response_code(419);
            exit('Token CSRF inválido.');
        }
    }
}
