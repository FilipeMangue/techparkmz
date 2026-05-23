<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\DB;

class DashboardController extends Controller
{
    public function index(): void
    {
        $this->requireAuth();

        $stats = [
            'services' => DB::conn()->query("SELECT COUNT(*) total FROM services")->fetch()['total'] ?? 0,
            'users' => DB::conn()->query("SELECT COUNT(*) total FROM users")->fetch()['total'] ?? 0,
            'audit_logs' => DB::conn()->query("SELECT COUNT(*) total FROM audit_logs")->fetch()['total'] ?? 0,
            'contacts' => DB::conn()->query("SELECT COUNT(*) total FROM contact_messages")->fetch()['total'] ?? 0,
        ];

        $this->view('admin/dashboard', compact('stats'), 'admin');
    }
}
