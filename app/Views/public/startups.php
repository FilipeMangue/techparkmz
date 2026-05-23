<section class="startups-hero">
    <div>
        <span class="eyebrow">Startups & Inovação</span>
        <h1>Iniciativas moçambicanas com potencial de gerar valor real.</h1>
        <p>
            A Techpark Mozambique acredita em empresas criadas por moçambicanos,
            com capacidade de resolver desafios locais e competir em mercados globais.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">Ecossistema</span>
        <h2>Empresas que nascem para resolver problemas concretos.</h2>
    </div>

    <p>
        Esta página apresenta iniciativas, startups e projetos com base tecnológica,
        criados por empreendedores moçambicanos e com potencial de impacto social,
        económico e digital.
    </p>
</section>

<section class="section soft-section">
    <div class="section-title center">
        <div>
            <span class="section-kicker">Vitrine de startups</span>
            <h2>Iniciativas em destaque</h2>
            <p>
                Projetos com visão de crescimento, inovação e capacidade de contribuir
                para o desenvolvimento tecnológico de Moçambique.
            </p>
        </div>
    </div>

    <div class="grid startups-grid">
        <?php foreach ($startups as $startup): ?>
            <article class="card startup-card">
                <span class="service-badge"><?= e($startup['sector']) ?></span>
                <h3><?= e($startup['name']) ?></h3>
                <p><?= e($startup['summary']) ?></p>
                <a class="service-link" href="<?= url('contactos') ?>">Saber mais →</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section split-section">
    <div>
        <span class="section-kicker">Como apoiamos</span>
        <h2>Da ideia ao crescimento sustentável.</h2>
        <p>
            A Techpark pode apoiar startups com tecnologia, mentoria, presença digital,
            estruturação de produto, segurança, métricas e preparação para o mercado.
        </p>
        <a class="btn primary" href="<?= url('contactos') ?>">Submeter iniciativa</a>
    </div>

    <div class="feature-list">
        <article>
            <strong>Mentoria e validação</strong>
            <p>Apoio para transformar ideias em soluções claras, testáveis e úteis.</p>
        </article>

        <article>
            <strong>Produto mínimo viável</strong>
            <p>Desenvolvimento de MVPs, protótipos, plataformas e sistemas digitais.</p>
        </article>

        <article>
            <strong>Visibilidade e rede</strong>
            <p>Ligação com empresas, parceiros, eventos, programas e oportunidades.</p>
        </article>
    </div>
</section>

<section class="section innovation-band">
    <div>
        <span class="section-kicker">Impacto local</span>
        <h2>Startups moçambicanas podem criar soluções para o mundo.</h2>
        <p>
            Queremos dar visibilidade a iniciativas que geram emprego, conhecimento,
            inovação e soluções práticas para desafios reais.
        </p>
    </div>

    <a class="btn secondary" href="<?= url('contactos') ?>">Fazer parte</a>
</section>