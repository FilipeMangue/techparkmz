<?php
require_once dirname(__DIR__, 2) . '/Core/Helpers.php';

$currentUri = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');

function isActiveMenu(string $route): string
{
    global $currentUri;

    $route = trim($route, '/');

    if ($route === 'admin') {
        return preg_match('#/admin/?$#', '/' . $currentUri) ? 'active' : '';
    }

    return str_contains($currentUri, $route) ? 'active' : '';
}
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>CMS | Techpark Mozambique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= asset('css/app.css') ?>" rel="stylesheet">
</head>

<body class="admin-body">
<div id="loader"></div>

<aside class="sidebar">
    <div class="sidebar-brand">
        <div class="brand-icon">TP</div>
        <div class="brand-text">
            <strong>Techpark CMS</strong>
            <span>Painel Administrativo</span>
        </div>
    </div>

    <nav class="sidebar-menu">
        <a class="<?= isActiveMenu('admin') ?>" href="<?= url('admin') ?>">
            <span class="menu-icon">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M3 10.5L12 3L21 10.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1v-9.5Z"
                          stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <span>Dashboard</span>
        </a>

        <a class="<?= isActiveMenu('admin/servicos') ?>" href="<?= url('admin/servicos') ?>">
            <span class="menu-icon">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 7h16M4 12h16M4 17h10"
                          stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </span>
            <span>Serviços</span>
        </a>

        <a class="<?= isActiveMenu('admin/metricas') ?>" href="<?= url('admin/metricas') ?>">
            <span class="menu-icon">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M5 19V10M12 19V5M19 19V13"
                          stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </span>
            <span>Métricas</span>
        </a>

        <a class="<?= isActiveMenu('admin/auditoria') ?>" href="<?= url('admin/auditoria') ?>">
            <span class="menu-icon">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 3L20 6V11C20 16 16.5 20 12 21C7.5 20 4 16 4 11V6L12 3Z"
                          stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                </svg>
            </span>
            <span>Auditoria</span>
        </a>
    </nav>

    <form class="sidebar-logout" method="post" action="<?= url('logout') ?>">
        <?= App\Core\Csrf::field() ?>
        <button type="submit">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M15 17L20 12L15 7"
                      stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 12H9"
                      stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M12 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7"
                      stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
            <span>Sair</span>
        </button>
    </form>
</aside>

<main class="admin-main">
    <?= $content ?>
</main>

<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>