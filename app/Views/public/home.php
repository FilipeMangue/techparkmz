<section class="hero">
    <div>
        <span class="eyebrow">Hub tecnológico em Moçambique</span>
        <h1>Construímos tecnologia confiável para empresas, startups e instituições.</h1>
        <p>
            A Techpark Mozambique combina software, inovação, segurança eletrónica,
            formação e infraestrutura tecnológica para acelerar a transformação digital.
        </p>

        <div class="actions">
            <a class="btn primary" href="<?= url('contactos') ?>">Solicitar proposta</a>
            <a class="btn secondary" href="<?= url('servicos') ?>">Explorar serviços</a>
        </div>
    </div>

    <div class="hero-panel">
        <strong>Techpark</strong>
        <span>Software • Segurança • Inovação • Startups</span>
        <p>
            Uma plataforma tecnológica preparada para apoiar organizações,
            formar talentos e impulsionar soluções digitais em Moçambique.
        </p>
    </div>
</section>

<section class="cards">
    <article>
        <strong>Desenvolvimento Digital</strong>
        <p>Websites, portais, sistemas, aplicativos e plataformas sob medida.</p>
    </article>

    <article>
        <strong>Segurança Eletrónica</strong>
        <p>CCTV, controlo de acesso, alarmes, sensores e integração de sistemas.</p>
    </article>

    <article>
        <strong>Inovação & Startups</strong>
        <p>Incubação, mentoria, formação, eventos e apoio a projetos inovadores.</p>
    </article>
</section>

<section class="impact-strip">
    <article>
        <strong>360º</strong>
        <span>Soluções tecnológicas</span>
    </article>

    <article>
        <strong>24/7</strong>
        <span>Visão de suporte confiável</span>
    </article>

    <article>
        <strong>100%</strong>
        <span>Foco em segurança</span>
    </article>

    <article>
        <strong>MZ</strong>
        <span>Impacto local</span>
    </article>
</section>

<section class="section">
    <div class="section-title">
        <div>
            <h2>Serviços em destaque</h2>
            <p>
                Áreas essenciais para empresas que procuram eficiência,
                segurança, presença digital e inovação contínua.
            </p>
        </div>

        <a class="btn light" href="<?= url('servicos') ?>">Ver todos</a>
    </div>

    <div class="grid">
        <?php foreach ($services as $service): ?>
            <article class="card">
                <h3><?= e($service['title']) ?></h3>
                <p><?= e($service['summary']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="section-title">
        <div>
            <h2>Porquê escolher a Techpark?</h2>
            <p>
                Uma abordagem simples, segura e orientada a resultados.
            </p>
        </div>
    </div>

    <div class="grid">
        <article class="card">
            <h3>Segurança desde a base</h3>
            <p>Projetamos soluções com atenção a permissões, auditoria, backups e proteção de dados.</p>
        </article>

        <article class="card">
            <h3>Escalabilidade</h3>
            <p>Arquitetura preparada para crescer de website institucional para plataforma completa.</p>
        </article>

        <article class="card">
            <h3>Impacto tecnológico</h3>
            <p>Apoiamos empresas, talentos e startups a criar soluções digitais relevantes.</p>
        </article>
    </div>
</section>