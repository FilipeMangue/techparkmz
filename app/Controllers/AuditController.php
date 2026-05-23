<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AuditLog;

class AuditController extends Controller
{
    public function index(): void
    {
        $this->requireAuth();
        $logs = AuditLog::latest(100);
        $this->view('admin/audit/index', compact('logs'), 'admin');
    }
}
