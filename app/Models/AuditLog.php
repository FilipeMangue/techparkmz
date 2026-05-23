<?php

namespace App\Models;

use App\Core\DB;
use App\Core\Session;

class AuditLog
{
    public static function record(string $action, string $module, string $description, array $newValues = [], array $oldValues = []): void
    {
        $sql = "INSERT INTO audit_logs
            (user_id, user_name, user_email, user_role, action, module, description, old_values, new_values, ip_address, user_agent, request_method, request_uri)
            VALUES
            (:user_id, :user_name, :user_email, :user_role, :action, :module, :description, :old_values, :new_values, :ip_address, :user_agent, :request_method, :request_uri)";

        DB::conn()->prepare($sql)->execute([
            ':user_id' => Session::get('user_id'),
            ':user_name' => Session::get('user_name', 'Sistema'),
            ':user_email' => Session::get('user_email'),
            ':user_role' => Session::get('user_role'),
            ':action' => $action,
            ':module' => $module,
            ':description' => $description,
            ':old_values' => $oldValues ? json_encode($oldValues, JSON_UNESCAPED_UNICODE) : null,
            ':new_values' => $newValues ? json_encode($newValues, JSON_UNESCAPED_UNICODE) : null,
            ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? null,
            ':user_agent' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255),
            ':request_method' => $_SERVER['REQUEST_METHOD'] ?? null,
            ':request_uri' => substr($_SERVER['REQUEST_URI'] ?? '', 0, 255),
        ]);
    }

    public static function latest(int $limit = 50): array
    {
        return DB::conn()->query("SELECT * FROM audit_logs ORDER BY id DESC LIMIT {$limit}")->fetchAll();
    }
}
