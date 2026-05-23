<?php require_once dirname(__DIR__, 2) . '/Core/Helpers.php'; ?>
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
    <strong>Techpark CMS</strong>
    <a href="<?= url('admin') ?>">Dashboard</a>
    <a href="<?= url('admin/servicos') ?>">Serviços</a>
    <a href="<?= url('admin/metricas') ?>">Métricas</a>
    <a href="<?= url('admin/auditoria') ?>">Auditoria</a>
    <form method="post" action="<?= url('logout') ?>">
        <?= App\Core\Csrf::field() ?>
        <button type="submit">Sair</button>
    </form>
</aside>
<section class="admin-main">
    <?= $content ?>
</section>
<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>
