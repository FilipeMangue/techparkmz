<?php

namespace App\Controllers;

use App\Core\Controller;

class MetricController extends Controller
{
    public function index(): void
    {
        $this->requireAuth();

        $metrics = [
            'visitantes' => 0,
            'paginas_vistas' => 0,
            'leads' => 0,
            'downloads' => 0,
        ];

        $this->view('admin/metrics/index', compact('metrics'), 'admin');
    }
}
