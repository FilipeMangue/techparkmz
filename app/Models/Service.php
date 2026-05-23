<?php

namespace App\Models;

use App\Core\DB;

class Service
{
    public static function all(): array
    {
        return DB::conn()->query("SELECT * FROM services ORDER BY sort_order ASC, id DESC")->fetchAll();
    }

    public static function published(): array
    {
        return DB::conn()->query("SELECT * FROM services WHERE status='published' ORDER BY sort_order ASC, id DESC")->fetchAll();
    }

    public static function create(array $data): int
    {
        $sql = "INSERT INTO services (title, slug, summary, description, icon, status, sort_order)
                VALUES (:title, :slug, :summary, :description, :icon, :status, :sort_order)";
        DB::conn()->prepare($sql)->execute([
            ':title' => $data['title'],
            ':slug' => $data['slug'],
            ':summary' => $data['summary'],
            ':description' => $data['description'],
            ':icon' => $data['icon'],
            ':status' => $data['status'],
            ':sort_order' => $data['sort_order'],
        ]);
        return (int) DB::conn()->lastInsertId();
    }
}
