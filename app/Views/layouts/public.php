<?php require_once dirname(__DIR__, 2) . '/Core/Helpers.php'; ?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Techpark Mozambique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= asset('css/app.css') ?>" rel="stylesheet">
</head>
<body>
<div id="loader"></div>
<header class="site-header">
    <a class="brand" href="<?= url('/') ?>">Techpark Mozambique</a>
    <nav>
        <a href="<?= url('/') ?>">Home</a>
        <a href="<?= url('servicos') ?>">Serviços</a>
        <a href="<?= url('solucoes') ?>">Soluções</a>
        <a href="<?= url('startups') ?>">Startups</a>
        <a href="<?= url('eventos') ?>">Eventos</a>
        <a href="<?= url('recursos') ?>">Recursos</a>
        <a href="<?= url('progresso') ?>">Progresso</a>
        <a href="<?= url('contactos') ?>">Contactos</a>
    </nav>
</header>
<main>
    <?= $content ?>
</main>
<footer class="footer">
    <strong>Techpark Mozambique, Lda</strong>
    <span>Hub tecnológico, inovação e segurança eletrónica.</span>
</footer>
<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>
