<?php

namespace App\Core;

use PDO;
use PDOException;

class DB
{
    private static ?PDO $pdo = null;

    public static function conn(): PDO
    {
        if (self::$pdo) {
            return self::$pdo;
        }

        $db = Config::get('db');
        $dsn = "mysql:host={$db['host']};dbname={$db['name']};charset={$db['charset']}";

        try {
            self::$pdo = new PDO($dsn, $db['user'], $db['pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
            return self::$pdo;
        } catch (PDOException $e) {
            http_response_code(500);
            exit('Erro de ligação à base de dados.');
        }
    }
}
