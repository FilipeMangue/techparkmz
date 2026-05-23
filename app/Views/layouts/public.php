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

<header class="site-header premium-header">
    <a class="brand brand-wrap" href="<?= url('/') ?>">
        <img src="<?= asset('img/logo-techpark.jpeg') ?>" alt="Techpark Mozambique">
        <span>Techpark Mozambique</span>
    </a>

    <nav class="main-nav">
        <a href="<?= url('/') ?>">Home</a>
        <a href="<?= url('servicos') ?>">Serviços</a>
        <a href="<?= url('solucoes') ?>">Soluções</a>
        <a href="<?= url('startups') ?>">Startups</a>
        <a href="<?= url('eventos') ?>">Eventos</a>
        <a href="<?= url('recursos') ?>">Recursos</a>
        <a href="<?= url('progresso') ?>">Progresso</a>
    </nav>

    <a class="header-cta" href="<?= url('contactos') ?>">Contactar</a>
</header>

<main>
    <?= $content ?>
</main>

<footer class="footer premium-footer">
    <div class="footer-main">
        <div class="footer-brand">
            <div class="footer-logo">
                <img src="<?= asset('img/logo-techpark.jpeg') ?>" alt="Techpark Mozambique">
                <strong>Techpark Mozambique</strong>
            </div>

            <p>
                Hub tecnológico focado em inovação, software, segurança eletrónica,
                formação e transformação digital em Moçambique.
            </p>
        </div>

        <div class="footer-col">
            <h4>Navegação</h4>
            <a href="<?= url('/') ?>">Home</a>
            <a href="<?= url('servicos') ?>">Serviços</a>
            <a href="<?= url('solucoes') ?>">Soluções</a>
            <a href="<?= url('progresso') ?>">Progresso</a>
        </div>

        <div class="footer-col">
            <h4>Ecossistema</h4>
            <a href="<?= url('startups') ?>">Startups</a>
            <a href="<?= url('eventos') ?>">Eventos</a>
            <a href="<?= url('recursos') ?>">Recursos</a>
            <a href="<?= url('contactos') ?>">Contactos</a>
        </div>

        <div class="footer-col">
            <h4>Contacto</h4>
            <span>Maputo, Moçambique</span>
            <span>info@techparkmz.com</span>
            <span>Transformação digital com confiança.</span>
        </div>
    </div>

    <div class="footer-bottom">
        <span>© <?= date('Y') ?> Techpark Mozambique, Lda. Todos os direitos reservados.</span>
        <span>Software • Segurança • Inovação</span>
    </div>
</footer>

<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>