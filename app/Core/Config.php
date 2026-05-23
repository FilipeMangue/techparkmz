<?php

namespace App\Core;

class Config
{
    private static array $config = [];

    public static function get(string $key, mixed $default = null): mixed
    {
        if (!self::$config) {
            self::$config = require dirname(__DIR__, 2) . '/config/app.php';
        }

        $segments = explode('.', $key);
        $value = self::$config;

        foreach ($segments as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                return $default;
            }
            $value = $value[$segment];
        }

        return $value;
    }
}
