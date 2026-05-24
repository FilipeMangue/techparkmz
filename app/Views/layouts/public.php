<?php require_once dirname(__DIR__, 2) . '/Core/Helpers.php'; ?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Techpark Mozambique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= asset('css/app.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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

<footer class="premium-footer">

    <div class="footer-main">

        <div class="footer-brand">
            <div class="footer-logo">
                <img src="<?= asset('img/logo-techpark.jpeg') ?>" alt="Techpark Mozambique">
                
                <div>
                    <strong>Techpark Mozambique</strong>
                    <span>Tecnologia • Inovação • Impacto</span>
                </div>
            </div>

            <p>
                Hub tecnológico moçambicano focado em desenvolvimento digital,
                software, segurança eletrónica, inovação, startups e transformação tecnológica.
            </p>

            <div class="footer-socials">
                <a href="#" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="#" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Navegação</h4>

            <a href="<?= url('') ?>">Home</a>
            <a href="<?= url('servicos') ?>">Serviços</a>
            <a href="<?= url('solucoes') ?>">Soluções</a>
            <a href="<?= url('startups') ?>">Startups</a>
            <a href="<?= url('eventos') ?>">Eventos</a>
            <a href="<?= url('recursos') ?>">Recursos</a>
        </div>

        <div class="footer-col">
            <h4>Áreas</h4>

            <span>Software & Plataformas</span>
            <span>Segurança Eletrónica</span>
            <span>Infraestrutura & Redes</span>
            <span>Startups & Inovação</span>
            <span>Consultoria Tecnológica</span>
            <span>Formação Digital</span>
        </div>

        <div class="footer-col">
            <h4>Contacto</h4>

            <span>Maputo, Moçambique</span>
            <span>info@techpark.co.mz</span>
            <span>+258 82 260 8614</span>
        </div>

    </div>

    <div class="footer-bottom">
        <span>
            © <?= date('Y') ?> Techpark Mozambique. Todos os direitos reservados.
        </span>

        <span>
            Tecnologia • Segurança • Inovação • Impacto
        </span>
    </div>

</footer>

<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>