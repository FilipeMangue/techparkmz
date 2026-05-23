<section class="tp-slider" data-slider>
    <div class="tp-slide active">
        <div class="tp-slide-content">
            <span class="eyebrow">Techpark Mozambique</span>
            <h1>Hub tecnológico para inovação, segurança e transformação digital.</h1>
            <p>Desenvolvemos soluções digitais confiáveis para empresas, instituições, startups e projetos de impacto em Moçambique.</p>
            <div class="actions">
                <a class="btn primary" href="<?= url('contactos') ?>">Solicitar proposta</a>
                <a class="btn secondary" href="<?= url('servicos') ?>">Explorar serviços</a>
            </div>
        </div>
    </div>

    <div class="tp-slide">
        <div class="tp-slide-content">
            <span class="eyebrow">Inovação & Startups</span>
            <h1>Transformamos ideias em soluções tecnológicas reais.</h1>
            <p>Incubação, mentoria, formação, eventos e apoio estratégico para fortalecer o ecossistema de inovação.</p>
            <div class="actions">
                <a class="btn primary" href="<?= url('startups') ?>">Conhecer programas</a>
                <a class="btn secondary" href="<?= url('eventos') ?>">Ver eventos</a>
            </div>
        </div>
    </div>

    <div class="tp-slide">
        <div class="tp-slide-content">
            <span class="eyebrow">Segurança & Infraestrutura</span>
            <h1>Tecnologia segura para operações críticas.</h1>
            <p>Redes, CCTV, controlo de acesso, data centers, suporte técnico e integração de sistemas corporativos.</p>
            <div class="actions">
                <a class="btn primary" href="<?= url('solucoes') ?>">Ver soluções</a>
                <a class="btn secondary" href="<?= url('contactos') ?>">Falar com especialista</a>
            </div>
        </div>
    </div>

    <button class="tp-slider-btn prev" type="button" data-prev>‹</button>
    <button class="tp-slider-btn next" type="button" data-next>›</button>

    <div class="tp-slider-dots">
        <button class="active" type="button" data-dot="0"></button>
        <button type="button" data-dot="1"></button>
        <button type="button" data-dot="2"></button>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">O que fazemos</span>
        <h2>Uma plataforma tecnológica pensada para crescer com o país.</h2>
    </div>
    <p>
        A Techpark Mozambique reúne software, segurança eletrónica, formação,
        infraestrutura, inovação e apoio a startups numa abordagem simples,
        moderna e orientada a resultados.
    </p>
</section>

<section class="cards premium-cards">
    <article>
        <span class="card-icon">01</span>
        <strong>Desenvolvimento Digital</strong>
        <p>Websites, portais, sistemas, aplicativos e plataformas sob medida.</p>
    </article>

    <article>
        <span class="card-icon">02</span>
        <strong>Segurança Eletrónica</strong>
        <p>CCTV, controlo de acesso, alarmes, sensores e integração de sistemas.</p>
    </article>

    <article>
        <span class="card-icon">03</span>
        <strong>Inovação & Startups</strong>
        <p>Incubação, mentoria, formação, eventos e apoio a projetos inovadores.</p>
    </article>
</section>

<section class="impact-strip">
    <article><strong>360º</strong><span>Soluções tecnológicas</span></article>
    <article><strong>24/7</strong><span>Visão de suporte confiável</span></article>
    <article><strong>100%</strong><span>Foco em segurança</span></article>
    <article><strong>MZ</strong><span>Impacto local</span></article>
</section>

<section class="section soft-section">
    <div class="section-title center">
        <div>
            <span class="section-kicker">Serviços</span>
            <h2>Áreas de atuação</h2>
            <p>Serviços essenciais para organizações que procuram eficiência, segurança e presença digital.</p>
        </div>
    </div>

    <div class="grid">
        <?php foreach ($services as $service): ?>
            <article class="card service-card">
                <span class="service-badge">Techpark</span>
                <h3><?= e($service['title']) ?></h3>
                <p><?= e($service['summary']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>

    <div class="center-action">
        <a class="btn primary" href="<?= url('servicos') ?>">Ver todos os serviços</a>
    </div>
</section>

<section class="section split-section">
    <div>
        <span class="section-kicker">Porquê escolher a Techpark?</span>
        <h2>Tecnologia com confiança, segurança e visão de futuro.</h2>
        <p>
            Criamos soluções preparadas para crescer, com foco em segurança,
            auditoria, performance e experiência do utilizador.
        </p>
        <a class="btn primary" href="<?= url('contactos') ?>">Iniciar conversa</a>
    </div>

    <div class="feature-list">
        <article>
            <strong>Segurança desde a base</strong>
            <p>Permissões, auditoria, validação, backups e proteção de dados.</p>
        </article>

        <article>
            <strong>Arquitetura escalável</strong>
            <p>Projetos preparados para evoluir de website para plataforma completa.</p>
        </article>

        <article>
            <strong>Impacto tecnológico</strong>
            <p>Apoio a empresas, instituições, startups e talentos locais.</p>
        </article>
    </div>
</section>