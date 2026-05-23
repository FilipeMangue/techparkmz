<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Csrf;
use App\Models\AuditLog;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(): void
    {
        $this->requireAuth();
        $services = Service::all();
        $this->view('admin/services/index', compact('services'), 'admin');
    }

    public function create(): void
    {
        $this->requireAuth();
        $this->view('admin/services/create', [], 'admin');
    }

    public function store(): void
    {
        $this->requireAuth();
        Csrf::verify();

        $title = trim($_POST['title'] ?? '');
        $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $title), '-'));

        $data = [
            'title' => $title,
            'slug' => $slug,
            'summary' => trim($_POST['summary'] ?? ''),
            'description' => trim($_POST['description'] ?? ''),
            'icon' => trim($_POST['icon'] ?? 'chip'),
            'status' => $_POST['status'] ?? 'draft',
            'sort_order' => (int) ($_POST['sort_order'] ?? 0),
        ];

        $id = Service::create($data);
        AuditLog::record('create', 'services', 'Serviço criado', ['id' => $id] + $data);

        redirect('admin/servicos');
    }
}
