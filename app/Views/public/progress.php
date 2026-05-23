<section class="progress-hero">
    <div>
        <span class="eyebrow">Progresso & Impacto</span>
        <h1>O nosso percurso: de uma visão tecnológica a um hub de impacto.</h1>
        <p>
            A Techpark Mozambique nasce para construir soluções, apoiar inovação,
            formar talentos e fortalecer o ecossistema tecnológico moçambicano.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">Percurso</span>
        <h2>De onde viemos, onde estamos e para onde vamos.</h2>
    </div>

    <p>
        Esta página apresenta a evolução da Techpark, os principais marcos,
        a fase atual de desenvolvimento e a visão de impacto que queremos gerar
        em Moçambique e além-fronteiras.
    </p>
</section>

<section class="section soft-section">
    <div class="section-title center">
        <div>
            <span class="section-kicker">Linha do tempo</span>
            <h2>Marcos principais</h2>
            <p>Uma visão em construção, com foco em tecnologia, confiança e impacto real.</p>
        </div>
    </div>

    <div class="progress-timeline">
        <?php foreach ($milestones as $milestone): ?>
            <article class="progress-item">
                <div class="progress-year"><?= e($milestone['year']) ?></div>
                <div class="progress-content">
                    <h3><?= e($milestone['title']) ?></h3>
                    <p><?= e($milestone['summary']) ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="impact-strip">
    <article><strong>01</strong><span>Empresa formalizada</span></article>
    <article><strong>05+</strong><span>Áreas estratégicas</span></article>
    <article><strong>360º</strong><span>Visão tecnológica</span></article>
    <article><strong>MZ</strong><span>Impacto moçambicano</span></article>
</section>

<section class="section split-section">
    <div>
        <span class="section-kicker">Onde estamos</span>
        <h2>A construir uma base sólida para crescer.</h2>
        <p>
            A Techpark está a organizar a sua plataforma, identidade digital,
            serviços, soluções, recursos e estrutura de operação para servir melhor
            empresas, instituições, startups e comunidades.
        </p>
        <a class="btn primary" href="<?= url('contactos') ?>">Falar connosco</a>
    </div>

    <div class="feature-list">
        <article>
            <strong>Website e CMS</strong>
            <p>Estrutura digital para apresentar serviços, soluções, recursos e iniciativas.</p>
        </article>

        <article>
            <strong>Soluções próprias</strong>
            <p>Produtos digitais feitos em Moçambique para responder a desafios reais.</p>
        </article>

        <article>
            <strong>Ecossistema de inovação</strong>
            <p>Base para eventos, startups, formação, parcerias e partilha de conhecimento.</p>
        </article>
    </div>
</section>

<section class="section innovation-band">
    <div>
        <span class="section-kicker">Para onde vamos</span>
        <h2>Queremos ser uma referência tecnológica moçambicana.</h2>
        <p>
            O nosso objetivo é gerar valor, formar talentos, criar produtos,
            apoiar empreendedores e promover tecnologia segura, útil e escalável.
        </p>
    </div>

    <a class="btn secondary" href="<?= url('contactos') ?>">Juntar-se à jornada</a>
</section>